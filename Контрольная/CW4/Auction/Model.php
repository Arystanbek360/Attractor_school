<?php

namespace CW4\Auction;

use CW4\Auction\condition\ForSaleState;
use CW4\Auction\condition\SoldState;

class Model
{
    /** @var Product $product */
    private Product $product;
    /** @var Product[] $products */
    public array $products;

    /** */
    public function writeToFile(): void
    {
        foreach ($this->products as $product) {
            $product_data[] = ['id' => $product->getId(), 'product' => $product->getName(), 'price' => $product->getPrice(),
                'honorary_code' => $product->getHonoraryCode(), 'state' => $product->conditions::NAME];
        }
        file_put_contents('product.json', json_encode($product_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    /** */
    public function getProducts(): void
    {
        if (file_exists('product.json')) {
            $products_data = json_decode(file_get_contents('product.json'), true);
        }
        foreach ($products_data as $item) {
            $this->product = new Product($item['id'], $item['product'], $item['price'], $item['honorary_code']);

            switch ($item['state']) {
                case "for_sale":
                    $this->product->setConditions(new ForSaleState($this->product));
                    break;
                case "sold":
                    $this->product->setConditions(new SoldState($this->product));
                    break;
            }
            $this->products[$item['id']] = $this->product;
        }
    }
}

