# Smart quotes replacement toolkit

The kit replaces all irregular - Microsoft version single and double quotes to simple - ASCII type ones.

[![Build Status](https://travis-ci.org/sebastiansulinski/smart-quotes.svg?branch=master)](https://travis-ci.org/sebastiansulinski/smart-quotes)

## Requirements

Starting from version 1.3.0 package requires PHP 7.1 or higher. Please use version 1.2.0 for PHP 7.0 or 1.0.5 for earlier versions.

## Usage example

There are two implementations - one, which converts quotes and returns content as UTF-8
and the other which does the same, but returns it as ASCII - with the exception of a pound symbol (£),
which is also returned correctly.

```
use SSD\SmartQuotes\Utf8CharacterSet;
use SSD\SmartQuotes\Factory as SmartQuotesFactory;

$string = "“Contrary to ‘popular belief’, Lorem Ipsum is not simply ‘random text’. The cost in Sterling is £20.00”";

// UTF-8 implementation
echo SmartQuotesFactory::filter(new Utf8CharacterSet, $string);

// ASCII implementation
echo SmartQuotesFactory::filter(new AsciiCharacterSet, $string);

// both return:
// "Contrary to 'popular belief', Lorem Ipsum is not simply 'random text'. The cost in Sterling is £20.00"
```