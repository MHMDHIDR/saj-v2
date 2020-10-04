<?php
	if(isset($_GET['delete'])) {
		// Require alert
		require_once $layoutsDir . 'alert.php';

		// Get Variable
		$catId = $_GET['delete'];

		// Delete the Category From Database
		$stmt = $con->prepare('DELETE FROM saj_categories WHERE cat_id = ?');
		$query = $stmt->execute(array($catId));
		if($query) {
			alert('You have successfully deleted this Category.<br>
				Redirecting in 3 Seconds...', 'success', 'text-capitalize', true);
		} else {
			alert('The Category hasn\'t been deleted, please try again.<br>
				Redirecting in 3 Seconds...', 'danger', 'text-capitalize', true);
		}
		// Redirect to events
		header('refresh: 3; url=home?p=Categories');
	} else {
		header('location: home?p=Categories');
	}