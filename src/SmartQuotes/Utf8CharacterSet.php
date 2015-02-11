<?php namespace SSD\SmartQuotes;


class Utf8CharacterSet extends SmartQuotes implements Contract {

    /**
     * @var array
     */
    private $data = [];


    /**
     * @return void
     */
    private function getCharacterSet()
    {

        $this->data = require("utfMap.php");

    }


    /**
     * @return array
     */
    private function getKeys()
    {

        return array_keys($this->data);

    }


    /**
     * @return array
     */
    private function getValues()
    {

        return array_values($this->data);

    }


    /**
     * @param null $string
     *
     * @return mixed|null
     */
    public function purify($string)
    {

        $this->convertToUtf8($string);

        $this->getCharacterSet();

        return str_replace(
            $this->getKeys(),
            $this->getValues(),
            html_entity_decode($string, ENT_QUOTES, "UTF-8")
        );

    }

}