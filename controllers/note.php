<?php


require 'database.php';


$id = ($_GET['id']);

$db = new Database();
$sql = "SELECT users.id, users.name, users.email, notes.body, notes.description from users 
join notes on users.id = notes.user_id Where users.id = $id";

$posts = $db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

dd($post[0]['id']);

if($posts[0]['id']===1){
    echo "right";
}else{
    echo "wrong";
}




require 'views/note-detail.view.php';



