<?php
/**
 * Created by michaelwatts
 * Date: 05/12/14
 * Time: 15:28
 */

namespace php56;


class VariadicFunction
{
    private $requiredParam;
    private $OptionalParam;
    private $variadicParams;

    public function f($req, $opt=null, ...$params) {

        $this->requiredParam = $req;
        $this->OptionalParam = $opt;
        $this->variadicParams = $params;
    }

    public function __toString(){
        return '$requiredParam:  '.$this->requiredParam.';'.PHP_EOL.'$OptionalParam:  '.$this->OptionalParam.';'.PHP_EOL.'$variadicParams: '.count($this->variadicParams).PHP_EOL;
    }

}

$test = new VariadicFunction();

$test->f("required param", "optional param", "string", 4, "a sentence of sorts", 89, [1234,123123,123123]);

echo $test;