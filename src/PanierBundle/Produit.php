<?php

namespace Jycamier\PanierBundle;

/**
 * Class Produit
 *
 * @package Jycamier\PanierBundle
 * @author  Jean-Yves Camier <jycamier@clever-age.com>
 */
class Produit
{
    /** @var float */
    protected $prix;

    /** @var string */
    protected $nom;

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
}
