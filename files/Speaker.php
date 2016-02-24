<?php
/**
 * Created by PhpStorm.
 * User: W8.1
 * Date: 2016-02-22
 * Time: 10:26 PM
 */

class Speaker
{
    private $nom, $prenom, $sexe, $age;

    /**
     * Speaker constructor.
     * @param $nom
     * @param $prenom
     * @param $sexe
     * @param $age
     */
    public function __construct($nom, $prenom, $sexe, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Speaker
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     * @return Speaker
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     * @return Speaker
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return Speaker
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }


}