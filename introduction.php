<?php
class Employe
{
    public $nom;
    public $prenom;
    public $age;

    public function __construct($nom, $prenom, $age)
    {
        // echo "Constructeur Employe appelé".PHP_EOL;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    public function presentation()
    {
        var_dump("Bonjour, je m'appelle $this->prenom $this->nom. J'ai $this->age ans.");
    }
}

$employe1 = new Employe('aubin', 'simo', 25);
// $employe1->prenom = "aubin";
// $employe1->nom = "simo";
// $employe1->age = 25;
$employe1->presentation();

$employe2 = new Employe('michel', 'tsebo', 20);
// $employe2->prenom = "michel";
// $employe2->nom = "tsebo";
// $employe2->age = 20;
$employe2->presentation();
