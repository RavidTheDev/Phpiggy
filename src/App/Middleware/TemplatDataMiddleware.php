<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterFace;
use Framework\TemplateEngine;

class TemplateDataMiddleware implements MiddlewareInterFace
{
    public function __construct(private TemplateEngine $view)
    {
    }
    public function process(callable $next)
    {
        $this->view->addGlobal('title', 'Expense Tracking App');
        $next();
    }
}
