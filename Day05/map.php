<?php
ini_set('memory_limit','512M');
// define(PHP_INT_SIZE,64);

class Map {

    private $name;
    // private $map;
    private $mapIn;
    private $mapOut;

    function __construct($name)
    {
        $this->name = $name;
        // $this->map = [];
        $this->mapIn = [];
        $this->mapOut = [];
    }

    // public function addMap($line) {
    //     array_push($this->map,);
    // }
    public function addMap ($out, $in, $range) {
        for ($i=0; $i < $range ; $i++) { 
            array_push($this->mapIn, $in+$i);
            array_push($this->mapOut, $out+$i);
        }
    }

    public function convert ($info) {
        $pos = array_search($info, $this->mapIn);
        if ( $pos !== false) $info = $this->mapOut[$pos];
        return $info;
    }
}