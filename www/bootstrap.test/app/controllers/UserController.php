<?php

namespace app\controllers;

/*Контролер страницы Пользователя*/

use app\core\Controller;

class UserController extends Controller {

	public function __construct($route){
		parent::__construct($route);
		$this->view->layout = 'user';
	}

	public function upageAction() {

		$login = $_SESSION['autorize']['login'];
		
		// имена привязаныз к пользователю устройств
		$devNames = $this->model->devBinding($login);
		
		// данные о состоянии контроллера
		$devStatus = $this->model->devStatus('devStatus');
		
		// даные о параметрах датчиков
		$devParam = $this->model->devParam($devNames, 15);

		$vars = [
			'devNames' => $devNames,
			'devStatus' => $devStatus,
			'devParam' => $devParam,
		];


		

		
		//d($vars);
		$this->view->render('UPage', $vars);
	}

	public function usertingsAction() {		
		$deviceStatus = $this->model->deviceStatus();

		$controlParam = $this->model->controlParam(15);
		$vars = [
			'devStatus' => $deviceStatus,
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


	public function testAction(){
		echo ('<h1>TEST</h1>');

	}


}
