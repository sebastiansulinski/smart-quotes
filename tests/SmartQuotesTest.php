<?php

use PHPUnit\Framework\TestCase;

use SSD\SmartQuotes\Factory;
use SSD\SmartQuotes\Utf8CharacterSet;
use SSD\SmartQuotes\AsciiCharacterSet;

class SmartQuotesTest extends TestCase
{
    /**
     * @var string
     */
    private $input = "“Contrary to ‘popular belief’, Lorem Ipsum„ is not simply ‘random text’. The cost″ in Sterling′ is £20.00”";

    /**
     * @var string
     */
    private $output = "\"Contrary to 'popular belief', Lorem Ipsum\" is not simply 'random text'. The cost\" in Sterling' is £20.00\"";

    /**
     * @test
     */
    public function correctly_returns_string_with_converted_apostrophes_using_utf8_character_set()
    {
        $this->assertEquals(
            $this->output,
            Factory::filter(new Utf8CharacterSet, $this->input)
        );
    }

    /**
     * @test
     */
    public function correctly_returns_string_with_converted_apostrophes_using_ascii_character_set()
    {
        $this->assertEquals(
            $this->output,
            Factory::filter(new AsciiCharacterSet, $this->input)
        );
    }
}