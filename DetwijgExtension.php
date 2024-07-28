<?php

namespace Deidee\Detwijg;

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Extension\AbstractExtension;
use Twig\Extension\CoreExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

final class DetwijgExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('delogo', [$this, 'delogo']),
        ];
    }

    public function delogo(string $str): string
    {
        $url = 'https://deidee.com/logo.svg';

        if(!empty($str)) $url .= '?' . http_build_query(['str' => $str]);

        return $url;
    }
}