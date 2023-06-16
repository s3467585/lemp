<?php // Создаёт экземпляр класса XxxxController и передаёт в переменную $controller

namespace application\core;

use application\core\View;

class Router {

	protected $routes = []; // Переменная пути подготовленая регулярными выражениями
	protected $params = []; // Массив controller и action от стравнения с адресной строкой
	protected $url;


	public function __construct() {
		$arr = require 'application/config/routes.php';
		foreach ($arr as $key => $value) {
		 	$this->add($key, $value);
		 }
		//debug($this->routes); 
	}

	// Функция добавления регулярных выражений значению route
	public function add($route, $params) {
		$route = '#^'.$route.'$#';
		$this->routes[$route] = $params;
		
	}

	// Функция сравнения  url адресной строки с routes
	public function match() {
		$url = trim($_SERVER['REQUEST_URI'], '/');
		$this->url = $url;
		foreach ($this->routes as $key => $value) {
			// Если сравнение найдено params класса принимает массив controller и action
			/*var_dump ($key);
			echo "<br>";
			var_dump ($url);
			echo "<br>";
			var_dump ($value);
			echo "<br>";*/

			if (preg_match($key, $url, $matches)){
				$this->params = $value;
				return true;
			}
		}
		return false;
	}
	
	// Функция запуска Controller
	public function run(){

		// Если маршрут найден
		if ($this->match()){
			
			// Передаём переменной path путь до файла XxxxController.php  
			$path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';

			// Если класс найден выполняем сценарий
			if (class_exists($path)){
				
				$action = $this->params['action'].'Action';
				
				if (method_exists($path, $action)){
					// Проверка наличия метода-экшен в контролере
					$controller = new $path($this->params);
					$controller->$action();
				
				} else {
					// Если экшен не обнаружен выполняем сценарий
					$message = 'Не найден экшен: '.$action;
					View::errorCode (404, $message );
				}

			} else { 
				// Если класс не обнаружен выполняем сценарий
				$message = 'Не найден контроллер: '.$path;
				View::errorCode (404, $message );
				
			}
		} else {
			// Если маршрут не обнаружен выполняем сценарий
			$message = 'Не найден маршрут: '.$this->url;
			View::errorCode (404, $message);
		}
	}
}