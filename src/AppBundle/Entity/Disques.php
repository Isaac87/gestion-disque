<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disques
 *
 * @ORM\Table(name="disques")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DisquesRepository")
 */
class Disques
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Artistes", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $artistes;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Disques
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return Disques
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artistes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add artistes
     *
     * @param \AppBundle\Entity\Artistes $artistes
     * @return Disques
     */
    public function addArtiste(\AppBundle\Entity\Artistes $artistes)
    {
        $this->artistes[] = $artistes;

        return $this;
    }

    /**
     * Remove artistes
     *
     * @param \AppBundle\Entity\Artistes $artistes
     */
    public function removeArtiste(\AppBundle\Entity\Artistes $artistes)
    {
        $this->artistes->removeElement($artistes);
    }

    /**
     * Get artistes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArtistes()
    {
        return $this->artistes;
    }
}
