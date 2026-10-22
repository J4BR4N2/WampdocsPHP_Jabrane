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
		//========== Indexed array
        $indexedArray = ['nul','een','twee'];



        //========== Associative/keyed array
        $keyedArray = [
			'haarkleur' => 'bruin',
			'oogkleur' => 'oranje'
		]



        //========== Access arrays
        $keyedArray['oogkleur'];
		$indexedArray[0];



        //========== Manipulate arrays

        //---- add
        $keyedArray['nieuweWaarde'] = 'de nieuwe waarde';
		print_r($keyedArray);

		$indexedArray[] = 'derde';
		print_r($indexedArray);

        //---- edit
        $keyedArray['nieuweWaarde'] = 'de allernieuwste waarde';
		$indexedArray[0] = 'nieuweNul';

        //---- remove
        unset($indexedArray[2]);
		unset($keyedArray['nieuweWaarde']);

        //---- remove value
        
		


        //========== Array functions
        
	?>
    
    <a href="03TASK-pizza-shop.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="04TASK-multi-dimension.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>