<?php

namespace application\controllers;

/*Контролер страницы Пользователя*/

use application\core\Controller;

class UserController extends Controller {

	public function __construct($route){
		parent::__construct($route);
		$this->view->layout = 'user';
	}

	public function upageAction() {

		$deviceParam = $this->model->deviceParam('devStatus');
		$controlParam = $this->model->controlParam(15);

		$vars = [
			'devStatus' => $deviceParam,
			'controlParam' => $controlParam,
		];
		//debug($vars);
		$this->view->render('UPage', $vars);
	}

	public function usettingsAction() {		
		$deviceParam = $this->model->deviceParam();

		$controlParam = $this->model->controlParam(15);
		$vars = [
			'devStatus' => $deviceParam,
			'controlParam' => $controlParam,
		];
		//debug($vars);
		$this->view->render('USettings', $vars);
	}

	public function logoutAction() {
		if (isset($_SESSION['autorize'])){
			unset($_SESSION['autorize']);
		} else {
			unset($_SESSION['admin']);	
		}
		$this->view->redirect('/signin');
	}	


	public function test(){
		echo ('<h1>TEST</h1>');
	}


}
