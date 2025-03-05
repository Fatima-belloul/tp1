<?php
 2 if(isset($_POST[’name’], $_POST[’weight’], $_POST[’height’])) {
 3 $name = htmlspecialchars($_POST[’name’]);
 4 $weight = floatval($_POST[’weight’]);
 5 $height = floatval($_POST[’height’]);
 6 if($weight <=0 || $height <= 0) {
 7 echo "Invalidinput values.";
 8 exit;
 9 }
 10 $bmi = $weight/ ($height * $height);
 11 if($bmi < 18.5) {
 12 $interpretation= "Underweight";
 13 } elseif($bmi< 25) {
 14 $interpretation= "Normal weight";
 15 } elseif($bmi< 30) {
 16 $interpretation= "Overweight";
 17 } else {+
 18 $interpretation= "Obesity";
 19 }
 20 echo "Hello, $name. Your BMI is ". number_format($bmi,2) ." ($interpretation).";
 21 } else {
 22 echo "Data notreceived.";
 23 }
 24 ?>