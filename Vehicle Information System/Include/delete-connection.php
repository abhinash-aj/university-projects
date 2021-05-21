<?php

	if(isset($_POST['submit'])) {
		require 'connection.php';

		$delete_regno = $_POST['regno'];

		$sql = "DELETE FROM car_information WHERE regno='$delete_regno'";
		mysqli_query($con, $sql);

		header("Location: ../delete.php?delete=success");
	}