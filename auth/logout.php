<?php

session_start();
unset($_SESSION['userInfo']);

session_regenerate_id(true);

header('Location: auth.php');
exit;
?>