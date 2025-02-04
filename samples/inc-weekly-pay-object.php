<?php

	class WeeklyPay
	{

		var $empID;
		var $hoursWorked;
		var $hourlyWage;
		var $numExemptions;

		function WeeklyPay()
		{
		}

		function getID()
		{
			return $this->empID;
		}

		function setID ($empID)
		{
			$this->empID = $empID;
		}


		function getHoursWorked()
		{
			return $this->hoursWorked;
		}


		function  setHoursWorked ($hoursWorked)
		{
			$this->hoursWorked = $hoursWorked;
		}


		function getHourlyWage()
		{
			return $this->hourlyWage;
		}

		function setHourlyWage($hourlyWage)
		{
			$this->hourlyWage = $hourlyWage;
		}

		function getNumExemptions()
		{
			return $this->numExemptions;
		}


		function setNumExemptions($numExemptions)
		{
			$this->numExemptions = $numExemptions;
		}


		function getFedWithholding()
		{
			$fedWithholdingTaxBase = ($this->hourlyWage * $this->hoursWorked * 52) -
												(3300 * $this->numExemptions);

			if 	($fedWithholdingTaxBase >= 0 && $fedWithholdingTaxBase <= 2650)
				$fedWithholding = 0;

			else if ($fedWithholdingTaxBase > 2650 	&& $fedWithholdingTaxBase <= 10000)
				$fedWithholding =  0.10 * ($fedWithholdingTaxBase - 2650);

			else if ($fedWithholdingTaxBase > 10000 && $fedWithholdingTaxBase <= 32240)
				$fedWithholding = 0.15 * ($fedWithholdingTaxBase - 10000);

			else if ($fedWithholdingTaxBase > 32240 && $fedWithholdingTaxBase <= 73250)
				$fedWithholding = 0.25 * ($fedWithholdingTaxBase - 32240);

			else if ($fedWithholdingTaxBase > 73250 && $fedWithholdingTaxBase <= 156650)
				$fedWithholding = 0.28 * ($fedWithholdingTaxBase - 73250);

			else if ($fedWithholdingTaxBase > 156650 && $fedWithholdingTaxBase <= 338400)
				$fedWithholding =  0.33 * ($fedWithholdingTaxBase - 156650);

			else if ($fedWithholdingTaxBase > 338400)
				$fedWithholding = 0.35 * ($fedWithholdingTaxBase - 338400);
			else
				$fedWithholding =  -1; // error


			return round($fedWithholding / 52, 2);

		}

		function getGrossPay()
		{
			$gross = round($this->hoursWorked * $this->hourlyWage, 2);
			return $gross;
		}

		function getNetPay()
		{
			$net = round($this->getGrossPay() - $this->getFedWithholding(), 2);
			return ($net);
		}
	}

?>