<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVous
 *
 * @ORM\Table(name="Rendez_vous")
 * @ORM\Entity
 */
class RendezVous
{
    /**
     * @var string
     *
     * @ORM\Column(name="idUser", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="idClient", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idclient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRDV", type="datetime", nullable=false)
     */
    private $daterdv;


}

