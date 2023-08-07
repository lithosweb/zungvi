<?php
namespace app\error;

class Error {
    public static function ShutDown(){
        return error_reporting(0);
    }
}