<?php

Class Celcius
{
	public function __construct($celcius)
	{
		$this->celcius = $this->validate($celcius);
	}

	public function validate($celcius) {
			$minimum = -273.15;
			if ($celcius < (int)$minimum) {
				die('<div class="container"><div class="row"><h4 class="mx-auto text-danger">Minimal value of Celcius is -273.15</h4></div></div>');
			}
		return $celcius;
	}

	public function value() {
		return $this->celcius;
	}

}