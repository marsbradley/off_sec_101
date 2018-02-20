<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: exercise_4.php");
?>