<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TransformEmojiTwigExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
          new TwigFilter('transformEmoji', [$this, 'transformEmoji']),
        ];
    }

    public function transformEmoji (string $text): string
    {
        return match ($text) {
            ':-)' => "😁",
            ';-)' => "😂",
            ':-|' => '😐',
            default => $text,
        };
    }
}
