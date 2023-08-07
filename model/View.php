<?php

namespace app\model;

final class View
{
    public static function getHtml($html = "welcome", $folder = "views")
    {
        ob_start();
        require_once __DIR__ . "/../view/{$folder}/{$html}.php";
        return ob_get_clean();
    }

    public static function getLayout($layout)
    {
        ob_start();
        require_once __DIR__ . "/../view/layout/{$layout}.php";
        return ob_get_clean();
    }

    public static function getOut($html = "welcome", $folder = "views", $layout = "_main")
    {
        $htmll = self::getHtml($html, $folder);
        $layoutt = self::getLayout($layout);
        echo(str_replace("{{content}}", $htmll, $layoutt));
    }
}
