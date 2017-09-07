<?php

Class Scale_out
{
	public function __construct($scale_out)
	{
		$this->scale_out = $scale_out;
	}

	public function getValue() {
		return $this->scale_out->scale_out;
	}

}