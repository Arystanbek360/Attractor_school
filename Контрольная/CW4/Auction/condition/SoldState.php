<?php

namespace CW4\Auction\condition;

use CW4\Auction\Product;

class SoldState implements IState
{
    public const NAME = "sold";
    /** @var Product $product */
    protected Product $product;
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
        return "Ошибка:$this->productName уже продан";
    }

    /** @return string */
    public function setUp(): string
    {
        return "Ошибка:$this->productName уже продан";
    }

    /** @return string */
    public function giveToTheWinner(): string
    {
        return "Ошибка:$this->productName уже продан";
    }

    /** @return string */
    public function withdrawSale(): string
    {
        return "Ошибка:$this->productName уже продан";
    }
}