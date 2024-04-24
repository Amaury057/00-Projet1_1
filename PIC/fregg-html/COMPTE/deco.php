<?php

session_start();
session_destroy();

header("Location:../COMPTE/connexion.php");
exit;

?>