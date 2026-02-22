<?php
error_reporting(1);
$day=0;
$yr=0;
$mon=0;

if(isset($_POST['b1']))
{
$d1=$_POST['t1'];
$d2=$_POST['t2'];

$arr=explode("/",$d1);
$brr=explode("/",$d2);
if($arr[0] < $brr[0])
{
$arr[0] += 30;   // corrected
$arr[1] -= 1;    // corrected
}
$day = $arr[0] - $brr[0];

if($arr[1] < $brr[1])
{
$arr[1] += 12;   // corrected ($m1 removed)
$arr[2] -= 1;
}
$mon = $arr[1] - $brr[1];
$yr = $arr[2] - $brr[2];
}
?>
<form method="POST">
<table border="2">
<tr>
<td align="center" colspan="2">
<font color="orange"><h2><b>Age Calculator</b></h2></font>
</td>
</tr>

<tr>
<td align="center"><b>Enter current date (DD/MM/YYYY):</b></td>
<td align="center"><input type="text" name="t1" autofocus></td>
</tr>

<tr>
<td align="center"><b>Enter You DOB (DD/MM/YYYY):</b></td>
<td align="center"><input type="text" name="t2"></td>
</tr>

<tr>
<td align="center" colspan="2">
<input type="submit" name="b1" value="calculate">
</td>
</tr>

<tr>
<td align="center"><b>Your age is:</b></td>
<td align="center">
<?php
echo '<font color="blue" size="5">';
echo $yr.' years '.$mon.' months '.$day.' days';
echo '</font>';
?>
</td>
</tr>
</table>

</form>
