<?php

namespace app\controllers;

/*Контролер страницы Пользователя*/

use app\core\Controller;

class UserController extends Controller {

	public $devBindNames = [];
	public $userDevStatus =[];
	public $userDevSensors =[];
	public $userDevParam =[];


	public function __construct($route){
		parent::__construct($route);
		$this->view->layout = 'user';
	}

	public function upageAction() {

		$login = $_SESSION['autorize']['login'];
		$devStatusTable = 'devStatus';
		
		// имена привязаных к пользователю устройств
		$this->devBindNames = $this->model->devBinding($login);

		// заполняем массив служебной информацией от устройств привязанных к пользователю
		foreach ($this->devBindNames as $key => $devBindName) {			
			$this->userDevStatus[$devBindName] = $this->model->userDevStatus($devStatusTable, $devBindName);	
		}
		
		// заполняем массив датчиками и их данными, от устройств привязанных к пользователю
		foreach ($this->devBindNames as $key => $devBindName) {			
			
			$this->userDevParam[$devBindName] = $this->model->userDevParam($login, $devBindName, 15);
			
			if (isset($this->userDevParam[$devBindName]['json'])) {
				
				$jsons = $this->userDevParam[$devBindName]['json'];

				$userDevParam = [];

				foreach ($jsons as $key => $json) {
					
					$arr = (json_decode($json));
					
					//d($arr);

					foreach ($arr as $devSensor => $devSensorVal) {

						//d($devSensor);

						$userDevParam[$devSensor][] = $devSensorVal;

						if ($devSensor == 'time') {
							$userDevParam['timeChart'][] = clock($devSensorVal);
						}

						//d($devSensor);
						//d($devSensorVal);
						//d($userDevParam[$devSensor]);
					}					
				}

				foreach ($userDevParam as $devSensors => $value) {
					
					$this->userDevSensors[$devBindName][] = $devSensors;
				}

				$this->userDevParam[$devBindName]['sensors'] = $userDevParam;
			}
		}

		$vars = [
			'devBindNames' => $this->devBindNames,
			'userDevStatus' => $this->userDevStatus,
			'userDevSensors' => $this->userDevSensors,
			'userDevParam' => $this->userDevParam,
		];

	
		//d($vars);
		$this->view->render('UPage', $vars);
	}

	/*public function usertingsAction() {		
		$deviceStatus = $this->model->deviceStatus();

		$controlParam = $this->model->controlParam(15);
		$vars = [
			'devStatus' => $deviceStatus,
			'controlParam' => $controlParam,
		];
		//debug($vars);
		$this->view->render('USettings', $vars);
	}*/

	

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
