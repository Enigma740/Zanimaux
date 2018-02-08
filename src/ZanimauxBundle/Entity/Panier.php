<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="Panier", indexes={@ORM\Index(name="idProduit", columns={"idProduit"}), @ORM\Index(name="idMagasin", columns={"idMagasin"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     */
    private $cin;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpanier;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Magasin
     *
     * @ORM\ManyToOne(targetEntity="Magasin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMagasin", referencedColumnName="idMagasin")
     * })
     */
    private $idmagasin;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     * })
     */
    private $idproduit;


}

