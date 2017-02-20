<?php

use PHPUnit\Framework\TestCase;

use SSD\SmartQuotes\Factory;
use SSD\SmartQuotes\Utf8CharacterSet;
use SSD\SmartQuotes\AsciiCharacterSet;

class SmartQuotesTest extends TestCase
{
    /**
     * @test
     */
    public function correctly_returns_string_with_converted_apostrophes_using_utf8_character_set()
    {
        $string = "“Contrary to ‘popular belief’, Lorem Ipsum is not simply ‘random text’. The cost in Sterling is £20.00”";

        $this->assertEquals(
            "\"Contrary to 'popular belief', Lorem Ipsum is not simply 'random text'. The cost in Sterling is £20.00\"",
            Factory::filter(new Utf8CharacterSet, $string)
        );
    }

    /**
     * @test
     */
    public function correctly_returns_string_with_converted_apostrophes_using_ascii_character_set()
    {
        $string = "“Contrary to ‘popular belief’, Lorem Ipsum is not simply ‘random text’. The cost in Sterling is £20.00”";

        $this->assertEquals(
            "\"Contrary to 'popular belief', Lorem Ipsum is not simply 'random text'. The cost in Sterling is £20.00\"",
            Factory::filter(new AsciiCharacterSet, $string)
        );
    }
}