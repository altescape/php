<?php
/**
 * Created by michaelwatts
 * Date: 10/11/2014
 * Time: 13:59
 */

class Anagram {

    public $array = array('Alpha', 'Beta', 'Gamma', 'Sigma');
    public $str = 'TEAMS';
    public $dict = ['TEAM', 'TEAMS',  'MEATS', 'STEAM'];
    public $result;

    function __construct($str)
    {
        $this->str = str_replace(' ', '', $str);
    }


    public function depthPicker($arr, $tempString, &$collect)
    {
        if ($tempString != '')
            $collect[] = $tempString;

        for ($i = 0; $i < count($arr); $i++) {

            $arrCopy = $arr;
            $elem = array_splice($arrCopy, $i, 1);

            if (count($arrCopy) > 0) {
                $this->depthPicker($arrCopy, $tempString . $elem[0], $collect);
            } else {
                $collect[] = $tempString . $elem[0];
            }
        }

        return true;
    }

    public function combinations()
    {
        $collect = array();
        $this->result = $this->depthPicker(str_split($this->str), "", $collect);
        $this->result = $collect;
        return array_values($collect);
    }

    public function anagrams()
    {
        $anagrams = $this->combinations();
        $dictionary = $this->dict;
        $matchingWords = array_intersect($anagrams, $dictionary);

        $uniqueWords = array_unique($matchingWords);

        return array_values($uniqueWords); // array values resets the keys
    }

    public function dictionary($dict)
    {
        $this->dict = $dict;
        return $this;
    }

} 