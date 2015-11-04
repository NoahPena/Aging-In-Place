<html>
	<head>		

		<link href="/var/www/html/raspberrypicard.com/runBlink.php" type="text/php" />
	</head>
	
	<script type="text/javascript">
	
		<!--ADD AJAX/JS SCRIPT FOR SERVER SIDE PHP FUNCTION CALL-->
		
	</script>


	<body>
		Pain in my ass 2.0: the movie
	
		<?php
				
		?>
			
	<!--NEEDS WORK STILL!!!!-->

		<div id=btndiv style="width:30%; height:auto;" >
		<p><button type="submit" name="ON" onclick="system('gpio write 0 1')" >ON</button></p>
		<p><button type="submit" name="OFF" onclick="system('gpio write 0 0')" >OFF</button></p>
		</div>
		
	</body>

</html>
