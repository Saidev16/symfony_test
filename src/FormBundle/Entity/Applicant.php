<?php

namespace FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Applicant
 *
 * @ORM\Table(name="applicant")
 * @ORM\Entity(repositoryClass="FormBundle\Repository\ApplicantRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Applicant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=167)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=167)
     */
    private $prenom;

    /**
     * Undocumented variable
     *
     * @ORM\OneToOne(targetEntity="FormBundle\Entity\Documents", cascade={"persist"})
     * @Assert\Valid()
     */
    private $documents;

    /**
     * 
     * @ORM\Column(name="Created_at", nullable=true, type="datetime")
     * 
     */ 
    private $createdAt;

    /**
     * 
     * @ORM\Column(name="Updated_at", nullable=true, type="datetime")
     * 
     */
     private $UpdatedAT;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_naissance", type="datetimetz")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=167)
     */
    private $email;




    /**
     * @var int
     *
     * @ORM\Column(name="Telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="voyage_theme", type="string", length=255)
     */
    private $voyageTheme;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Applicant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Applicant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Applicant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Applicant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Applicant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set voyageTheme
     *
     * @param string $voyageTheme
     *
     * @return Applicant
     */
    public function setVoyageTheme($voyageTheme)
    {
        $this->voyageTheme = $voyageTheme;

        return $this;
    }

    /**
     * Get voyageTheme
     *
     * @return string
     */
    public function getVoyageTheme()
    {
        return $this->voyageTheme;
    }



    /**
     * Set documents
     *
     * @param \FormBundle\Entity\Documents $documents
     *
     * @return Applicant
     */
    public function setDocuments(\FormBundle\Entity\Documents $documents = null)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Get documents
     *
     * @return \FormBundle\Entity\Documents
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Set createdAt
     *
     * @param string $createdAt
     *
     * @return Applicant
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAT
     *
     * @param string $updatedAT
     *
     * @return Applicant
     */
    public function setUpdatedAT($updatedAT)
    {
        $this->UpdatedAT = $updatedAT;

        return $this;
    }

    /**
     * Get updatedAT
     *
     * @return string
     */
    public function getUpdatedAT()
    {
        return $this->UpdatedAT;
    }

    /**
     * 
     *
     * @ORM\PrePersist
     */
    public function createDate(){
        $this->setCreatedAt(new \DateTime());
    }
     
}
