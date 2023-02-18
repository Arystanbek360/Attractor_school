<?php

namespace CW4\ToHtml;

use CW4\Auction\Product;

class ToHtml
{
    /**
     * @param array $products
     * @return string
     */
    public function getTemplate(array $products): string
    {
        $str = "";
        /** @var Product[] $products */
        foreach ($products as $key => $product) {
            $honorary_code = "";
            if ($product->getHonoraryCode() !== "") {
                $honorary_code = "Почетный Код: ";
                $honorary_code .= $product->getHonoraryCode();
            }
            $str .= '<div class="main">
       <p>Id: ' . $product->getId() . '</p>
       <div class="ProductName">
       <p class="ProductNameText">Наименование: <h3>' . $product->getName() . '</h3></p>
       </div>
       <p>Цена: $' . $product->getPrice() . '</p>
       ' . $honorary_code . '
       <p>Состояние: ' . $product->conditions::NAME . '</p>
       <form method="post" class="form">
               <input type="hidden" name="' . $key . '">
               <button type="submit" name="' . $key . '" value="1" class="FormButton">Выставить на аукцион</button>
               <button type="submit" name="' . $key . '" value="2" class="FormButton">Поднять цену</button>
               <button type="submit" name="' . $key . '" value="3" class="FormButton">Снять товар с продажи</button>
               <button type="submit" name="' . $key . '" value="4" class="FormButton">Выдать победителю</button>
</form>
</div>
';
            unset($honorary_code);
        }
        return $str;
    }

    /**
     * @param string $message
     * @return string
     */
    public function getMessage(string $message): string
    {
        $str = "";
        $str .= '<div class="main">
        <p>Сообщение: ' . $message . '</p>
</div>
';
        return $str;
    }

    /**
     * @param string $str
     * @param string $message
     */
    public function printHtml(string $str, string $message = ""): void
    {
        $template = file_get_contents('page.html');
        $form = str_ireplace(
            "<!-- {#message#} -->",
            $this->getMessage($message),
            $template);
        $finish = str_ireplace(
            "<!-- {#records#} -->",
            $str,
            $form);
        print $finish;
    }
}