<?php


Class Fahrenheit
{
	public function __construct($fahrenheit)
	{
		$this->fahrenheit = $this->validate($fahrenheit);
	}

	public function validate($fahrenheit) {
			$minimum = -459.67;
			if ($fahrenheit < (int)$minimum) {
				die('<div class="container"><div class="row"><h4 class="mx-auto text-danger">Minimal value of Fahrenheit is -459.67</h4></div></div>');
			}
		return $fahrenheit;
	}

	public function value() {
		return $this->fahrenheit;
	}

}