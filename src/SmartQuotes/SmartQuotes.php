<?php

namespace SSD\SmartQuotes;

abstract class SmartQuotes
{
    /**
     * Map.
     *
     * @var array
     */
    protected $data = [];

    /**
     * Convert input to utf-8.
     *
     * @param  string  $string
     * @return void
     */
    protected function convertToUtf8(string &$string)
    {
        if (!preg_match('/^\\X*$/u', $string)) {
            $string = utf8_encode($string);
        }
    }

    /**
     * Get map keys.
     *
     * @return array
     */
    protected function getKeys()
    {
        return array_keys($this->data);
    }

    /**
     * Get map values.
     *
     * @return array
     */
    protected function getValues()
    {
        return array_values($this->data);
    }

    /**
     * Fetch character-set map.
     *
     * @return void
     */
    abstract protected function fetchCharacterSet();

    /**
     * Purify input.
     *
     * @param  string  $string
     * @return string
     */
    abstract public function purify(string $string);

    /**
     * Set up component.
     *
     * @param string  $string
     */
    protected function setUp(string &$string)
    {
        $this->convertToUtf8($string);
        $this->fetchCharacterSet();
    }
}