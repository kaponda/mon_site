<?php
session_start();
unset($_SERVER['HTTP_REFERER']);
unset($_SERVER['PHP_AUTH_USER']);
unset($_SERVER['PHP_AUTH_pw']);
unset($_SERVER['REMOTE_ADDR']);
unset($_SERVER['REQUEST_URI']);
unset($_SERVER['HTTPS']);
unset($_SERVER['DOCUMENT_ROOT']);

session_destroy();
exit(header('Location:../../accueil.php'));

?>

