<?php

$config['admin_username'] = "admin"; // your username
$config['admin_passowrd'] = "admin123"; // your password
if(!isset($_SERVER['PHP_AUTH_USER'])){
header("WWW-Authenticate: Basic realm=\"Login\"");
header("HTTP/1.0 401 Unathorized");
die("No login passed lol");
}
else{
if(!($_SERVER['PHP_AUTH_USER'] == $config['admin_username'] && $_SERVER['PHP_AUTH_PW'] == $config['admin_passowrd'])){
header("WWW-Authenticate: Basic realm=\"Login\"");
header("HTTP/1.0 401 Unathorized");
die("What happens when you press cancel :P ");
}
}
?>