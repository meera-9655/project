<?php
$t=10;
$temprature=60;
echo'<br>Demonstration of tha conditional statements';
echo'<br>..........<br>';
echo'<br> if else statement<br>';
echo'........<br>';
if($t<0)
{
echo$t.'is a negative number';
}
else
{
echo$t.'is a postive number<br>';
}
echo'<br><br>switch statement<br>';
echo'**********<br>';
switch($temprature)
{
case 60:
case 65:
case 70:
echo"nice day outside";
break;
case 70:
case 75:
case 78:
echo"ok,but a little warm,";
break;
case 80:
case 45:
case 90:
echo"A little warmer.";
break;
deafult;
echo"temprature outside tha range this statement can handle";
}

?>
