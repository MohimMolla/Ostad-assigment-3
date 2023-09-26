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
		<h1> Multidimensional Array</h1>
		<?php

function calculateAverageGrades($studentGrades) {
	foreach ($studentGrades as $student) {
	    $total = array_sum($student);
	    $average = $total / count($student);
	    echo "Average grade for student: $average\n";
	}
 }
 
 $studentGrades = [
	["Math" => 90, "English" => 85, "Science" => 88],
	["Math" => 78, "English" => 92, "Science" => 85],
	["Math" => 88, "English" => 90, "Science" => 78]
 ];
 
 calculateAverageGrades($studentGrades);

		?>
<br>
<a class="btn btn-primary" href="index.php">Go To Home</a>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>