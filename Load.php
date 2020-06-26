<?php



$user = 'root';
$pass = '';

$db = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
$db->exec('SET CHARACTER SET utf8');
$image_name = $_FILES['myimage']['name'];
$query = $db->query("INSERT INTO image(image_name) VALUES ('$image_name')");






$uploaddir = 'Accest/image/';
$uploadfile = $uploaddir . basename($_FILES['myimage']['name']);

// Сохраняем фаил "имя + путь"
if (move_uploaded_file($_FILES['myimage']['tmp_name'], $uploadfile)) {
    $result  = "<h4 style='color: green'>Photo успешно добавлено!</h4>\n";

} else {
    $result = "<h4 style='color: red'>Не удалось добавить Photo!</h4>\n";


 }
header('Location: input.php');









