<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Exercice Employé</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
<?php
include_once("Employes.class.php");
//instanciation de la classe, création de l'objet, copie
$e=new Employes ("DAVID", "Jérôme", "2010-01-01", "Comptable", 30000, "Comptabilité");
//$e->experience($e->_dateembauche);
//$e->prime(9);
//echo "xxx<br>";
$ex=$e->experience($e->_dateembauche);
//echo $ex."EX";
$e->prime($ex,$e->_salaire);
//echo $e->_nom." ".$e->_prenom." ".$e->_dateembauche." ".$e->_fonction." ".$e->_salaire." ".$e->_service;

//echo "Je m'appelle ".$p->_prenom." ".$p->_nom."<br>";
//echo $p->identite()."<br>";
//echo "<strong>Mon prénom est  : ".$p->_prenom." !!!</strong>";
?>
<?php
include_once("Employes.class.php");
$e=new Employes ("DUPONT", "Alain", "2002-01-01", "Magasinier", 35000, "Magasin");
$ex=$e->experience($e->_dateembauche);
$e->prime($ex,$e->_salaire);
?>
<?php
include_once("Employes.class.php");
$e=new Employes ("DUMONT", "Luc", "2006-10-01", "Vendeur", 35000, "Commercial");
$ex=$e->experience($e->_dateembauche);
$e->prime($ex,$e->_salaire);
?>
<?php
include_once("Employes.class.php");
$m=new Magasin ("CARREFOUR", "2, rue du PONT", "91000", "EVRY");
$m->affmagasin();
?>
	</body>
</html> 