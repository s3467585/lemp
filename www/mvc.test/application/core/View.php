<?php 	// Базовый класс View. Производит рендер страницы. 
		//Подгружается общий шаблон $layout, а затем вид переданный экземляром контролера

namespace application\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route){

		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
		
	}

	public function render($title, $vars = []) {

		$path = 'application/views/'.$this->path.'.php';
		extract($vars);

		if (file_exists ($path)) {
			ob_start();
			require $path;                                                
			$content = ob_get_clean();									// Наполнение контентом странцы 
			require 'application/views/layouts/'.$this->layout.'.php';	// Вывод общего шаблона для старниц
		} else {
			echo 'Вид не найден: '. $this->path;
		}
	}

	public static function errorCode($code) {

		$path = 'application/views/errors/'.$code.'.php';
		http_response_code($code);
		if (file_exists ($path)){ 
			require $path;
			exit;
		}
	}

	public function redirect($url){
		
		header('Location:'.$url);
		exit;
	}	

	public function message($status, $message) {
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	public function location($url) {

		exit(json_encode(['url' => $url]));
	}

}
