<?php

namespace Pet\ToHtml;

use Pet\Cat\Cat;

class ToHtml
{
    /**
     * @param Cat $cat
     * @param string $voice
     */
    public function getTemplate(Cat $cat, string $voice): void
    {
        $str = '<div class="main">
       <div>Кот мяукает: ' . $voice . '</div>
       <div>Состояние кота: ' . $cat->conditions::NAME . '</div>
       <div>Вес кота: ' . $cat->weight . '</div>
</div>';
        $template = file_get_contents('pageTemplate.html');
        $finish = str_ireplace(
            "<!-- {#records#} -->",
            $str,
            $template);
        print $finish;
    }
}