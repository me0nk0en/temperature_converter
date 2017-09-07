<?php


Class Kelvin
{
	public function __construct($kelvin)
	{
		$this->kelvin = $this->validate($kelvin);
	}

	public function validate($kelvin) {
			$minimum = 0;
			if ($kelvin < (int)$minimum) {
				die('<div class="container"><div class="row"><h4 class="mx-auto text-danger">Minimal value of Kelvin is 0</h4></div></div>');
			}
		return $kelvin;
	}

	public function value() {
		return $this->kelvin;
	}

}