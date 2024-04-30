<?php

$wineVolume = 50;
$amphoraMaxCapacity = 100;

// amphoraRemaining is free space in the amphora
$amphoraRemaining = $amphoraMaxCapacity;


// fill
if ($wineVolume <= $amphoraMaxCapacity) {
    $amphoraRemaining -= $wineVolume;
}

// drink
$glassSize = 5;
if ($amphoraRemaining >= $glassSize) {
    $amphoraRemaining += $glassSize;
}