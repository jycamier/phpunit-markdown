<?php

namespace Jycamier\PanierBundle;

use PHPUnit\Framework\TestCase;

/**
 * Class ProduitPanierTest
 *
 * @author Jean-Yves Camier <jycamier@clever-age.com>
 */
class ProduitPanierTest extends TestCase
{
    /**
     * on teste si le prix total du panier est toujours le bon
     */
    public function testGetPrice()
    {
        $panier = new Panier();
        $panier->addProduitPanier($this->getProduitPanier(10, 3));
        $panier->addProduitPanier($this->getProduitPanier(20, 2));

        self::assertEquals(70, $panier->getTotal());
    }

    /**
     * Retourne un mock de ProduitPanier
     * @param $prix
     * @param $quantite
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getProduitPanier($prix, $quantite)
    {
        $stub = $this->createMock(ProduitPanier::class);
        $stub
            ->method('getQuantite')
            ->willReturn($quantite);

        $stub
            ->method('getProduit')
            ->will(self::returnValue($this->getProduit($prix)));

        return $stub;
    }

    /**
     * @param $prix
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getProduit($prix)
    {
        $produit = $this->createMock(Produit::class);
        $produit
            ->method('getPrix')
            ->willReturn($prix);

        return $produit;
    }
}
