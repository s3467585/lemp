<?php // Создаёт экземпляр класса XxxxController и передаёт в переменную $controller

namespace app\core;

use app\core\View;

class Router {

	protected $routes = []; // Переменная пути подготовленая регулярными выражениями
	protected $params = []; // Массив controller и action от стравнения с адресной строкой
	protected $url;			// Запрошенный URL 


	public function __construct() {
		$arr = require 'app/config/routes.php';
		foreach ($arr as $key => $value) {
		 	$this->add($key, $value);
		 	
		 }
	}

	// Функция добавления регулярных выражений значению route
	public function add($route, $params) {
		$route = preg_replace('/{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $route);
		$route = '#^'.$route.'$#';
		$this->routes[$route] = $params;
	}

	// Функция сравнения  url адресной строки с routes
	public function match() {
		$url = trim($_SERVER['REQUEST_URI'], '/');
		$this->url = $url;
		foreach ($this->routes as $route => $params) {

            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        if (is_numeric($match)) {
                            $match = (int) $match;
                        }
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
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
			$path = 'app\controllers\\'.ucfirst($this->params['controller']).'Controller';

			// Если класс найден выполняем сценарий
			if (class_exists($path)){
				
				$action = $this->params['action'].'Action';
				
				// Проверка наличия метода-экшен в контролере
				if (method_exists($path, $action)){

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
			$message = 'Страница не найдена';
			View::errorCode (404, $message);
		}
	}
}