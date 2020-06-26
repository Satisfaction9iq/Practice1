<?php
$host='localhost';
$user='root';
$pass=' ';
$image ='';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');


$imagename = $_FILES["myimage"]["name"];


$imagetmp = addslashes(file_get_contents($_FILES['myimage']['tmp_name']));


$insert_image = "INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);

header("content-type:image/jpeg");

$host='localhost';
$user='root';
$pass=' ';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');

$name=$_GET['name'];

$select_image="select * fromimage_tablewhereimagename='$name'";

$var=mysql_query($select_image);

if($row=mysql_fetch_array($var))
{
    $image_name=$row["imagename"];
    $image_content=$row["imagecontent"];
}
echo $image;


?>




