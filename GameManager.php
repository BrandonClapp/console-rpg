<?php
require_once('InputManager.php');

class GameManager {

	function __construct($player) {
		$this->player = $player;
	}

	private $isInCombat = false;
	private $player;

	public function start() {

		while(true) {

			if(!$this->isInCombat) {
				GameManager::displayOutOfCombatOptions();
			} else {
				$this->displayInCombatOptions();
			}

		}

	}

	private function displayOutOfCombatOptions() {
		InputManager::say('Select an option.');
		InputManager::say('--------------------------------');
		InputManager::say('1. Quest for experience points.');
		InputManager::say('2. Shop for items.');
		InputManager::say('3. Sleep to regain health and mana.');
		InputManager::say('4. Check your character statistics.');
		InputManager::say('--------------------------------');
		$selectedOption = InputManager::getInteger();
		
		if($selectedOption == 1) {
			$this->goQuesting();
		} else if ($selectedOption == 2) {
			$this->goShopping();
		} else if ($selectedOption == 3) {
			$this->goToSleep();
		} else if ($selectedOption == 4) {
			$this->player->displayPlayerInfo();
		} else {
			InputManager::say("Invalid selection. Try again.");
			$this->displayOutOfCombatOptions();
		}
	}

	private function displayInCombatOptions() {
		InputManager::say('Select an option.');
		InputManager::say('--------------------------------');
		InputManager::say('1. Attack');
		InputManager::say('2. Use item');
		InputManager::say('3. Run away');
		InputManager::say('4. Check your character statistics.');
		InputManager::say('--------------------------------');

		$selectedOption = InputManager::getInteger();

		if($selectedOption == 1) {
			InputManager::say("Attacking...");
		} else if ($selectedOption == 2) {
			InputManager::say("Opening your backpack...");
			$this->showInvetory();
		} else if ($selectedOption == 3) {
			InputManager::say("Running away...");
		} else if ($selectedOption == 4) {
			$this->player->displayPlayerInfo();
		} else {
			InputManager::say("Invalid selection. Try again.");
			$this->displayOutOfCombatOptions();
		}
	}

	private function showInvetory() {
		InputManager::say("There is currently nothing in your inventory.");
	}

	private function goQuesting() {
		// random chance to get xp vs. get in a battle.
		InputManager::say("You chose to go questing for XP.");

		$random = rand(1, 100);
		if($random < 75) {
			$this->player->addXp(10);
			InputManager::say("You have gained 10 experience.");
		} else {
			InputManager::say("You have been spotted by an enemy. Prepare for battle!");
			$this->isInCombat = true;
		}
	}

	private function goShopping() {
		InputManager::say("You decided to shop for items.");
	}

	private function goToSleep() {
		InputManager::say("You decided to go to sleep.");
	}
}
?>