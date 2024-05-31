<?php 


require 'database.php';
require 'function.php';

$heading = 'note';





$db = new Database();

$posts = $db->query('SELECT users.id, users.name, users.email, notes.body from users 
join notes on users.id = notes.user_id')->fetchALL(PDO::FETCH_ASSOC);




require 'views/note.view.php';
