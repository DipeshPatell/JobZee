<?php
session_start();
unset($_SESSION["sid"]);
unset($_SESSION["sname"]);
header("Location:index.php");
?>