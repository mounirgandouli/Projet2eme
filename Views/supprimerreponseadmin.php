<?php
	include '../Controller/reponseC.php';
	$reponseC=new reponseC();
	$reponseC->supprimerreponse($_GET["idrep"]);
	header('location:afficherListereponsesadmin.php');
?>