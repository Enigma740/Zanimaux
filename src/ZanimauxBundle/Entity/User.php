<?php
/**
 * Created by PhpStorm.
 * User: belhassen
 * Date: 04/02/2018
 * Time: 11:49 AM
 */

namespace ZanimauxBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(name="cin",type="string",length=255)
     *
     */
    protected $id;

    /**
     * @return mixed
     */

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;
    /**
     * @var string
     *
     * @ORM\Column(name="codePostale", type="integer", length=255)
     */
    private $codePostale;
    /**
     * @var string
     *
     * @ORM\Column(name="numeroOrdre", type="string", length=255, nullable=true)
     */
    private $numeroOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="demande", type="integer", length=255, nullable=true)
     */
    private $demande;




    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * @param string $codePostale
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getDemande()
    {
        return $this->demande;
    }

    /**
     * @param string $demande
     */
    public function setDemande($demande)
    {
        $this->demande = $demande;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getNumeroOrdre()
    {
        return $this->numeroOrdre;
    }

    /**
     * @param string $numeroOrdre
     */
    public function setNumeroOrdre($numeroOrdre)
    {
        $this->numeroOrdre = $numeroOrdre;
    }


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
