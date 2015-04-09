<?php namespace SSD\SmartQuotes;


use InvalidArgumentException;

abstract class SmartQuotes {

    /**
     * @var array
     */
    protected $data = [];





    /**
     * @param mixed $string
     *
     * @return void
     * @throws InvalidArgumentException
     */
    protected function convertToUtf8(&$string)
    {

        if (!is_string($string)) {

            throw new InvalidArgumentException;

        }

        if (!preg_match('/^\\X*$/u', $string)) {

            $string = utf8_encode($string);

        }

    }

    /**
     * @return array
     */
    protected function getKeys()
    {

        return array_keys($this->data);

    }

    /**
     * @return array
     */
    protected function getValues()
    {

        return array_values($this->data);

    }

    /**
     * @return void
     */
    abstract protected function getCharacterSet();

    /**
     * @param mixed $string
     */
    protected function setUp(&$string)
    {

        $this->convertToUtf8($string);

        $this->getCharacterSet();
        
    }

}