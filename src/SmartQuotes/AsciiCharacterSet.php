<?php namespace SSD\SmartQuotes;


class AsciiCharacterSet extends SmartQuotes implements Contract {

    /**
     * @param mixed $string
     *
     * @return mixed
     */
    public function purify($string)
    {

        $this->convertToUtf8($string);

        $string = str_replace("£", "|$|", $string);

        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);

        return $string = str_replace("|$|", "£", $string);

    }


}