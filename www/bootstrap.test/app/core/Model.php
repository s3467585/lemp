<?php

namespace app\core;

use app\lib\Database;
use PDO;

 /**
 * 
 */
 abstract class Model {

 	public $db;
 	public $error;
 	public $message;
 	public $tablPrefix = "params_";

 	function __construct() {
 		$this->db = new Database;
 	}

/* Функция авторизации где $login это Логин */
function signin($login) {

	// проверим количество записей с указанным логином
	$count = $this->db->rowCount('users', 'login', $login);
	
	if ($count['num'] == 0 ) {
		$this->error = 'Логин не найден';
		return false; 
	}
	
	// заполняем данными пользователя из базы в переменную 
	
	$login = [
		'login' => $login,
	];

	$sql = 'SELECT * FROM users WHERE login = :login';

	$user = $this->db->row($sql, $login);
	
	// Проверка пустой записи
		if ($user['login'] == '') {
		$this->error = 'Пустой логин';
		return false; 
	}
	
	// Проверка соответствия логина и пароля
	if (!password_verify($_POST['password'], $user['password'])){
		$this->error = 'Неверный пароль';
		return false; 
	}  

	/* Заполняем время авторизации */
	if (!$this->authTime($user['id'])){
		$this->error = 'Ошибка записи времени регистрации';
		return false;
	}

	/* проверка на права администратора */
	if ($user['admin'] == 1 ) {

		unset($_SESSION['autorize']);
		//заполняем данными сессию admin
		$_SESSION['admin'] = [
			"id" => $user['id'],
			"full_name" => $user['full_name'],
			"login" => $user['login'],
			"email" => $user['email'],
			"auth_time" => $user['auth_time'],
			"creation_time" => $user['creation_time'],
			"stat_table" => $user['stat_table'],
		];
		

	} else {

		unset($_SESSION['admin']);
		//заполняем данными сессию пользователя
		$_SESSION['autorize'] = [
			"id" => $user['id'],
			"full_name" => $user['full_name'],
			"login" => $user['login'],
			"email" => $user['email'],
			"auth_time" => $user['auth_time'],
			"creation_time" => $user['creation_time'],
			"stat_table" => $user['stat_table'],
		];		
	}

	return true;
}

	

	/* Создание нового пользователя в базе даных принимает массив $logins с ключами full_name, login, email, password, creation_time*/

	public function createUser($logins){
		  	
		$sql = "INSERT INTO users (full_name, login, email, password, creation_time) VALUES (:full_name, :login, :email, :password, :creation_time)";
		
		if (!$this->db->query($sql, $logins)){
			$this->error = 'Ошибка в БД при создания учётной записи.';
			return false;
		} 
		return true;
	}

	


	/* Запись времени по id в БД*/
	public function authTime($id) {
		$logins = [
			'id' => $id,
		];
		$sql = "UPDATE `users` SET `auth_time` = ".time()." WHERE `users`.`id` = :id";
		$this->db->query($sql, $logins);
		return true;
	}

	/* Заполенение массива именами колонок таблицы*/
	public function columnName($tableName){
		$logins = [
			'TABLE_NAME' => $tableName,
		];

		$sql = "SELECT COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = :TABLE_NAME";

		$columnName = $this->db->rowAll($sql, $logins);

		$res = [];
		foreach ($columnName as $value){
			$res [] = $value['COLUMN_NAME'];
		}	
		return $res;
	}

}
