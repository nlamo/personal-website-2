<?php

if (!isset($_SESSION)) {
	session_start();
}

if (isset($_SESSION['inputsHaveContent'])) {
	$inputsHaveContent = $_SESSION['inputsHaveContent'];

	if (isset($_SESSION['emailIsValid'])) {
		$emailIsValid = $_SESSION['emailIsValid'];
	}

	if (isset($_SESSION['answerIsValid'])) {
		$answerIsValid = $_SESSION['answerIsValid'];
	}

	session_unset();
}
