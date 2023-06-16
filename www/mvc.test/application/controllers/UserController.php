<?php

namespace application\controllers;

use application\core\Controller;

class UserController extends Controller {

	public function loginAction() {

		if (!empty($_POST)) {

			$this->view->massage('TEST', 'ТЕКСТ ОШИБКИ');
		}

		$this->view->render('Вход') ;

	}

	public function registerAction () {
		
		$this->view->render('Регистрация') ;

	}

}
