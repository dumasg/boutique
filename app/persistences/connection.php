<?php

function login(PDO $pdo, $dataUser): array|false
{
    $queryForConnection = "
        SELECT id, name, email, pwd
        FROM customers
        WHERE email = :email
    ";

    PDOStatement :
    $stmt = $pdo->prepare($queryForConnection);
    $stmt->execute(['email' => $dataUser['email']]);
    foreach ($stmt as $row) {
        $arrayUser = [
            "id" => $row['id'],
            "name" => $row['id'],
            "email" => $row['email'],
            "password" => $row['pwd']
        ];
    }
    if ($arrayUser['password'] === $dataUser['password']) {
        return $arrayUser;
    } else {
        return false;
    }

}

function autoLogin(PDO $pdo){
    return "test";
}