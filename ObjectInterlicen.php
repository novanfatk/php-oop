<?php

class Data implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "Third";
    protected string $forth = "Forth";

    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        // $iterator = new ArrayIterator($array);
        // return $iterator;
        return new ArrayIterator($array);
    }
}


$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
