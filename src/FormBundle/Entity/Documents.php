<?php

namespace FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="documents")
 * @ORM\Entity(repositoryClass="FormBundle\Repository\DocumentsRepository")
 */
class Documents
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
     * @ORM\Column(name="budget_excel", type="string", length=255)
     */
    private $budgetExcel;

    /**
     * @var string
     *
     * @ORM\Column(name="motivations_docx", type="string", length=255)
     */
    private $motivationsDocx;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram_url", type="string", length=255)
     */
    private $instagramUrl;


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
     * Set budgetExcel
     *
     * @param string $budgetExcel
     *
     * @return Documents
     */
    public function setBudgetExcel($budgetExcel)
    {
        $this->budgetExcel = $budgetExcel;

        return $this;
    }

    /**
     * Get budgetExcel
     *
     * @return string
     */
    public function getBudgetExcel()
    {
        return $this->budgetExcel;
    }

    /**
     * Set motivationsDocx
     *
     * @param string $motivationsDocx
     *
     * @return Documents
     */
    public function setMotivationsDocx($motivationsDocx)
    {
        $this->motivationsDocx = $motivationsDocx;

        return $this;
    }

    /**
     * Get motivationsDocx
     *
     * @return string
     */
    public function getMotivationsDocx()
    {
        return $this->motivationsDocx;
    }

    /**
     * Set instagramUrl
     *
     * @param string $instagramUrl
     *
     * @return Documents
     */
    public function setInstagramUrl($instagramUrl)
    {
        $this->instagramUrl = $instagramUrl;

        return $this;
    }

    /**
     * Get instagramUrl
     *
     * @return string
     */
    public function getInstagramUrl()
    {
        return $this->instagramUrl;
    }
}
