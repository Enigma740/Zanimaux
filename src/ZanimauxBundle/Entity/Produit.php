<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="Produit", indexes={@ORM\Index(name="idMagasin", columns={"idMagasin"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="photoProduit", type="blob", length=65535, nullable=false)
     */
    private $photoproduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="marque", type="integer", nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Magasin
     *
     * @ORM\ManyToOne(targetEntity="Magasin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMagasin", referencedColumnName="idMagasin")
     * })
     */
    private $idmagasin;


}

