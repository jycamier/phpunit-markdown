<?php

namespace Jycamier\PanierBundle;

use PHPUnit\Framework\TestCase;

/**
 * Class ProduitPanierTest
 *
 * @package Jycamier\PanierBundle
 * @author  Jean-Yves Camier <jycamier@clever-age.com>
 */
class ProduitPanierTest extends TestCase
{
    /**
     * @dataProvider produitDataProvider
     */
    public function testGetTotal($pu, $quantite, $total)
    {
        $produitPanier = new ProduitPanier();
        $produitPanier->setProduit($this->getProduit($pu));
        $produitPanier->setQuantite($quantite);

        self::assertEquals($total, $produitPanier->getTotal());
    }

    /**
     * @return array
     */
    public function produitDataProvider()
    {
        return [
            '1 pain au chocolat' => [0.15, 1, 0.15],
            '2 pack de Leffe' => [6.35, 2, 12.70],
        ];
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
