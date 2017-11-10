<?php

namespace SSD\SmartQuotes;

class AsciiCharacterSet extends SmartQuotes
{
    /**
     * Fetch character-set map.
     *
     * @return void
     */
    protected function fetchCharacterSet(): void
    {
        $this->data = require "maps/ascii.php";
    }

    /**
     * Purify input.
     *
     * @param  string  $string
     * @return string
     */
    public function purify(string $string): string
    {
        $this->setUp($string);

        $keys = $this->getKeys();
        $values = $this->getValues();

        $string = str_replace($keys, $values, Factory::filter(new Utf8CharacterSet, $string));

        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);

        return str_replace($values, $keys, $string);
    }
}
