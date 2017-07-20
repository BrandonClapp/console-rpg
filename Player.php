<?php

require_once('Unit.php');

class Player extends Unit
{
	function __construct($playerName, $level = 1)
	{
		if(!is_null($playerName)) {
			$this->name = $playerName;
		}

		if(!is_null($level)) {
			$this->level = $level;
		}

		$this->health += 10;
	}

	private $name = 'Unknown Player';
	private $xp = 0;

	public function getName() {
		return $this->name;
	}

	public function getHealth() {
		$calculatedHealth = $this->health + (20 * $this->level);
		return $calculatedHealth;
	}

	public function displayPlayerInfo() {
		echo "Player Information" . PHP_EOL;
		echo "-----------------------------" . PHP_EOL;
		echo "Name: " . $this->getName();
		echo "Health: " . $this->getHealth() . PHP_EOL;
		echo "Level: " . $this->level . PHP_EOL;
		echo "-----------------------------" . PHP_EOL;
	}
}
?>