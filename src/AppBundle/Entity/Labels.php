<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Labels
 *
 * @ORM\Table(name="labels")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LabelsRepository")
 */
class Labels
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Disques")
     * @ORM\JoinColumn(nullable=true)
     */
    private $disques;


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
     * Set nom
     *
     * @param string $nom
     * @return Labels
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
     * Set disques
     *
     * @param \AppBundle\Entity\Disques $disques
     * @return Labels
     */
    public function setDisques(\AppBundle\Entity\Disques $disques = null)
    {
        $this->disques = $disques;

        return $this;
    }

    /**
     * Get disques
     *
     * @return \AppBundle\Entity\Disques 
     */
    public function getDisques()
    {
        return $this->disques;
    }
}
