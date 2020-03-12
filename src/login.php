<?php

// Recive Json
$post = json_decode(file_get_contents("php://input"), true);



// Get nombre de la funcion
$f = $_GET['f'];


// Redirecciona
$login = new Auth();
if ($f == 'login') {
    echo $login->Login();
}


class Auth {


    function Login() {
        $array = [
            'login' => 'ok'
        ];
        return json_encode($array);
    }


}
