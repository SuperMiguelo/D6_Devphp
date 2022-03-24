<?php

class Personnage
{
    private $_attaque   = 31;	    // La force du personnage
    private $_defense   = 50;	    // La défense du personnage
    private $_exp		= 15;	    // Son expérience
    private $_vie		= 63;	    // Sa vie

    private $_nom;

    public function __construct($nom){
        $this->setNOM($nom);
        // self::FunctionName();
        $this->const();
    }

    public function const(){
        $this->setNOM('dfs');
        // self::FunctionName();
    }

    static public function FunctionName()
    {
        var_dump('Hello World');
        $this->_vie = 100;
    }

    public function getNOM(){
        return $this->_nom;
    }

    public function setNOM($nom)
    {
        $this->_nom = 'Joueur : '. $nom;
    }

    public function getATTAQUE()
    {
        return $this->_attaque;
    }

    public function setVIE($vie)
    {
        $this->_vie = $vie;
    }

    public function getVIE()
    {
        return $this->_vie;
    }

    public function isDead()
    {  
        return ( $this->getVIE() <= 0 ) ? true : false;
    }

    public function attaquer_perso(Personnage $ennemie)
    {
        $ennemie->setVIE( $ennemie->getVIE() - $this->getATTAQUE() );
        if( $ennemie->getVIE() <= 0 ){
            $ennemie->setVIE(0);

            return $ennemie->isDead();
        }
    }
}

$perso = new Personnage('1');

$perso2 = new Personnage('2');

echo $perso->getNOM() ." attaque ". $perso2->getNOM() ."<br>";

$perso->attaquer_perso($perso2);

echo "Est-ce que ". $perso2->getNOM(). " est mort ? ".  (($perso2->isDead() === true) ? 'Oui' : 'Non') . "<br>";

echo "Vie restante : ". $perso2->getVIE();

echo "<br><br>";

$perso->attaquer_perso($perso2);

echo "Est-ce que ". $perso2->getNOM(). " est mort ? ".  (($perso2->isDead() === true) ? 'Oui' : 'Non') . "<br>";

echo "Vie restante : ". $perso2->getVIE();














