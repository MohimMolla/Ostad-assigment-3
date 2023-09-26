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
		<h1>Array Manipulation</h1>
		<?php

		function removeEvenNumbers($numbers)
		{
			$result = [];
			foreach ($numbers as $number) {
				if ($number % 2 != 0) {
					$result[] = $number;
				}
			}
			print_r($result); // Print the resulting array
		}

		$numbers = range(1, 10);
		removeEvenNumbers($numbers);

		?>
<br>
<a class="btn btn-primary" href="index.php">Go To Home</a>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>