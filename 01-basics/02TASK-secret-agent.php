<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
	<?php 
	    // ===========================================================
		// Create a "Secret Agent Profile".
        // Assign variables for: code name, age, favorite gadget, and mission status (true/false). 
        // Then, echo them out as a dossier. 
        // Spare time? Style it with CSS!
	    // ===========================================================
        
		$string = "Secret Agent Profile";
		$name = 'John';
		$age = 45;
		$FavoGadget = "Laser";
		$Status = true;

		echo "<h1>" . $profile . "</h1>";
		echo "<p>" . $name "<p>";
		echo "<p>" . $age . "<p>";
		echo "<p>" . $FavoGadget . "<p>";
		echo "<p>" . $Status . "<p>";






		// Time: 3-10 minutes
		// Ready? Push to GIT!
	?>

    <a href="02-vars-and-datatypes.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="03-basic-operators.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>