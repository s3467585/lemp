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
}