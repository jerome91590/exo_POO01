<?php
//avec un constructeur
class Fruit
{
    //Propriètés :
    public $nom;
   
    function __construct ($nom){
        $this->nom = $nom;
    }//équivalent à set_nom

    //Méthodes :
    function get_nom(){
        return $this->nom;
    } //afférent à la class, écriture dans la base
}



//creation objet/copie sur modèle class
$orange = new Fruit("orange");
//$pomme->set_nom("pomme<br>");//injection/affectation des propriètés de l'objet pomme
echo $orange->get_nom();//affichage de la méthode get_nom de l'objet créé $pomme


?>