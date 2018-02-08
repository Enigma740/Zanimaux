<?php

namespace ZanimauxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animal
 *
 * @ORM\Table(name="Animal")
 * @ORM\Entity
 */
class Animal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAnimal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idanimal;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAnimal", type="string", length=255, nullable=false)
     */
    private $nomanimal;

    /**
     * @var string
     *
     * @ORM\Column(name="photoAnimal", type="blob", length=65535, nullable=false)
     */
    private $photoanimal;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=200, nullable=false)
     */
    private $race;


}

