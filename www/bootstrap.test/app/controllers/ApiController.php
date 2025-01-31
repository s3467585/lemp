<?php 

namespace app\controllers;

/* Контролер API */

use app\core\Controller;
use app\lib\Database;

class ApiController extends Controller {

	public function jsonAction() {	

	
		
		if (!empty(file_get_contents('php://input'))) {
			$this->model->json();
	 	}
		
		//debug($_POST);
		//$this->view->render('Главная страница');
	}

	/* Функция сохранения данных от устройства в базу данных apiData */
	/* Формат поле version = int, apiData = data, flag = int */
	public function apiDataAction(){
		if (!empty($_POST)) {
			
			$version = $_POST['version'];
			$flag = $_POST['flag'];
			$apiData = $_POST['apiData'];

			$this->model->apiData($version, $apiData, $flag);
		}
	}
}