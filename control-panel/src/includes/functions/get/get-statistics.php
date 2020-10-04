<?php
	function getStatstic($field, $table, $where = NULL, $whereVal = NULL) {
		require __DIR__ . '/../../../dbcon.php';
		// Select Query
		$getStatstic = $con->prepare('SELECT COUNT('.$field.')
			FROM '.$table.' WHERE '.$where.' = '.$whereVal.'');
		$getStatstic->execute();
		$statistics = $getStatstic->fetchColumn();

		echo $statistics;
	}