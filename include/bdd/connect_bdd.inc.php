<?php
require_once 'include/models/Billet.php';

$link = new mysqli('localhost', 'root', 'root','asiancup');
if (!$link) {
    die('Could not connect: ' . mysqli_error($link));
}
#echo 'Connected BDD';

