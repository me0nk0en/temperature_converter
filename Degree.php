<?php

Class Degree
{
	public function __construct($degree)
	{
		$this->degree = $degree;
	}

	public function getValue() {
		return $this->degree;
	}

}