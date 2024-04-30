<?php

require "functions.php";

$wineVolume = 50;
$amphoraMaxCapacity = 100;

// fill
$amphoraRemaining = fill($wineVolume, $amphoraMaxCapacity);

// drink
$hydraHeads = 9;
// This use is illogic, but it works
$amphoraRemaining = drink($hydraHeads, $amphoraRemaining);