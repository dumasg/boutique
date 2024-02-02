<?php
require_once "../config/database.php";
require_once "../bootstrap/app.php";
require_once "../route/web.php";

$filterURI = filter_input(INPUT_GET, "action", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

ob_start();
if (!isset($_GET["action"])) {
    header("Location: index.php?action=product&id=1");
} else {
    require_once "../ressources/views/layouts/main.tpl.php";
}
$content = ob_get_clean();
echo $content;