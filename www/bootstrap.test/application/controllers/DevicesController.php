<?php 

/* curl -d "test=12345" -X POST http://bootstrap.test/devices/ */
/* curl -d "temp=25&hum=35&pres=45&time=546464" -X POST http://192.168.10.254/devices/ */
/* curl -d "devName=1&ip=1&upTime=1&sysLoad=1&mac=1" -X POST http://192.168.10.254/devices/bootup */
/* curl -d "devName=1&ip=2&mac=3&bssid=4&sysLoad=5&upTime=6&connectTime=7&isntp=0" -X POST http://bootstrap.test/devices/devstatus */
/*	*/

namespace application\controllers;

/*Контролер обработки запросов с устройств*/

use application\core\Controller;
use application\lib\Db;

class DevicesController extends Controller {

/* Контролер для передачи состояния устройства */ 
	public function devstatusAction() {	
		if (!empty($_POST)) {
			$this->model->devstatus();
	 	}
	 	//debug($_POST);
	}

	public function postAction() {	
		if (!empty($_POST)) {

		$parpams = [
			'temp' => $_POST['temp'],
			'hum' => $_POST['hum'],
			'pres' => $_POST['pres'],
			'time' => $_POST['time'],
		];
			
			$this->model->post($parpams);
				 	
	 	}

	 	//debug($_POST)	;

	 	
	}

	public function getAction() {	
		if (!empty($_GET)) {

			$data = $_POST['test'];
			$this->model->post($data);
				 	
	 	}	

		echo 'Devices Page';

	}
}
