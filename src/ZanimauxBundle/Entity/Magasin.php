<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magasin
 *
 * @ORM\Table(name="Magasin")
 * @ORM\Entity
 */
class Magasin
{
    /**
     * @var string
     *
     * @ORM\Column(name="numRC", type="string", length=20, nullable=false)
     */
    private $numrc;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMagasin", type="string", length=20, nullable=false)
     */
    private $nommagasin;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=false)
     */
    private $cin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbProduit", type="integer", nullable=true)
     */
    private $nbproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseMagasin", type="string", length=20, nullable=false)
     */
    private $adressemagasin;

    /**
     * @var string
     *
     * @ORM\Column(name="villeMagasin", type="string", length=20, nullable=false)
     */
    private $villemagasin;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostaleMagasin", type="integer", nullable=false)
     */
    private $codepostalemagasin;

    /**
     * @var string
     *
     * @ORM\Column(name="photoMAgasin", type="blob", length=65535, nullable=true)
     */
    private $photomagasin;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMagasin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmagasin;


}

