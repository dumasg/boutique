<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=boutique', 'A_V_boutique', '23Manatea');
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}