<?php

namespace ComparateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comparateur
 */
class Comparateur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $produit;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var float
     */
    private $proteines;

    /**
     * @var float
     */
    private $humidite;

    /**
     * @var float
     */
    private $ps;

    /**
     * @var int
     */
    private $hagberg;


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
     * Set produit
     *
     * @param string $produit
     * @return Comparateur
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return string 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Comparateur
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Comparateur
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set proteines
     *
     * @param float $proteines
     * @return Comparateur
     */
    public function setProteines($proteines)
    {
        $this->proteines = $proteines;

        return $this;
    }

    /**
     * Get proteines
     *
     * @return float 
     */
    public function getProteines()
    {
        return $this->proteines;
    }

    /**
     * Set humidite
     *
     * @param float $humidite
     * @return Comparateur
     */
    public function setHumidite($humidite)
    {
        $this->humidite = $humidite;

        return $this;
    }

    /**
     * Get humidite
     *
     * @return float 
     */
    public function getHumidite()
    {
        return $this->humidite;
    }

    /**
     * Set ps
     *
     * @param float $ps
     * @return Comparateur
     */
    public function setPs($ps)
    {
        $this->ps = $ps;

        return $this;
    }

    /**
     * Get ps
     *
     * @return float 
     */
    public function getPs()
    {
        return $this->ps;
    }

    /**
     * Set hagberg
     *
     * @param integer $hagberg
     * @return Comparateur
     */
    public function setHagberg($hagberg)
    {
        $this->hagberg = $hagberg;

        return $this;
    }

    /**
     * Get hagberg
     *
     * @return integer 
     */
    public function getHagberg()
    {
        return $this->hagberg;
    }
}
