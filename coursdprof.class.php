<?php
/*Librairie
fruit.class.php



objet
objetfruit.php

Instanciation
$appl= new fruit();
*/

class Fruit
{
    //Propriètés :
    public $nom;
    public $couleur;
   
    //Méthodes :
    function set_nom($nom){
        $this->nom = $nom; //afférent à la class, écriture dans la base
    }
    function get_nom(){
        return $this->nom; //afférent à la class, lecture/affichage depuis la base
    }
    function set_couleur($couleur){
        $this->couleur = $couleur; //afférent à la class, écriture dans la base
    }
    function get_couleur(){
        return $this->couleur; //afférent à la class, lecture/affichage depuis la base
    }
}
//creation objet/copie sur modèle class
$pomme = new Fruit();
$pomme->set_nom("pomme<br>");//injection/affectation des propriètés de l'objet pomme
echo $pomme->get_nom();//affichage de la méthode get_nom de l'objet créé $pomme

$kiwi = new Fruit();//creation objet/copie sur modèle class
$kiwi->set_nom("kiwi<br>");//injection/affectation des propriètés de l'objet pomme
echo $kiwi->get_nom();//affichage de la méthode get_nom de l'objet créé $kiwi

$pomme->set_couleur("rouge<br>");
echo $pomme->get_couleur();

$kiwi->set_couleur("vert<br>");
echo $kiwi->get_couleur();

?>

