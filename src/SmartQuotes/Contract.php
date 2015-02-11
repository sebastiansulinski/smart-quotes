<?php namespace SSD\SmartQuotes;


interface Contract {

    /**
     * @param mixed $string
     *
     * @return mixed
     */
    public function purify($string);

}