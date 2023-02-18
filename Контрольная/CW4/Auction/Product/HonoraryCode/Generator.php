<?php

namespace CW4\Auction\Product\HonoraryCode;


class Generator
{
    /**
     * @param int $price
     * @param string $id
     * @return string
     */
    static function generation(int $price, string $id): string
    {
        if ($price >= 1000) {
            $honorary_code = md5("Gold-" . $id);
        } elseif ($price >= 500 & $price < 1000) {
            $honorary_code = md5("Silver-" . $id);
        } else {
            $honorary_code = md5("Bronze-" . $id);
        }
        return $honorary_code;
    }
}