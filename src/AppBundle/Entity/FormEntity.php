<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="form")
 */
class FormEntity
{   
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @Assert\Regex(pattern = "/[a-zA-Z]/" ,message = "tylko litery dozwolone")
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @Assert\Regex(pattern = "/[a-zA-Z]/" ,message = "tylko litery dozwolone")
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    private $surname;
    
     /**
     * @Assert\NotBlank()
     * @ORM\Column(type="integer", length=255)
     */
    private $experience;
    
    /**
     * @Assert\Regex(pattern = "/[a-zA-Z]/" ,message = "tylko litery dozwolone")
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    private $city;
    
    /**
     * @Assert\Regex(pattern = "/[a-zA-Z]/" ,message = "tylko litery dozwolone")
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    private $country;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="array", length=255)
     */
    private $availability;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255)
     */
    private $profession;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getExperience() {
        return $this->experience;
    }

    function getCity() {
        return $this->city;
    }

    function getCountry() {
        return $this->country;
    }

    function getAvailability() {
        return $this->availability;
    }

    function getProfession() {
        return $this->profession;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setExperience($experience) {
        $this->experience = $experience;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setAvailability($availability) {
        $this->availability = $availability;
    }

    function setProfession($profession) {
        $this->profession = $profession;
    }

}
?>
