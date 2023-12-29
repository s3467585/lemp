<?php

/*Клас для работы с базой данных*/

namespace application\lib;
use PDO;

class Db {

	protected $db;
	public $dbname;

	public function __construct () {

		$path = 'application/config/db.php';

		if (file_exists($path)){

			$config = require $path;
			$this->dbname = $config['dbname'];

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

	/* Функция подготовки запроса */
	public function query($sql, $params = []) {
		//debug($params);	
		//debug($sql);	
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				 

				 if (is_int($val)) {
					$type = PDO::PARAM_INT;
				} else {
					$type = PDO::PARAM_STR;
				} 
				$stmt->bindValue(':'.$key, $val, $type);
				
			}
		}
		//debug($stmt);
		$stmt->execute();
		return $stmt;
	}

	/* Возвращает массив, содержащий все найденные записи 'ключь' => 'значение' */
	public function rowAll($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	/* Возвращает массив, содержащий найденные записи последовательно при вызове или NUL если завершено*/
	public function row($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetch(PDO::FETCH_ASSOC);
	}

	/* Возвращает конкретныю строку */
	public function column($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

	/* Возвращает ID последней вставленной строки */
	public function lastInsertId() {
		return $this->db->lastInsertId();
	}
	
	/* Принимает таблицу, столбец, значение и выдает количество найденых записей */
	public function rowCount($table, $key, $param) {

		$param = [
			$key => $param,
		];
		
		// запрос на выбор значения конкретного сталбца в конкретной таблице
		$sql = 'SELECT COUNT('.$key.') AS num FROM '.$table.' WHERE '.$key.' = :'.$key;
		
		//возврат количества наёденных записей	
		return $this->row($sql, $param);
	}
		

	/* Подсчёт количества записей таблице с заданным парамером */
	public function colunmCount($table, $key) {	
		$sql = 'SELECT COUNT('.$key.') FROM '.$table.'';
		return $this->column($sql);
	}

	/* Проверка на наличие записи в таблице */
	public function isColumnExist($column, $tableName, $val){
		$params = [
			$column => $val,
		];
		$sql = 'SELECT '.$column.' FROM '.$tableName.' WHERE '.$column.' = :'.$column.'';
		return $this->column($sql, $params);
	}

	/* Проверка существования таблицы */
	public function isTableExist($tableName){
		$params = [
			'TABLE_NAME' => $tableName,
		];
		$sql = 'SHOW TABLES LIKE :TABLE_NAME';
		if ($this->rowAll($sql, $params)){
			return true;	
		} else {
			return false;
		}
	}

	/**
	*	Обновление значения поля
	*	@param String $tableName Имя изменяемой таблицы
	*	@param String $column Имя колонки для изменения
	*	@param int $id id для выбора строки
	*	@param String $val Значение записываемое в поле
	**/
	public function updateColumn($tableName, $column, $id, $val) {
		$params = [
			'id' => $id,
			$column => $val,
		];

		$sql = "UPDATE $tableName SET $column = :$column WHERE users.id = :id";
			
		$this->query($sql, $params);
		return true;
	}






	public function test ($sql, $params = []){
		debug($sql);
		debug($params);
		$stmt = $this->db->prepare($sql);
		debug($stmt);
		$stmt->execute($params);
		return $stmt;
	}

}

	

