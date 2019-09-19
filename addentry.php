<?php
function write($blogBody,$blogTitle)
{
$date = new DateTime();
$date = $date->format("D,M,jS,Y,h:i a e");
$file_name = fopen("head_body.txt", "a+")or die("Unable to open file!");
fwrite($file_name,$blogBody."\r\n");
fwrite($file_name,$blogTitle."\r\n");
fwrite($file_name,$date."\r\n");
fclose($file_name);
}





if (isset($_POST['submitBlog']))
{
$blogTitle = $_POST['blogTitle'];
$blogBody = $_POST['blogBody'];

if($blogTitle == null ||$blogBody == null)
{

header('Location: addentry.html');

}

else {

write($blogBody,$blogTitle);
header('Location: viewBlog.php');

}













}
?>
