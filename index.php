<?php
echo $_SERVER["REQUEST_URI"];
$uri = $_SERVER["REQUEST_URI"];

switch($uri) {
    case '/':
        echo 'index';
        break;
    case '/about':
        echo 'about';
        break;
    default:
        echo '404';
}
?>