<?php
// Données de connexion à la base SQL
$host = 'localhost';
$dbUser = 'xav_boutique';
$dbPassword = 'campus';
$dbName = 'boutique';
// This is the name of the pdo we will refer to in the code :
$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $dbUser, $dbPassword);
