<?php

declare(strict_types=1);

namespace app\error;

use app\exception\Exception_Interface;

class ErrorHandler implements Exception_Interface {

    public static function ShutDown(){
        return error_reporting(0);
    }
    
}