<?php

namespace CW4\Auction\condition;

use CW4\Auction\Product;
use CW4\Auction\Product\HonoraryCode\Generator;

class ForSaleState implements IState
{
    public const NAME = "for_sale";
    /** @var Product $product */
    private Product $product;
    /** @var string $productName */
    private string $productName;

    /** @param Product $product */
    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->productName = $this->product->getName();

    }

    /** @return string */
    public function raisePrice(): string
    {
        $newPrice = $this->product->getPrice() + 100;
        $this->product->setPrice($newPrice);
        return "Успешно:Цена на $this->productName повышена";
    }

    /** @return string */
    public function setUp(): string
    {
        return "Ошибка:нельзя выставить $this->productName повторно";
    }

    /** @return string */
    public function giveToTheWinner(): string
    {
        if ($this->product->getPrice() == 0) {
            return "Ошибка:нельзя отдать $this->productName сразу со склада";
        }
        $this->product->setHonoraryCode
        (Generator:: generation($this->product->getPrice(), $this->product->getId()));
        $this->product->setConditions($this->product->soldState);
        return "Успешно:$this->productName Продан";
    }

    /** @return string */
    public function withdrawSale(): string
    {
        $this->product->setPrice(0);
        $this->product->setConditions($this->product->inStockState);
        return "Успешно:$this->productName снят с продажи";
    }
}