<?php

namespace CW4\Auction\condition;

use CW4\Auction\Product;

class InStockState implements IState
{
    public const NAME = "in_stock";

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
        return "Ошибка:чтобы повысить цену $this->productName вам вначале нужно: $this->productName выставить на продажу";
    }

    /** @return string */
    public function setUp(): string
    {
        $this->product->setConditions($this->product->forSaleState);
        return "Успешно.$this->productName выставлен на продажу";
    }

    /** @return string */
    public function giveToTheWinner(): string
    {
        return "Ошибка:нельзя отдать $this->productName сразу со склада";
    }

    /** @return string */
    public function withdrawSale(): string
    {
        return "Ошибка:Нельзя снять $this->productName,так как он и так находится на складе";
    }
}