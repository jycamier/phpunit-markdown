<?php

namespace Jycamier\PanierBundle;

use PHPUnit\Framework\TestCase;

/**
 * Class ProduitPanierTest
 *
 * @author Jean-Yves Camier <jycamier@clever-age.com>
 */
class PanierTest extends TestCase
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
            ->method('getTotal')
            ->willReturn($quantite * $prix);

        return $stub;
    }
}
