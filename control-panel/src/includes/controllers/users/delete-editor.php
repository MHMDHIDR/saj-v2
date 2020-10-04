<?php
	if(isset($_GET['delete'])) {
		// Require alert
		require_once $layoutsDir . 'alert.php';

		// Get Variable
		$editorId = $_GET['delete'];

		// Delete the Editorial Board Member From Database
		$stmt = $con->prepare('DELETE FROM saj_editors WHERE editor_id = ?');
		$query = $stmt->execute(array($editorId));
		if($query) {
			alert('You have successfully deleted this Editor.<br>
				Redirecting in 3 Seconds...', 'success', 'text-capitalize', true);
		} else {
			alert('The Editor hasn\'t been deleted, please try again.<br>
				Redirecting in 3 Seconds...', 'danger', 'text-capitalize', true);
		}
		// Redirect to events
		header('refresh: 3; url=home?p=Editors');
	} else {
		header('location: home?p=Editors');
	}