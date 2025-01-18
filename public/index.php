<?php

require '../vendor/autoload.php';

// Debugging: Check if the Journal class exists
var_dump(class_exists(\App\Models\Journal::class));
var_dump(class_exists(\App\Models\Seller::class));


$router = require '../src/Routes/index.php';

?>