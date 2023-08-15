<?php

declare (strict_types = 1);

namespace app\model;

class Model implements Model_Interface
{
    public ResolveMethod $resolveMethod;

    public function __construct()
    {
        $this->resolveMethod = new ResolveMethod;
        $this->resolveMethod->method();
    }
}
