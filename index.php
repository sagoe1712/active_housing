<?php

require 'vendor/autoload.php';

$callClass = new \activeHousing\callClass();

echo json_encode(new \activeHousing\jsonSerialiseClass((array) $callClass->single()));
echo '<br/><br/><br/>';
echo json_encode(new \activeHousing\jsonSerialiseClass((array) $callClass->paginated()));
