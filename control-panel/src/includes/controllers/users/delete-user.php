<?php
	if(isset($_GET['delete'])) {
		// Require alert
		require_once $layoutsDir . 'alert.php';

		// Get Variable
		$userId = $_GET['delete'];

		// if empty value of get
		if(empty($userId)) {
			header('location: ?p=Users');
			exit();
		}

		// Connection
		$stmt = $con->prepare('DELETE FROM saj_members WHERE mem_id = ?');
		$query = $stmt->execute(array($userId));
		if($query) {
			alert('You have successfully deleted This User.<br>
				Redirecting in 3 Seconds...', 'success', 'text-capitalize', true);
		} else {
			alert('Sorry, the User has\'t been deleted for undefined issue, to report this problem, please contact the system adminstrator.<br>
				Redirecting in 3 Seconds...', 'danger', 'text-capitalize', true);
		}
		// Redirect to Users Page
		header('refresh: 3; url=home?p=Users');
	} else {
		header('location: home?p=Users');
	}