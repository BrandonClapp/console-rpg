<?php
class Unit
{
	protected $health = 100;
	protected $level = 1;

	public function removeHealth($amount) {
		$this->health -= $amount;
	}
}

?>