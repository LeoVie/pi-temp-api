<?php

namespace ExampleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ExampleBundle\Repository\ExampleRepository")
 */
class Example
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $zip;

    public function __construct($id, $name, $address, $zip)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->zip = $zip;
    }
}