<?php

declare(strict_types=1);

namespace App\ServiceInterface\Navigation;

use Symfony\Component\HttpFoundation\Response;

interface NavigationSurfaceRendererInterface
{
    public function supports(string $surface, string $template): bool;

    /**
     * @param array<string, mixed> $data
     */
    public function render(string $surface, string $template, array $data): Response;
}
