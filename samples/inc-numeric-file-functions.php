<?php
		function printData ($fileName)
		{
			$dataFile =fopen("$fileName","r");
			$nextValue = trim(fgets($dataFile));
			while (! feof($dataFile) )
			{
				print("$nextValue<br>");
				$nextValue = trim(fgets($dataFile));
			}
			fclose($dataFile);
		}

		function getTotal ($fileName)
		{
			$total = 0;
			$dataFile =fopen("$fileName","r");
			$nextValue = trim(fgets($dataFile));
			while (! feof($dataFile) )
			{
				$total = $total + $nextValue;
				$nextValue = trim(fgets($dataFile));
			}
			fclose($dataFile);
			return $total;
		}

		function getCount ($fileName)
		{
			$count = 0;
			$dataFile =fopen("$fileName","r");
			$nextValue = trim(fgets($dataFile));
			while (! feof($dataFile) )
			{
				$count = $count + 1;
				$nextValue = trim(fgets($dataFile));
			}
			fclose($dataFile);
			if ($count > 0)
				return $count;
			else
				return -1;
		}

		function getAverage ($fileName)
		{
			$count = getCount($fileName);
			$total = getTotal($fileName);
			if ($count > 0)
				return $total / $count;
			else
				return -1;
		}

		function getHighest ($fileName)
		{
			$dataFile =fopen("$fileName","r");
			$nextValue = trim(fgets($dataFile));
			$highest = $nextValue;
			while (!feof($dataFile) )
			{
				if ($nextValue > $highest)
					$highest = $nextValue;
				$nextValue = trim(fgets($dataFile));
			}
			fclose($dataFile);
			return $highest;
		}

		function getLowest ($fileName)
		{
			$dataFile =fopen("$fileName","r");
			$nextValue = trim(fgets($dataFile));
			$lowest = $nextValue;
			while (!feof($dataFile) )
			{
				if ($nextValue < $lowest)
					$lowest = $nextValue;
				$nextValue = trim(fgets($dataFile));
			}
			fclose($dataFile);
			return $lowest;
		}

?>
