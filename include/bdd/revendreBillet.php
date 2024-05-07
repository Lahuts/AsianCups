<?php 

include 'include/bdd/connect_bdd.inc.php';

if( isset($_POST['number'])) {
    $idBillet = $_POST['idbillet'];
    $number = $_POST['number'];

    // Update the billet table
    $query = "UPDATE Billet SET idUtilisateur = -1, prix = $number WHERE idBillet = $idBillet";
    $result = $link->query($query);

    if($result) {
        echo "Billet updated successfully";
    } else {
        echo "Error updating billet: " . mysqli_error($link);
    }

    unset($_POST['number']);
    unset($_POST['idbillet']);
}