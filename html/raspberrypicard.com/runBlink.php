<?php
	

	function blinkLED(pin)
	{
		system('gpio mode ' $pin ' out');
		
		for($i = 0; $i < 25; $i++)
		{
			system('gpio write ' $pin ' 1');
			system('sleep 1');
			system('gpio write ' $pin ' 0');
			system('sleep 1');
		}
	}

?>
