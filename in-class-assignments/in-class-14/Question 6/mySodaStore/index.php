<?php

require './classes/SodaItem.php';

use mySodaStore\classes\SodaItem;

// create an instance of SodaItem 
$soda = new SodaItem('Jozef Cola', 100, 1.25);

// echo out the JSON
echo $soda->toJson();





