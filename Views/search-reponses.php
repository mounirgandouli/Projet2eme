<?php
    include '../Controller/reponseC.php';

    if (isset($_POST['searchTerm'])) {
        $reponseC = new reponseC();
        $results = $reponseC->chercherreponse($_POST['searchTerm']);
        echo json_encode($results);
    }
?>
