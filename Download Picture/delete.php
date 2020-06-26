<?php

$user = 'root';
$pass = '';



$db = new PDO('mysql:host=localhost;dbname=test', $user, $pass) or die('Ошибка подключения');
$db->exec('SET CHARACTER SET utf8');


$id = $_POST['img_id'];
$way = "Accest/image/" . $_POST['img_name'];

//var_dump($_POST['img_name']);
if($id != null){
    $query = $db->query("SELECT * FROM `image` WHERE id = '$id'") or die('Ошибка изображения');

    foreach($query as $row ){
        $way = "Accest/image/" . $row['image_name'];
    }
    unlink($way);

    $query = $db->query("DELETE FROM `image` WHERE id = '$id'") or die('Ошибка');

    header('Location: input.php');
}else{
    header('Location: input.php');
}
