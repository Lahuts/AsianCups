<?php 

include 'include/bdd/connect_bdd.inc.php';

if (isset($_POST['assignedto'])) {
    $idBillet = $_POST['idbilletss'];
    $assignedTo = $_POST['assignedto'];

    // Update the assignedto field in the Billet table
    $query = "UPDATE Billet SET assigner = '$assignedTo' WHERE idBillet = $idBillet";
    $srs = $link->query($query);

    if($srs) {
        echo "Billet updated successfully";
    } else {
        echo "Error updating billet: " . mysqli_error($link);
    }

    unset($_POST['assignedto']);
    unset($_POST['idbillet']);
}