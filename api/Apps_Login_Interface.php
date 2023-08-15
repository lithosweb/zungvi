<?php

declare (strict_types = 1);

namespace app\api;

interface Apps_Login_Interface {
    public function authenticate(): bool;
}
 