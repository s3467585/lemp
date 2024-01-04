<?php 

namespace app\controllers;

/*Контролер страницы пользователя*/

use app\core\Controller;
use app\lib\Database;

class TestController extends Controller {

	public function __construct($route){
		parent::__construct($route);
		$this->view->layout = 'test';
	}

	public function testAction() {	

		$vars = [
			'content' => "TEST",
		];
		
		$this->view->render('TEST P', $vars);
	}
}