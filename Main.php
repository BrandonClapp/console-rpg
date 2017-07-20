<?php
	require_once('InputManager.php');
	require_once('GameManager.php');
	require_once('Player.php');
	require_once('Monster.php');

	$name = InputManager::ask('What is your name?');
	$player = new Player($name);
	$player->displayPlayerInfo();

	$gameManager = new GameManager($player);

	InputManager::say('Welcome to the game!');

	$gameManager->start();
	
?>