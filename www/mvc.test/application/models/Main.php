<?php

namespace application\models;

use application\core\Model;


/**
 * 
 */
class Main extends Model {
	
	public function getNews() {

		// code...
		$result = $this->db->row('SELECT temp0, temp1, temp2 FROM stat_1');
		return $result;
	}
}

