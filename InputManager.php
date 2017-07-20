<?php
class InputManager {
	public static function ask($question) {
		echo $question . " ";
		$handle = fopen ("php://stdin","r");
		$response = fgets($handle);

		// todo: error handling

		return $response;
	}

	public static function say($comment) {
		echo $comment . PHP_EOL;
	}
}


?>