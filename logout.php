<?php
session_start();
if(isset($_SESSION["iduser"])){
    $_SESSION["iduser"] = Null;
    unset($_SESSION["iduser"]);
}

header("Location: login.php");
?>