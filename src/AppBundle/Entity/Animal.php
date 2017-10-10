<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Animal
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $uniqueid;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birth;

    /**
     * @ORM\OneToMany(targetEntity="Analisis", mappedBy="animal")
     */
    private $analisis;

    /**
     * @ORM\ManyToOne(targetEntity="Species", inversedBy="animal")
     * @ORM\JoinColumn(name="species_id", referencedColumnName="id")
     */
    private $species;

    /**
     * @ORM\ManyToOne(targetEntity="Rodeo", inversedBy="animal")
     * @ORM\JoinColumn(name="rodeo_id", referencedColumnName="id")
     */
    private $rodeo;

    /**
     * @ORM\ManyToMany(targetEntity="Plant", inversedBy="animal")
     * @ORM\JoinTable(
     *     name="plantToanimal",
     *     joinColumns={@ORM\JoinColumn(name="animal_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="plant_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $plant;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->analisis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plant = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set uniqueid
     *
     * @param string $uniqueid
     *
     * @return Animal
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;

        return $this;
    }

    /**
     * Get uniqueid
     *
     * @return string
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Animal
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

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Animal
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     *
     * @return Animal
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Add analisi
     *
     * @param \AppBundle\Entity\Analisis $analisi
     *
     * @return Animal
     */
    public function addAnalisi(\AppBundle\Entity\Analisis $analisi)
    {
        $this->analisis[] = $analisi;

        return $this;
    }

    /**
     * Remove analisi
     *
     * @param \AppBundle\Entity\Analisis $analisi
     */
    public function removeAnalisi(\AppBundle\Entity\Analisis $analisi)
    {
        $this->analisis->removeElement($analisi);
    }

    /**
     * Get analisis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set species
     *
     * @param \AppBundle\Entity\Species $species
     *
     * @return Animal
     */
    public function setSpecies(\AppBundle\Entity\Species $species = null)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return \AppBundle\Entity\Species
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set rodeo
     *
     * @param \AppBundle\Entity\Rodeo $rodeo
     *
     * @return Animal
     */
    public function setRodeo(\AppBundle\Entity\Rodeo $rodeo = null)
    {
        $this->rodeo = $rodeo;

        return $this;
    }

    /**
     * Get rodeo
     *
     * @return \AppBundle\Entity\Rodeo
     */
    public function getRodeo()
    {
        return $this->rodeo;
    }

    /**
     * Add plant
     *
     * @param \AppBundle\Entity\Plant $plant
     *
     * @return Animal
     */
    public function addPlant(\AppBundle\Entity\Plant $plant)
    {
        $this->plant[] = $plant;

        return $this;
    }

    /**
     * Remove plant
     *
     * @param \AppBundle\Entity\Plant $plant
     */
    public function removePlant(\AppBundle\Entity\Plant $plant)
    {
        $this->plant->removeElement($plant);
    }

    /**
     * Get plant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlant()
    {
        return $this->plant;
    }
}
