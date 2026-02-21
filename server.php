
<?php
if(isset($_POST['file_name']))
{
$file=$_POST['file_name'];
header('content_type:image/jpg');
header('content_Disposition:attachment;filename="'.$file."');
readfile('force_Download/'.$file);
exit();
}
?>
<form action="force_download.php"method="post"name="downloadform">
<tr>
<td><input type="text"name="file_name"value="Desert.jpg"type="hidde"></td>
</tr>
<tr>
<td colspan="2"align="center">
<input type="button"name="button"value="download"></td>
</tr>
</form>
