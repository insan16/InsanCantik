<?php
use PHPUnit\Framework\TestCase;
require_once "Wordcount.php";
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        $Wc = new Wordcount();

        $TestSentence = "My name is Insan"; // 4 Kata..
        $WordCount = $Wc->countWords($TestSentence);
    }
}