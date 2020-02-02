<?php

require_once 'Grid.php';
// $number = readline("Enter a number: ");
// echo 'You picked the number: '.$number;

$upperRight = readline('Please insert upper-right coordinates:'.PHP_EOL);
$roverAttributes = [];
$instruction = '';


while(readline('Press enter to insert rover instructions or Q to exit'.PHP_EOL) !== 'q'){
    $roverPosition = readline("Please insert the rover's starting positions");
    $roverMoves = readline("Please insert the rover's instructions");
    array_push($roverAttributes, array(explode(' ', $roverPosition), explode(' ', $roverMoves)));
    $maxSize = explode(' ', $upperRight);
    $plateau = new Grid($maxSize[0], $roverAttributes);
}


