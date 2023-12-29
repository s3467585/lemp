<?php

namespace application\models;

use application\core\Model;
use PDO;

/**
 * 
 */
class MainModel extends Model {
	
	/*  Обработка формы обратной связи */
	public function mailValidate($post) {
		
		return true;
	}
	
	

	
	/*  Обработка формы регистрация пользователя */
	public function signup($post) {
		
		// заносим значения в масив для подготовки запроса 
		$params = [
			'full_name' => $post['full_name'],
			'login' => $post['login'],
			'email' => $post['email'],
			'password' => password_hash($post['password'], PASSWORD_DEFAULT),
			'creation_time' => time(), //date('Y-m-d H-i-s'),
		];
		
		/* проверка наличия указанного логина */
		$count = $this->db->rowCount('users', 'login', $post['login']);

		if ($count['num'] > 0 ) {
			$this->error = 'Пльзователь '.$params['login'].' уже существует';
			return false;
		} 

		$this->createUser($params);
		$this->signin($param);
		return true;
	}
		
		
	

	public function getNews() {

		// code...
		$result = $this->db->row('SELECT temp0, temp1, temp2 FROM stat_1');
		return $result;
	}
}

