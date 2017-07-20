<?php
class InputManager {
	public static function ask($question = null, $expectedType = 'string') {
		if(!is_null($question)) {
			echo $question . " ";
		}
		
		$handle = fopen ("php://stdin","r");
		$response = trim(fgets($handle));

		if(empty($response)) {
			echo "Please enter a value." . PHP_EOL;
			return InputManager::ask($question, $expectedType);
		}

		if($expectedType == 'integer' || $expectedType == 'float')  {
			if(!is_numeric($response)) {
				echo "A(n) " . $expectedType . " was expected. Try again." . PHP_EOL;
				return InputManager::ask($question, $expectedType);
			}
		}

		settype($response, $expectedType);
		return $response;
	}

	public static function getInteger() {
		return InputManager::ask(null, 'integer');
	}

	public static function say($comment) {
		echo $comment . PHP_EOL;
	}
}


?>