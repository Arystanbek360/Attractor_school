<?php

namespace CW4\Auction;

use CW4\Auction\condition\ForSaleState;
use CW4\Auction\condition\InStockState;
use CW4\Auction\condition\IState;
use CW4\Auction\condition\SoldState;

class Product
{
    /** @var string $id */
    private string $id;
    /** @var string $productName */
    private string $productName;
    /** @var int $price */
    private int $price;
    /** @var string|null $honorary_code */
    private string|null $honorary_code;

    /** @var IState|InStockState $conditions */
    public IState $conditions;
    /** @var InStockState $inStockState */
    public InStockState $inStockState;
    /** @var ForSaleState $forSaleState */
    public ForSaleState $forSaleState;
    /** @var SoldState $soldState */
    public SoldState $soldState;

    /**
     * @param string $id
     * @param string $productName
     * @param int $price
     * @param string|null $honorary_code
     */
    public function __construct(string $id, string $productName, int $price, null|string $honorary_code)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->price = $price;
        $this->honorary_code = $honorary_code;
        $this->forSaleState = new ForSaleState($this);
        $this->inStockState = new InStockState($this);
        $this->soldState = new SoldState($this);
        $this->conditions = new InStockState($this);
    }

    /** @param IState $conditions */
    public function setConditions(IState $conditions): void
    {
        $this->conditions = $conditions;
    }

    /** @return string */
    public function raisePrice(): string
    {
        return $this->conditions->raisePrice();
    }

    /** @return string */
    public function setUp(): string
    {
        return $this->conditions->setUp();
    }

    /** @return string */
    public function giveToTheWinner(): string
    {
        return $this->conditions->giveToTheWinner();
    }

    /** @return string */
    public function withdrawSale(): string
    {
        return $this->conditions->withdrawSale();
    }

    /** @return string */
    public function getName(): string
    {
        return $this->productName;
    }

    /** @return string */
    public function getId(): string
    {
        return $this->id;
    }

    /** @return string */
    public function getPrice(): int
    {
        return $this->price;
    }

    /** @return string */
    public function getHonoraryCode(): string
    {
        if ($this->honorary_code == null) {
            return "";
        }
        return $this->honorary_code;
    }

    /**  */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**  */
    public function setHonoraryCode(string $str): void
    {
        $this->honorary_code = $str;
    }
}