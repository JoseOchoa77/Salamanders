<?php

	function toFahrenheit ($celsius)
	{
		$fahrenheit = (9 / 5) * $celsius + 32;
		return $fahrenheit;
	}


	function toCelsius($fahrenheit)
	{
		$celsius= ($fahrenheit  - 32) / (9 / 5);
		return $celsius;
	}


	function strFahrenheitFormula ()
	{
		return "Fahrenheit = (9 / 5) * Celsius + 32";
	}

	function strCelsiusFormula ()
	{
		return 	"Celsius = Fahrenheit  - 32) / (9 / 5)";
	}

	function getWindchill ($fahrenheit, $windSpeedMPH)
	{
		$windchill = 35.74 + (0.6215 * $fahrenheit) -
			 (35.75 * pow($windSpeedMPH, 0.16)) +
					(0.4275 * $fahrenheit * pow ($windSpeedMPH, 0.16));
		return $windchill;
	}

?>