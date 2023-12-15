<?php 

namespace application\controllers;

/*Контролер страницы пользователя*/

use application\core\Controller;
use application\lib\Db;

class TestController extends Controller {

	public function __construct($route){
		parent::__construct($route);
		$this->view->layout = 'test';
	}

	public function testAction() {	
		
		$this->view->render('TEST P');
	}
}