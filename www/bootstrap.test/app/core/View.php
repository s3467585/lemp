<?php 	// Базовый класс View. Производит рендер страницы. 
		//Подгружается общий шаблон $layout, а затем вид переданный экземляром контролера

namespace app\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';
	public $error;
	public $message;

	public function __construct($route){

		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
		
	}

	public function render($title, $vars = []) {

		//debug ($_SESSION);

		$path = 'app/views/'.$this->path.'.php';
		extract($vars);
		if (file_exists ($path)) {
			ob_start();
			require $path;                                                
			$content = ob_get_clean();		// Наполнение контентом странцы 
			require 'app/views/layouts/'.$this->layout.'.layout.php';	// Вывод общего шаблона для старниц
		} else {
			echo 'Вид не найден: '. $this->path;
		}
	}

	public static function errorCode($code, $message) {
		$path = 'app/views/errors/error.php';
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
	/* Вызов алерт с сообщением*/
	public function message($status, $message) {
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	public function error_message($status, $message) {
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	/* Перенаправление на другой URL через JS*/
	public function location($url, $status = '', $message = '') {
		//debug($url);
		if (!empty($status) || !empty($status)){
			exit(json_encode(['url' => $url, 'status' => $status, 'message' => $message]));	
		}

		exit(json_encode(['url' => $url]));
	}

	

}
