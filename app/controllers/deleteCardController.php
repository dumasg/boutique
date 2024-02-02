<?php
var_dump($_SESSION['cart']);
unset($_SESSION['cart']);
session_destroy();
header("Location: /");
exit();