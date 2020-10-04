<?php
	if(isset($_GET['delete'])) {
		// Require alert
		require_once $layoutsDir . 'alert.php';

		// Get Variable
		$eventId = $_GET['delete'];

		// Delete the Event From Database
		$stmt = $con->prepare('DELETE FROM saj_events WHERE event_id = ?');
		$query = $stmt->execute(array($eventId));
		if($query) {
			alert('You have successfully deleted the event.<br>
				Redirecting in 3 Seconds...', 'success', 'text-capitalize', true);
		} else {
			alert('The event hasn\'t been deleted, please try again.<br>
				Redirecting in 3 Seconds...', 'danger', 'text-capitalize', true);
		}
		// Redirect to events
		header('refresh: 3; url=home?p=Events');
	} else {
		header('location: home?p=Events');
	}