<html>
	<head>		
		<link href="/var/www/html/raspberrypicard.com/runBlink.php" type="text/php" />
		
	</head>
	
	<script type="text/javascript">
		<!--ADD AJAX/JS SCRIPT FOR SERVER SIDE PHP FUNCTION CALL-->
		<!--we may not need this after all-->
	</script>
	
		<!--testing embedded php before we assume ajax. cus ajax is a bitch.
			but we will probably have to use it eventually.-->
<<<<<<< HEAD
	<?php	
=======
	<?php
>>>>>>> origin/master
		if(isset($_POST['switch'])) {
			$switch = $_POST['switch'];
			
			if($switch == 'on') {
				exec('gpio mode 0 out');
				exec('gpio write 0 1');
			}
			else if($switch == 'off') {
				exec('gpio mode 0 out');
				exec('gpio write 0 0');
			}
		}
		else {
			echo('nothing selected');
		}
<<<<<<< HEAD
		exec('nodejs test.js');
		exec('gpio mode 1 in');
		$input = exec('gpio read 1');
		
		if($input == '0')
		{
			echo("\nbutton not pressed\n");
		}
		else if($input == '1')
		{
			echo("\nbutton pressed\n");
		}			
=======
				
>>>>>>> origin/master
	?>

	<body>
		
			<!--could submit to another php form but better to do inline for now-->
			<!--UNTESTED BUT A GOOD STARTING POINT-->
		<form action="" method="POST">
<<<<<<< HEAD
		
			Pain In My Ass 2.0: The Movie
=======
		Pain in my ass 2.0: the movie
	
>>>>>>> origin/master
	
			<div class="content-wrap">
				<p>on: <input type="radio" name="switch" value="on"><br /></p>
				<p>off: <input type="radio" name="switch" value="off"><br /></p>
				<br /><br />
				<p><input type="submit" name=btnsubmit" value="switch"></p>
			</div>
		</form>
	</body>

</html>
