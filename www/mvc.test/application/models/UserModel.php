<?php

namespace application\models;

use application\core\Model;


/**
 * 
 */
class UserModel extends Model {

	public $error;

	public function loginValidate ($post) {

		$this->error = 'TEST';
		return false;
	}
	
	


	public function getNews() {

		// code...
		$result = $this->db->row('SELECT temp0, temp1, temp2 FROM stat_1');
		return $result;
	}
}

