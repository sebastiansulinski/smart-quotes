<?php namespace SSD\SmartQuotes;


abstract class SmartQuotes {


    /**
     * @param mixed $string
     *
     * @return void
     */
    protected function convertToUtf8(&$string)
    {

        if (!preg_match('/^\\X*$/u', $string)) {

            $string = utf8_encode($string);

        }

    }
}