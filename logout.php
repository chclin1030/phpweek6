<?php

session_start();
session_destroy();
setcookie("UID",$uID,time()-36); //通常不會這樣寫
header('Location: login.php');

?>
