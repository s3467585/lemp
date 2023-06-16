<?php // Базовый класс Controller. Создаёт экземпляр класса View

namespace application\core;

use application\core\View;

abstract class Controller {

	public $route;
	public $view;
	public $acl;

	public function __construct($route){

		$this->route = $route;
		
		if (!$this->checkACL()) {
			
			View::errorCode(403);
		}

		$this->view = new View($route);                            // Создание эклемпляра класса с Видом
		$this->model = $this->loadModel($route['controller']);


	}

	public function loadModel($name) {

		$path = 'application\models\\'.ucfirst($name);
		if (class_exists($path)) {

			 return new $path();
		}

	}

	public function checkACL(){

		$url = 'application/acl/'.$this->route['controller'].'.php';
		
		if (file_exists($url)){
			
			$this->acl = require $url;
			
			if ($this->isAcl('all')){
				return true;
			} 
			elseif (isset($_SESSION['autorize']['id']) and $this->isAcl('autorize')){
				return true;	
			}
			elseif (isset($_SESSION['autorize']['id']) and $this->isAcl('guest')){
				return true;	
			}
			elseif (isset($_SESSION['admin']) and $this->isAcl('admin')){
				return true;
			} 
			return false;
		
		} //else View::massage('error', 'file ACL not found');
	
	}

	public function isAcl($key){

		return in_array($this->route['action'], $this->acl[$key]);
	}

}