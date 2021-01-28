<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$tableau = []; 
for($i = 0; $i < 10; $i++) {
    $personne = ["id" => $i, "name" => "toto" . $i]; 
    $tableau[$i] = $personne;
}

echo json_encode($tableau);