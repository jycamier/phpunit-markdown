<?php

namespace Jycamier\PanierBundle;

/**
 * Class ProduitPanier
 *
 * @package Jycamier\PanierBundle
 * @author  Jean-Yves Camier <jycamier@clever-age.com>
 */
class ProduitPanier
{
    /** @var Produit */
    protected $produit;

    /** @var int */
    protected $quantite;

    /**
     * @return Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param Produit $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }
}
