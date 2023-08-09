<?php

namespace app\sanitize;

class Sanitize
{

    public static function data($data)
    {
        if (is_array($data)) {
            return filter_var_array($data, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        } else {
            return filter_var($data, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
    }
}
