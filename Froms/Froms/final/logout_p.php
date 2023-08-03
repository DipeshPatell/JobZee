<?php
session_start();
unset($_SESSION["pid"]);
unset($_SESSION["pname"]);
header("Location:index.php");
?>