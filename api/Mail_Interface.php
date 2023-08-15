<?php

declare(strict_types=1);

namespace app\api;

interface Mail_Interface
{
    public function send($to, $subject, $html): bool;
}
