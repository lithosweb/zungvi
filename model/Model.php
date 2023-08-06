<?php

namespace app\model;

class Model
{
    public ResolveMethod $resolveMethod;

    public function __construct()
    {
        $this->resolveMethod = new ResolveMethod;
        $this->resolveMethod->method();
    }
}
