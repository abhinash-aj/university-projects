<?php

	if(isset($_POST['submit'])) {
		require 'connection.php';

		$delete_regno = $_POST['username'];

		$sql = "DELETE FROM user_table WHERE username='$delete_regno'";
		mysqli_query($con, $sql);

		header("Location: ../delete-user.php?delete=success");
	}