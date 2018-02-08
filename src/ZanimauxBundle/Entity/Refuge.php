<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Refuge
 *
 * @ORM\Table(name="Refuge")
 * @ORM\Entity
 */
class Refuge
{
    /**
     * @var string
     *
     * @ORM\Column(name="immatriculation", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $immatriculation;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRefuge", type="string", length=20, nullable=false)
     */
    private $nomrefuge;

    /**
     * @var string
     *
     * @ORM\Column(name="emailRefuge", type="string", length=200, nullable=false)
     */
    private $emailrefuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephoneRefuge", type="integer", nullable=false)
     */
    private $telephonerefuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="faxRefuge", type="integer", nullable=false)
     */
    private $faxrefuge;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseRefuge", type="string", length=200, nullable=false)
     */
    private $adresserefuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostaleRefuge", type="integer", nullable=false)
     */
    private $codepostalerefuge;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernement", type="string", length=20, nullable=false)
     */
    private $gouvernement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chat", type="boolean", nullable=false)
     */
    private $chat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chien", type="boolean", nullable=false)
     */
    private $chien;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rongeur", type="boolean", nullable=false)
     */
    private $rongeur;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=20, nullable=false)
     */
    private $autre;


}

