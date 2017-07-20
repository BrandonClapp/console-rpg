<?php
require_once('Unit.php');

class Monster extends Unit
{
	function __construct()
	{

	}

	public function attack($unit)
	{
		$unit->removeHealth(10);
	}
}

?>