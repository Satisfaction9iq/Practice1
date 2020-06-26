<?php

$user = 'root';
$pass = '';

$db = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
$db->exec('SET CHARACTER SET utf8');

$query = $db->query('SELECT * FROM image');

//var_dump($query);



foreach($query as $row) {
   $name = $row['image_name'];
    echo "<img style='width: 150px; margin: 1%; ' src='Accest/image/" . $name . "'> <br>
<form action='delete.php' method='POST' > 

<input type ='hidden' name='img_id' value='" . $row['id']  . "'>
    <input type='submit' name='del' value='Удалить'>
</form>
";
}
