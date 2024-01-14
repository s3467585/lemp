<?php // Базовый класс Controller. Создаёт экземпляр класса View

namespace app\core;

use app\core\View;

abstract class Controller {

	public $route;  // Массив controller и action от стравнения с адресной строкой
	public $view;
	public $acl;
	public $error;

	public function __construct($route){

		$this->route = $route;
		
		if (!$this->checkACL()) {
			
			View::errorCode(403, 'Доступ запрещён');
		}
		
		$this->view = new View($route);           // Создание эклемпляра класса Вида
		$this->model = $this->loadModel($route['controller']); // Создание эклемпляра класса Модели
	}

	public function loadModel($name) {

		$path = 'app\models\\'.ucfirst($name).'Model';
		if (class_exists($path)) {
			 
			 return new $path();
		}

	}

	public function checkACL(){

		$url = 'app/acl/'.$this->route['controller'].'.php';
		
		if (file_exists($url)){
			
			$this->acl = require $url;
			
			if ($this->isAcl('all')){
				return true;
			} 
			elseif (isset($_SESSION['autorize']) and $this->isAcl('autorize')){
				return true;	
			}
			elseif (isset($_SESSION['guest']) and $this->isAcl('guest')){
				return true;	
			}
			elseif (isset($_SESSION['admin']) and $this->isAcl('admin')){
				return true;
			} 
			return false;
		
		}  	
	}

	public function isAcl($key){
		/*debug ($_SESSION);
		debug ($this->route['action']);
		debug ($this->acl[$key]);
		echo ('<hr>');*/

		return in_array($this->route['action'], $this->acl[$key]);
	}


	/* ваалидация формы авторизации */
	public function signinValidate($post) {

		if (!$this->len($post['login'], 2, 20)) {
				$this->error = 'Логин должен содержать от 2 до 20 символов';
				return false;
			} elseif (!$this->len($post['password'], 5, 30)) {
				$this->error = 'Проль не менее 5 символов';
				return false;
			} 
		return true;
	}

	public function signupValidate($post) {
		if (!$this->len($post['full_name'], 2, 30)) {
				$this->view->message('error', 'Имя должно содержать от 2 до 30 символов');
				return false;
			} elseif (!$this->len($post['login'], 2, 20)) {
				$this->view->message('error', 'Логин должен содержать от 2 до 20 символов');
				return false;
			} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
				$this->view->message('error', 'E-mail указан не верно');
				return false;
			} elseif (!$this->len($post['password'], 5, 30)) {
				$this->view->message('error', 'Проль должно содержать от 5 до 30 символов');
				return false;
			} elseif ($post['password'] !== $post['password_confirm']) {
				$this->view->message('error', 'Проли не совпадают');
				return false;
			} 
		return true;
	}


	// Методы валидации строк
	// 	len($text, $min, $max) - проверка на количество символов в строке
 	public function len($text, $min, $max) {
 		$len = iconv_strlen($text);
 		if ($len < $min or $len >$max) {
 			return false;
 		} 
 		return true;
 	}


}