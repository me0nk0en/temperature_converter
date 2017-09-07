<?php

Class Scale_in
{
	public function __construct($scale_in)
	{
		$this->scale_in = $scale_in;
	}

	public function getValue() {
		return $this->scale_in;
	}

}