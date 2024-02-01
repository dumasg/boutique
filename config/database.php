<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=boutique', 'fsa_shop', 'CloudStrife01042003');
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
