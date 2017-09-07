<?php
require_once ('Degree.php'); 
require_once ('Scale_in.php'); 
require_once ('Scale_out.php'); 
require_once ('Celcius.php'); 
require_once ('Kelvin.php'); 
require_once ('Fahrenheit.php'); 


Class Converter 
{
	// stopnie , skala wejsciaowa , skala wyjsciowa
	public function __construct(Degree $degree, Scale_in $scale_in, Scale_out $scale_out)
	{
		$this->scale_in = $scale_in;
		$this->scale_out = $scale_out;
		$this->degree = $degree;
	}

	public static function calculation(Degree $degree, Scale_in $scale_in, Scale_out $scale_out)
	{


		$scale_in = $scale_in->scale_in;
		$scale_out = $scale_out->scale_out;
		$degree = $degree->degree;


		if ($scale_in == "celcius") {
			$degree = new Celcius($degree);
			$degree = $degree->celcius;
		}

		if ($scale_in == "kelvin") {
			$degree = new Kelvin($degree);
			$degree = $degree->kelvin;
		}

		if ($scale_in == "fahrenheit") {
			$degree = new Fahrenheit($degree);
			$degree = $degree->fahrenheit;
		}

		if ($scale_in == "celcius") {
			if ($scale_out == "celcius") {
				return $degree;
			}
			if ($scale_out == "fahrenheit") {
				$output = $degree*9/5+32;
				return $output;
			}
			if ($scale_out == "kelvin") {
				$output = ($degree + 273.15);
				return $output;
			}
		}
		if ($scale_in == "fahrenheit") {
			if ($scale_out == "celcius") {
				$output = ($degree -32)*5/9; 
				return $output;
			}
			if ($scale_out == "fahrenheit") {
				return $degree;		
			}
			if ($scale_out == "kelvin") {
				$output = (($degree -32)*5/9)+273.15; 
				return $output;				
			}
		}
		if ($scale_in == "kelvin") {
			if ($scale_out == "celcius") {
				$output = $degree-273.15; 
				return $output;
			}
			if ($scale_out == "fahrenheit") {
				$output = ($degree - 273.15) * 9 / 5 + 32; 
				return $output;
			}
			if ($scale_out == "kelvin") {
				return $degree;				
			}
		}
	}
}