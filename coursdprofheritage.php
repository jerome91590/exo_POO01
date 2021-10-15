<?php

//héritage

/*classe mère
    proprièté 1
    méthode 1()


classe fille extends mère  //surcharger la class mère
proprièté 2
méthode 2()


$objet = new fille();

echo $objet -> methode 1();
echo $objet -> methode 2();
*/

//Class mère
class Mere
{
    public $attribut="Bonjour,"; //attribut

    public function methode1(){
    $str=$this->attribut;//on attribue l'attribut à la fonction
    $str.=" Je suis la classe mère ! ";//concaténation avec "Bonjour"
    return $str;
    }


}

//Class fille
class Fille extends Mere
{
    public function methode2(){
        $str=$this->attribut;//on attribue l'attribut à la fonction
        $str.=" Je suis la classe fille ! ";//concaténation avec"Bonjour"
        return $str;
    }

  
}

//Création objet/instanciation
$objet=new Fille();
echo $objet->methode1();
echo "<br>";
echo $objet->methode2();

?>

