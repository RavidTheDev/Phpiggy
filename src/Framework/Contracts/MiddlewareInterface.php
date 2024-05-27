<?php

declare(strict_types=1);

namespace Framework\Contracts;

interface MiddlewareInterFace
{

    public function process(callable $next);
}
