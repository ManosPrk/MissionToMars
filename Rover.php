<?php


class Rover{
    public $positionX;
    public $positionY;
    public $moves;
    public $orientation;

    function __construct($position){
        echo 'Rover created';
        print_r($position);
        $this->positionX = $position[0][0];
        $this->positionY = $position[0][0];
        $this->orientation = $position[0][2];
        $this->moves = $position[1];
        echo $orientation;
        print_r($moves);
    }

    
}