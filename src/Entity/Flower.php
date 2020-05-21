<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="flowers")
 */
class Flower
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $fullname;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $address;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $flowers;
    /**
     * @ORM\Column(type="datetime", length=255)
     * @Assert\NotBlank
     */
    private $deliver_on;
    /**
     * @ORM\Column(type="datetime", length=255)
     * @Assert\NotBlank
     */
    private $created_at;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname): void
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getFlowers()
    {
        return $this->flowers;
    }

    /**
     * @param mixed $flowers
     */
    public function setFlowers($flowers): void
    {
        $this->flowers = $flowers;
    }

    /**
     * @return mixed
     */
    public function getDeliverOn()
    {
        return $this->deliver_on;
    }

    /**
     * @param mixed $deliver_on
     */
    public function setDeliverOn($deliver_on): void
    {
        $this->deliver_on = $deliver_on;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }
}