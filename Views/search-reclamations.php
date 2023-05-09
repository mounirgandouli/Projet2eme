<?php
    include '../Controller/reclamationC.php';

    if (isset($_POST['searchTerm'])) {
        $reclamationC = new reclamationC();
        $results = $reclamationC->chercherreclamation($_POST['searchTerm']);
        echo json_encode($results);
    }
?>