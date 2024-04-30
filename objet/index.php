<?php

require 'Amphora.php';
require 'Boat.php';

$amphora1 = new Amphora(100, 'Vin');
$amphora2 = new Amphora(300, 'Eau');
$amphora3 = new Amphora(50, 'Bière');

$test = 'bonjour';

$boat = new Boat();
$boat->load($amphora1);
$boat->load($amphora2);

echo Amphora::MAX_LABEL_SIZE;