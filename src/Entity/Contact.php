<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Property;

class Contact 
{
    /**
     * Nom de l'utilisateur
     * @var String|NULL
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=50)
     */
    private $firstname;

    /**
     * Nom de l'utilisateur
     * @var String|NULL
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=50)
     */
    private $lastname;

    /**
     * Téléphone de l'utilisateur
     * @var string|NULL
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/[0-9]{10}/")
     */
    private $phone;

    /**
     * Mail de l'utilisateur
     * @var String|NULL
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * Nom de l'utilisateur
     * @var String|NULL
     * @Assert\NotBlank()
     * @Assert\Length(min=10)
     */
    private $message;

    /**
     * Undocumented variable
     *
     * @var Property|NULL
     */
    private $property;

    /**
     * Get nom de l'utilisateur
     *
     * @return  String|NULL
     */ 
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * Set nom de l'utilisateur
     *
     * @param  String|NULL  $firstname  
     *
     * @return  self
     */ 
    public function setFirstname(?string  $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get nom de l'utilisateur
     *
     * @return  String|NULL
     */ 
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * Set nom de l'utilisateur
     *
     * @param  String|NULL  $lastname  
     *
     * @return  self
     */ 
    public function setLastname(?string  $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get téléphone de l'utilisateur
     *
     * @return  String|NULL
     */ 
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Set téléphone de l'utilisateur
     *
     * @param  String|NULL  $phone 
     *
     * @return  self
     */ 
    public function setPhone(?string  $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get mail de l'utilisateur
     *
     * @return  String|NULL
     */ 
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set mail de l'utilisateur
     *
     * @param  String|NULL  $email 
     *
     * @return  self
     */ 
    public function setEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get nom de l'utilisateur
     *
     * @return  String|NULL
     */ 
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Set nom de l'utilisateur
     *
     * @param  String|NULL  $message  
     *
     * @return  self
     */ 
    public function setMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get new Property
     *
     * @return  Property|NULL
     */ 
    public function getProperty(): ?Property
    {
        return $this->property;
    }

    /**
     * Set new Property
     * @param  Property|NULL $property
     * @return  Contact
     */ 
    public function setProperty(?Property $property):Contact
    {
        $this->property = $property;

        return $this;
    }
}

?>