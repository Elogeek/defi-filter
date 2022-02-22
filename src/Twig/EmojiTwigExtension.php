<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class EmojiTwigExtension extends AbstractExtension {
    /**
     * @return TwigFilter[]
     */
    public function getFilters():array {
        return [
            new TwigFilter('emoji', [$this, 'emojiFilter'])
        ];
    }

    public function emojiFilter(string $text):string {
        $newT = $text;
        $newT = str_replace(":-)", "🙂", $newT);
        $newT = str_replace(";-)", "😉", $newT);
        $newT = str_replace(":-|", "😐", $newT);
        $newT = str_replace(":poop:", "💩", $newT);

        return "$newT";
    }
}