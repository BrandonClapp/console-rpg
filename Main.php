<?php
	require_once('InputManager.php');
	require_once('Player.php');
	require_once('Monster.php');

	$name = InputManager::ask('What is your name?');
	$player = new Player($name);
	$player->displayPlayerInfo();

	InputManager::say('Welcome to the game!');
	InputManager::say('Going into the game loop... Press Ctrl + C to exit');

	while(true) {
		// game loop.
	}
?>