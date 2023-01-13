<?php

namespace application\core;

class Router {

	protected $routes = []; // Переменная пути подготовленая регулярными выражениями
	protected $params = []; // Массив controller и action от стрвния с адресной строкой


	function __construct() {
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
		foreach ($this -> routes as $key => $value) {
			// Если сравнение найдено params класса принимает массив controller и action
			if (preg_match($key, $url, $matches)){
				$this -> params = $value;
				return true;
			}
		}
		return false;
	}
	// Функция запуска Controller
	public function run(){
		
		echo 'Start Rourer<br>';

		// Если маршрут найден
		if ($this -> match()){
			
			// Передаём переменной path путь до файла XxxxController.php  
			$path = 'application\controllers\\'.ucfirst($this -> params['controller']).'Controller';

			// Если класс найден выполняем сценарий
			if (class_exists($path)){

				debug(class_exists($path));
				
				$action = $this -> params['action'].'Action';
				
				if (method_exists($path, $action)){
					//
					$controller = new $path;
					$controller -> $action();
				} else {
					echo 'Не найден экшен: '.$action;
				}
			} else { // Если класс не обнаружен выполняем сценарий
				echo 'Не найден контроллер:'.$path;
				debug(class_exists($path));
			}
		} else {
			echo 'Маршрут не найден';
		}
	}
}