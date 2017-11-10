<?php

namespace SSD\SmartQuotes;

class Factory
{
    /**
     * Filter string using given implementation.
     *
     * @param  \SSD\SmartQuotes\SmartQuotes  $quotes
     * @param  string  $string
     * @return string
     */
    public static function filter(SmartQuotes $quotes, string $string): string
    {
        return $quotes->purify($string);
    }
}
