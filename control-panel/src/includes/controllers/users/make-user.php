<?php
	if(isset($_GET['makeUser'])) {
		// Require alert
		require_once $layoutsDir . 'alert.php';

		// Get Variable
		$userId = $_GET['makeUser'];

		// if empty value of get
		if(empty($userId)) {
			header('location: ?p=Users');
			exit();
		}

		// Update member group to 0 [Normal User]
		$stmt = $con->prepare('UPDATE saj_members SET mem_group = 0 WHERE mem_id = ?');
		$query = $stmt->execute(array($userId));
		if($query) {
			alert('You have successfully made this user as a normal user.<br>
				Redirecting in 4 Seconds...', 'success', 'text-capitalize', true);
		} else {
			alert('Sorry, the editor has\'t became normal user because he\'s already a normal user.<br>
				Redirecting in 4 Seconds...', 'danger', 'text-capitalize', true);
		}
		// Redirect to Users Page
		header('refresh: 4; url=home?p=Users');
	} else {
		header('location: home?p=Users');
	}