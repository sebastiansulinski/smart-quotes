<?php

namespace SSD\SmartQuotes;

class AsciiCharacterSet extends SmartQuotes
{
    /**
     * Fetch character-set map.
     *
     * @return void
     */
    protected function fetchCharacterSet()
    {
        $this->data = require "maps/ascii.php";
    }

    /**
     * Purify input.
     *
     * @param string $string
     * @return string
     */
    public function purify(string $string)
    {
        $this->setUp($string);

        $keys = $this->getKeys();
        $values = $this->getValues();

        $string = str_replace($keys, $values, $string);

        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);

        return $string = str_replace($values, $keys, $string);
    }
}