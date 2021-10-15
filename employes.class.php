<?php
//déclaration de la classe
class Employes
{
    public $_nom;
    public $_prenom;
    public $_dateembauche;
    public $_fonction;
    public $_salaire;
    public $_service;

  
        //création constructeur
        public function __construct($nom, $prenom, $dateembauche, $fonction, $salaire, $service)
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateembauche= $dateembauche;
            $this->_fonction = $fonction;
            $this->_salaire = $salaire;
            $this->_service = $service;
        }
        //création méthode
        public function experience($de){
            $dateemb  = new DateTime($de);
            $datejour = new DateTime();
            $intvl = $dateemb->diff($datejour);
            echo "Expérience au sein de l'entreprise de ".$this->_nom." ".$this->_prenom." : ".$intvl->y . " ans, et ". $intvl->m." mois.<br> Il travaille au service ".$this->_service." en tant que ".$this->_fonction.".<br>"; 
            $exp=$intvl->y;
            return $exp;
            //$date = date_create();
            //echo date_timestamp_get($date);
            //$exp= date()-date($this->_dateembauche);
            //echo $exp;
            //echo "Expérience au sein de l'entreprise de ".$this->_nom." ".$this->_prenom." : ".$exp." ans.";
            //echo "<br><br>Test affichage de toute les données : ".$this->_dateembauche.$this->_fonction.$this->_salaire.$this->_service."<br>";
            }
        //création méthode
        public function prime($intvl,$sal){
            $prime=5*$sal/100+2*($intvl)*$sal/100;
            echo "Sa prime annuelle est de : ".$prime." et l'ordre de transfert a été envoyé à la banque en date du 30 novembre.<br><br>";
            }
}

class Magasin
{
    public $_nom;
    public $_adresse;
    public $_codepostal;
    public $_ville;

        //création constructeur
        public function __construct($nom, $adresse, $codepostal, $ville)
        {
            $this->_nom = $nom;
            $this->_adresse = $adresse;
            $this->_codepostal= $codepostal;
            $this->_ville = $ville;
         
        }
        //création méthode
        public function affmagasin(){
            echo "Au magasin de : ".$this->_nom." situé ".$this->_adresse." ".$this->_codepostal." ".$this->_ville; 
            }
}

?>