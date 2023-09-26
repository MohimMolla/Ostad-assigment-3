<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
	<div class="container">
		<?php include 'navbar.php' ?>
		<h1>String Manipulation</h1>
		<?php

		function modifyString($text)
		{
			$text = strtolower($text); // Convert to lowercase
			$text = str_replace("brown", "red", $text); // Replace "brown" with "red"
			echo $text . "\n"; // Print the modified text
		}

		$text = "The quick brown fox jumps over the lazy dog.";
		modifyString($text);

		?>
<br>
<a class="btn btn-primary" href="index.php">Go To Home</a>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>