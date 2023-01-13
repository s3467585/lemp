<?php
	
	function arprint($row) {

		echo "<ol>";
		for ($row = 0; $row < 3; $row++) {
		    echo "<li><b>Номер строки $row</b>";
		    echo "<ul>";
		 
		    for ($col = 0; $col < 3; $col++) {
		        echo "<li>".$flowers[$row][$col]."</li>";
		    }
		 
		    echo "</ul>";
		    echo "</li>";
		}
		echo "</ol>";
	}