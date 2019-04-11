<?php
if($_SERVER['HTTP_CONTENT_TYPE'] == "application/json"){
    $data = json_decode(file_get_contents('php://input'), true);


    $response = ["error" => "Incorrect grade value"];
    $jsonResponse = json_encode($response);
    echo $jsonResponse;
}
?>