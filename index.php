<?php
 2 $result = "";
 3 if($_SERVER[’REQUEST_METHOD’] == ’POST’) {
 4 $name = htmlspecialchars($_POST[’name’]);
 5 $weight = floatval($_POST[’weight’]);
 6 $height = floatval($_POST[’height’]);
 7 if($weight > 0&& $height > 0) {
 8 $bmi = $weight / ($height * $height);
 9 if($bmi < 18.5) {
 10 $interpretation ="Underweight";
 3
11 } elseif($bmi< 25) {
 12 $interpretation ="Normal weight";
 13 } elseif($bmi< 30) {
 14 $interpretation ="Overweight";
 15 } else {
 16 $interpretation ="Obesity";
 17 }
 18 $result = "Hello, $name. Your BMI is " . number_format($bmi,2). " (
 $interpretation).";
 19 } else {
 20 $result = "Invalid input values.";
 21 }
 22 }
 23 ?>
 24 <!DOCTYPE html>
 25 <html lang="en">
 26 <head>
 27 <meta charset="UTF-8">
 28 <title>BMI Calculator</title>
 29 <link rel="stylesheet" href="style.css">
 30 <script src="script.js"></script>
 31 </head>
 32 <body>
 33 <h1>BMI Calculator</h1>
 34 <?php if($result!= "") { echo "<p>$result</p>"; } ?>
 35 <form action=""method="post" onsubmit="returnvalidateForm();">
 36 <label for="name">Name:</label>
 37 <input type="text"id="name" name="name" required><br>
 38 <label for="weight">Weight (kg):</label>
 39 <input type="number" id="weight" name="weight"required><br>
 40 <label for="height">Height (m):</label>
 41 <input type="number" id="height" name="height"required><br>
 42 <input type="submit" value="Calculate">
 43 </form>
 44 </body>
 45 </html>