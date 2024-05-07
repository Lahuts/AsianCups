<?php
// Détruire la session actuelle
session_destroy();

// Rediriger vers index.php
header("Location: index.php");
exit;
?>