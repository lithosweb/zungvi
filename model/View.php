<?php

namespace app\model;

final class View
{
    public static function getHtml($html = "welcome", $folder = "views")
    {
        ob_start();
        require_once __DIR__ . "/../view/site/{$folder}/{$html}.php";
        return ob_get_clean();
    }

    public static function getLayout($layout)
    {
        ob_start();
        require_once __DIR__ . "/../view/site/layout/{$layout}.php";
        return ob_get_clean();
    }

    public static function getOut($html, $folder, $layout)
    {
        $htmll = self::getHtml($html, $folder);
        $layoutt = self::getLayout($layout);
        echo(str_replace("{{content}}", $htmll, $layoutt));
    }
}
