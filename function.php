<?php

function dd($value){
    return var_dump($value);
}

function error(){
    http_response_code(404);
    require "controllers/error.php";
}


function loadView($view, $data) {
    extract($data); // Extracts the array to variables
    require "views/$view"; // Include the view file
}
