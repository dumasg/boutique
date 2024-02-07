<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){


    $args = array(
        "email" => FILTER_SANITIZE_EMAIL,
        "password" => FILTER_SANITIZE_SPECIAL_CHARS
    );

    $dataUser = filter_input_array(INPUT_POST, $args);
    $dataUser['password'] = hash('SHA256', $dataUser['password']);

    $userAfterLogin = connection($pdo, $dataUser);
    if($userAfterLogin){
        $cookieString = $userAfterLogin['email'] . "//" . $userAfterLogin['password'];
        $cookieDuration = 60*60*24*2;
        setcookie('autoConnection', $cookieString, time() + $cookieDuration);
        header("Location: /");
        exit();
    }else{
        header("Location: /?action=login&connection=failed");
    }

}else{
    require ("../ressources/views/login.tpl.php");
}


function connection(PDO $pdo, $dataUser){
    return (login($pdo, $dataUser));
}
