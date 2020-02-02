<?php

require_once 'Rover.php';

class Grid{ 
    private $maxSizeX;
    private $minSizeX = 0;

    private $maxSizeY;
    private $minSizeY = 0;
    private $rovers = [];

    function __construct($size, $roverAttributes){
        $this->maxSizeX = $size;
        $this->maxSizeY = $size;
        print_r($roverAttributes[0]);
        for ($i = 0; $i < count($roverAttributes); $i++){
            $rover = new Rover($roverAttributes);
            $this->Move($rover);
            array_push($this->rovers, $rover);
        }

        // for($roverInstructions as $instructionsArray){

        // }
    }

    function Move($rover){
        foreach($move as $rover->$moves){
            switch ($move){
                case 'L':
                    if ($move === 'N'){
                        $rover->$orientation = 'E';
                    }
                    else if ($move === 'E'){
                        $rover->$orientation = 'S';
                    }
                    else if ($move === 'S'){
                        $rover->$orientation = 'W';
                    }
                    else if ($move === 'W'){
                        $rover->$orientation = 'N';
                    }
                break;

                case 'R':
                    if ($move === 'N'){
                        $rover->$orientation = 'W';
                    }
                    else if ($move === 'W'){
                        $rover->$orientation = 'S';
                    }
                    else if ($move === 'S'){
                        $rover->$orientation = 'E';
                    }
                    else if ($move === 'E'){
                        $rover->$orientation = 'N';
                    }
                break;

                case 'M':
                    if($rover->positionX + $move <= $maxSizeX){
                        $rover->positionX += getMovement($rover->orientation);
                    }
                    if($rover->positionX + $move <= $maxSizeX){
                        $rover->positionX += getMovement($rover->orientation);
                    }
                break;
            }

        }
        echo 'Rover positionX: '.$rover->positionX.' '.$rover->positionY;
    }

    function getMovement($orientation){
        switch($orientation){
            case 'N' || 'E':
                return 1;
            break;
            case 'S' || 'W':
                return -1;
            break;
        }
    }

}