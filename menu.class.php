<?php
class Menu
{
    //Propriètés :
    public $entree;
    public $plat;
    public $dessert;
    public $pentree;
    public $pplat;
    public $pdessert;
   
    function __construct ($entree, $plat, $dessert, $pentree, $pplat, $pdessert){
        $this->entree = $entree;
        $this->plat = $plat;
        $this->dessert = $dessert;
        $this->pentree = $pentree;
        $this->pplat = $pplat;
        $this->pdessert = $pdessert;
    }//équivalent au set_nom (setter)

    //Méthode :
    function menuprice(){
        $price=$this->pentree+$this->pplat+$this->pdessert;
        echo "Votre menu composé de : ".$this->entree.", ".$this->plat.", ".$this->dessert.", vous fera un montant total à régler de : ".$price." Euros.";
    }
}



//creation objet/copie sur modèle class
$menu = new Menu("Oeuf mayonnaise", "Steak/Frites", "Ile flotante", 5, 25,7);
$menu->menuprice();
