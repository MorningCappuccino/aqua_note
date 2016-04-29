<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="GenusRepository")
 */
class Genus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $postedAt;


    /**
     * @ORM\Column(type="string")
     */
    private $subFamily;

    /**
     * @ORM\Column(type="integer")
     */
    private $speciesCount;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $funFact;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished = true;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPostedAt()
    {
        return $this->postedAt;
    }

    /**
     * @param \DateTime $postedAt
     *
     * @return Genus
     */
    public function setPostedAt($postedAt)
    {
        $this->postedAt = $postedAt;

        return $this;
    }


    /**
     * Set subFamily
     *
     * @param string $subFamily
     *
     * @return Genus
     */
    public function setSubFamily($subFamily)
    {
        $this->subFamily = $subFamily;

        return $this;
    }

    /**
     * Get subFamily
     *
     * @return string
     */
    public function getSubFamily()
    {
        return $this->subFamily;
    }

    /**
     * Set speciesCount
     *
     * @param integer $speciesCount
     *
     * @return Genus
     */
    public function setSpeciesCount($speciesCount)
    {
        $this->speciesCount = $speciesCount;

        return $this;
    }

    /**
     * Get speciesCount
     *
     * @return integer
     */
    public function getSpeciesCount()
    {
        return $this->speciesCount;
    }

    /**
     * Set funFact
     *
     * @param string $funFact
     *
     * @return Genus
     */
    public function setFunFact($funFact)
    {
        $this->funFact = $funFact;

        return $this;
    }

    /**
     * Get funFact
     *
     * @return string
     */
    public function getFunFact()
    {
        return $this->funFact;
    }

    /**
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return Genus
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return boolean
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Genus
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
