<?php
require_once "../bootstrap/app.php";
require_once "../route/web.php";

$filterURI;

ob_start();
if (!isset($_GET["action"])) {
    header("Location: index.php?action=home");
} else {
    require_once "../ressources/views/layouts/main.tpl.php";
}
$content = ob_get_clean();
echo $content;