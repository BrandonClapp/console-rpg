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

	// string : the player's name.
	private $name = 'Unknown Player';

	// integer : the player's amount of experience points.
	private $xp = 0;

	// integer : the player's amount of gold.
	private $gold = 0;

	public function getName() {
		return $this->name;
	}

	public function getXp() {
		return $this->xp;
	}

	public function addXp($amount) {
		$this->xp += $amount;
	}

	public function getGold() {
		return $this->gold;
	}

	public function getHealth() {
		$calculatedHealth = $this->health + (20 * $this->level);
		return $calculatedHealth;
	}

	public function displayPlayerInfo() {
		echo "Player Information" . PHP_EOL;
		echo "--------------------------------" . PHP_EOL;
		echo "Name: " . $this->getName() . PHP_EOL;
		echo "Health: " . $this->getHealth() . PHP_EOL;
		echo "Level: " . $this->level . PHP_EOL;
		echo "XP: " . $this->getXp() . PHP_EOL;
		echo "--------------------------------" . PHP_EOL;
	}
}
?>