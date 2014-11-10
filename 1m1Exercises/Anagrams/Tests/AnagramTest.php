<?php
/**
 * Created by michaelwatts
 * Date: 10/11/2014
 * Time: 09:19
 *
 * Anagrams – Write a program that takes a word or phrase and finds as many other words as possible that can be made up from all
 * or some of the letters of the input word or phrase. For extra credit, allow the user to select a
 * language from a small list of your choice.
 *
 * requirements:
 *  1. the phrase (input)
 *  2. the dictionary (array of words)
 *
 * - Fetch phrase
 * - Explode phrase into letters and store in array
 * - Calculate length of word (is necessary?)
 *
 * - Fetch dictionary
 * - Check each word with same length as phrase
 * - Check each word has a letter from each index[n] of array
 *      - if yes, store to temp variable then remove letter from phrase array
 *      - if no, loop...
 * - When finished push word to array.
 *
 * redo for each word in dictionary
 *
 * our test phrases are:
 *  - i run to escape = a persecution
 *  - a telephone girl = repeating hello
 */

require_once "../Anagram.php";

class AnagramTest extends PHPUnit_Framework_TestCase {

    public function setUp(){}

//    public function testLoop()
//    {
//        $anagram = (new Anagram('TEAMS'))->combinations();
//        $expected = 325; // there are 325 different combinations from TEAMS
//        $result = $anagram;
//
//        $this->assertCount($expected, $result);
//    }
//
//    public function testAnagram()
//    {
//        $anagram = (new Anagram('TEAMS'))->anagrams();
//        $expected = ['TEAM', 'TEAMS', 'MEATS', 'STEAM'];
//        $result = $anagram;
//
//        $this->assertEquals($expected, $result);
//    }
//
//    public function testAnagramLimit()
//    {
//        $dictionary = ['ENTER', 'TIN', 'INTENT', 'INERT', 'RENT', 'NITE', 'TINE', 'NET', 'TEN', 'I'];
//        $anagram = new Anagram('INTERNET');
//
//        $anagram->dictionary($dictionary)->anagrams();
//
//        $expected = ['ENTER', 'TIN', 'INTENT', 'INERT', 'RENT', 'NITE', 'TINE', 'NET', 'TEN', 'I'];
//        $result = $anagram->anagrams();
//
//        sort($expected);
//        sort($result);
//
//        $this->assertEquals($expected, $result);
//    }

    public function testAnagramLimit2()
    {
        $dictionary = ['TRIBAL', 'LABOR', 'TRIAL'];
        $anagram = new Anagram('TONY BLAIR');

        $anagram->dictionary($dictionary)->anagrams();

        $expected = ['TRIBAL', 'LABOR', 'TRIAL'];
        $result = $anagram->anagrams();

        sort($expected);
        sort($result);

        print_r($expected);

        $this->assertEquals($expected, $result);
    }

    public function tearDown(){}
}
 