<?php

function getDonations(){
    require '../dao.php';
    $con = new dao();
    $resultat = $con->query("SELECT * FROM donations");
    return $resultat;
}

?>