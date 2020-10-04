<?php
	if(isset($_GET['makeEditor'])) {
		// Require alert
		require_once $layoutsDir . 'alert.php';

		// Get Variable
		$userId = $_GET['makeEditor'];

		// if empty value of get
		if(empty($userId)) {
			header('location: ?p=Users');
			exit();
		}

		// Update member group to 1 [Editor Authority]
		$stmt = $con->prepare('UPDATE saj_members SET mem_group = 1 WHERE mem_id = ?');
		$query = $stmt->execute(array($userId));
		if($query) {
			alert('You have successfully made this user as an editor.<br>
				Redirecting in 4 Seconds...', 'success', 'text-capitalize', true);
		} else {
			alert('Sorry, the User has\'t became an editor because he\'s already editor.<br>
				Redirecting in 4 Seconds...', 'danger', 'text-capitalize', true);
		}
		// Redirect to Users Page
		header('refresh: 4; url=home?p=Users');
	} else {
		header('location: home?p=Users');
	}