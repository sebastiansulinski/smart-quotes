<?php namespace SSD\SmartQuotes;


class Utf8CharacterSet extends SmartQuotes implements Contract {


    /**
     * @return void
     */
    protected function getCharacterSet()
    {

        $this->data = require("utf8Map.php");

    }


    /**
     * @param null $string
     *
     * @return mixed|null
     */
    public function purify($string)
    {

        $this->setUp($string);

        return str_replace(
            $this->getKeys(),
            $this->getValues(),
            html_entity_decode($string, ENT_QUOTES, "UTF-8")
        );

    }

}