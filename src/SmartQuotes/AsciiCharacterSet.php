<?php namespace SSD\SmartQuotes;


class AsciiCharacterSet extends SmartQuotes implements Contract {


    /**
     * @return void
     */
    protected function getCharacterSet()
    {

        $this->data = require("asciiMap.php");

    }

    /**
     * @param mixed $string
     *
     * @return mixed
     */
    public function purify($string)
    {

        $this->setUp($string);

        $keys = $this->getKeys();
        $values = $this->getValues();

        $string = str_replace($keys, $values, $string);

        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);

        return $string = str_replace($values, $keys, $string);

    }


}