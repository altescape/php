<?php
/**
 * Created by michaelwatts
 * Date: 11/11/2014
 * Time: 11:10
 *
 * http://en.wikipedia.org/wiki/Strategy_pattern
 * http://www.phptherightway.com/pages/Design-Patterns.html
 */

interface OutputInterface
{
    public function load();
}

class SerializeArrayOutput implements OutputInterface
{
    public function load()
    {
        return serialize([1,2,3,4,5,6,99,100,101]);
    }
}

class JsonStringOutput implements OutputInterface
{
    public function load()
    {
        return json_encode([1,2,3,4,5,6,99,100,101]);
    }
}

class ArrayOutput implements OutputInterface
{
    public function load()
    {
        return [1,2,3,4,5,6,99,100,101];
    }
}

class SomeClient
{
    private $output;

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load();
    }
}

$client = new SomeClient();

// want an array?
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput();
var_dump($data);

// want json?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput();
var_dump($data);

// want serialized data?
$client->setOutput(new SerializeArrayOutput());
$data = $client->loadOutput();
var_dump($data);