<?php
/*
fetch('server.php', {
	method: 'post',
	headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({a: 1, b: 'Textual content'})
}).then(response => response.json()).then(res => console.log(res))
*/
    if($_SERVER['HTTP_CONTENT_TYPE'] == "application/json"){
        $data = json_decode(file_get_contents('php://input'), true);
        //var_dump($data);

        header('Content-Type: application/json');
        echo json_encode($data);
    }
?>
