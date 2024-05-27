<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterFace;

class TemplateDataMiddleware implements MiddlewareInterFace
{
    public function process(callable $next)
    {
        echo "Template Data Middleware";
    }
}
