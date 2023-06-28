<?php 

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {

	public function indexAction() {		
		$this->view->render('Главная страница');
		$this->view->message("test", 'test');
	}

	public function aboutAction() {		
		$this->view->render('О нас');
	}

	public function contactAction() {		
		$this->view->render('Контакты');
	}

}