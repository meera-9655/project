<?php
// Display text
echo "<h2>Welcome to My PHP Project!</h2>";

// Variables
$name = "Achu kutty";
$age = 18;

// Display variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";

// Simple calculation
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
echo "Sum of $num1 and $num2 is: $sum<br>";

// Conditional statement
if($age >= 18){
    echo "You are eligible to vote!";
} else {
    echo "You are not eligible to vote.";
}
?>
