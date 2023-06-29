<?php

namespace application\lib;
use PDO;

class Db {

	protected $db;

	public function __construct () {

		$path = 'application/config/db.php';

		if (file_exists($path)){

			$config = require $path;

			try {  
				
				# MySQL через PDO_MYSQL
				# $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);   
				$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].'', $config['bduser'], $config['dbpassword']);

				#PDO можно перевести в любой из трех режимов ошибок
				$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 

			}  
				catch(PDOException $e) {  
			    echo $e->getMessage();  
			    file_put_contents('/application/lib/PDOErrors.txt', $e->getMessage(), FILE_APPEND);
			}
	
		} else {

			echo 'Файл конфигурации базы данных не найден';
		}

	}

	// public function query($sql, $params = []) {

	// 	$stmt = $this->db->prepare($sql);
	// 	if (!empty($params)) {
	// 		foreach ($params as $key => $value) {
	// 			$stmt->bindValue(':'.$key, $value);
	// 		}
	// 	}

	// 	$stmt->execute();

	// 	return $stmt;
	// }

	// public function row($sql, $params = []) {
	// 	$result = $this->query($sql, $params);
	// 	return $result->fetchAll(PDO::FETCH_ASSOC);
	// }

	// public function columm($sql, $params = []) {
	// 	$result = $this->query($sql, $params);
	// 	return $result->fetchColumn();
	// }

}