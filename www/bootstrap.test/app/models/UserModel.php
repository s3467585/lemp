<?php

namespace app\models;

use app\core\Model;


/**
 * 
 */
class UserModel extends Model {

	public function upage(){

		
	}

	public function usettings(){
		
	}
	


	public function getNews() {

		// code...
		$result = $this->db->row('SELECT temp0, temp1, temp2 FROM stat_1');
		return $result;
	}





	public function controlParam($limit){
		
		$controlParam = [];
		
		$table = $this->tablPrefix.$_SESSION['autorize']['login'];

		if (!$this->db->isTableExist($table)) {
			$this->error = 'Таблица '.$table.' не найдена';
			return false;
		}

		/* Запрос имен в таблице контолируемых параметров*/
		$columnName = $this->columnName($table);
		//debug($columnName);

		/* Запрос 15 последних записей данных*/
		$sql = "SELECT * FROM `$table` ORDER BY `id` ASC LIMIT ".$limit;
		$sensVal =$this->db->rowAll($sql);

		/* Запись значений в массив с массивами параметров*/
		foreach ($columnName as $name) {
			foreach ($sensVal as $value) {
				if ($name == 'time'){
					$controlParam[$name][] = $this->clock($value[$name]);	
				} else {
					$controlParam[$name][] = $value[$name];
				}
				
			}
		}
		//debug($controlParam);
		return $controlParam;
	}


	public function deviceParam($table){
		$params = [
			$table => $table,
		];
		$sql = "SELECT * FROM $table";
		$deviceParam = $this->db->row($sql, $params);
		//debug($deviceParam);
		return $deviceParam;	
	}








	function clock($time) {
		$time = $time;
		$timep= date("j M Y в H:i", $time);
		$time_p[0]=date("j n Y", $time);
		$time_p[1]=date("H:i", $time);
		if ($time_p[0]==date("j n Y", time()))$timep='Сегодня в '.$time_p['1'];
		if ($time_p[0]==date("j n Y", time()-86400))$timep='Вчера в '.$time_p['1'];
		$months_eng = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
		$months_rus = array('Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря');
		$timep = str_replace($months_eng,$months_rus,$timep);
		return $timep;
	}

	function datediff($date1, $date2){
	$diff = $date2 - $date1;
	$d=floor($diff/3600/24);
	$h=floor($diff/3600)%24;
	$m=floor(($diff%3600)/60);
	$s=($diff%3600)%60;
	//$s=($diff%60);

	if($d>0) {
		return $d.' д. '.$h.' ч. '.$m.' мин.';
	} elseif ($h>0) {
		return $h.' ч. '.$m.' мин.';
	} else
		return $m.' мин. '.$s.' сек.';	
	}
	
}

