<?php

namespace Jycamier\PanierBundle;

/**
 * Class Panier
 *
 * @package Jycamier\PanierBundle
 * @author  Jean-Yves Camier <jycamier@clever-age.com>
 */
class Panier
{
    /**
     * @var ProduitPanier[]
     */
    protected $produitPaniers;

    /**
     * Panier constructor.
     */
    public function __construct()
    {
        $this->produitPaniers = [];
    }

    /**
     * @param ProduitPanier $produitPanier
     */
    public function addProduitPanier(ProduitPanier $produitPanier)
    {
        $this->produitPaniers[] = $produitPanier;
    }

    /**
     * @return float|int
     */
    public function getTotal()
    {
        $total = 0;
        foreach ($this->produitPaniers as $produitPanier) {
            $total += $produitPanier->getTotal();
        }

        return $total;
    }
}
