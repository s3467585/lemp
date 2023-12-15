<?php 

namespace application\controllers;

/* Контролер API */

use application\core\Controller;
use application\lib\Db;

class ApiController extends Controller {

	public function jsonAction() {	

	
		
		if (!empty(file_get_contents('php://input'))) {
			$this->model->json();
	 	}
		
		//debug($_POST);
		//$this->view->render('Главная страница');
	}
}