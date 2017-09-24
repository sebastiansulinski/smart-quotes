<?php

namespace SSD\SmartQuotes;

class Utf8CharacterSet extends SmartQuotes
{
    /**
     * Fetch character-set map.
     *
     * @return void
     */
    protected function fetchCharacterSet()
    {
        $this->data = require "maps/utf8.php";
    }

    /**
     * Purify input.
     *
     * @param  string  $string
     * @return string
     */
    public function purify(string $string)
    {
        $this->setUp($string);

        return str_replace(
            $this->getKeys(),
            $this->getValues(),
            html_entity_decode($string, ENT_QUOTES, "UTF-8")
        );
    }
}