<html>
<head>
<title>Factorial Program using loop in PHP</title>
</head>
<body>
<form method="post">
    <input type="number" name="number" id="number" required>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $fact = 1;
    $number = $_POST['number'];

    if($number < 0){
        echo "Factorial not defined for negative numbers!";
    } else {
        for($i = 1; $i <= $number; $i++){
            $fact = $fact * $i;
        }
        echo "<br>Factorial of $number is: $fact";
    }
}
?>
</body>
</html>
