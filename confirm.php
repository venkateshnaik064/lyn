<?php

session start();
if(empty($_SESSION['token'])) {

$_SESSION['messages'][] = 'Token has been gexpired!";
header(string: 'Location: register.php);
}
?>