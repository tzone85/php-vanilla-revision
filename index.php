<?php

$person = [
    'age' => 33,
    'hair' => 'black',
    'career' => 'web developer'
];

$person['name'] = 'Thando';

 unset($person['name']);

echo '<pre>';
    var_dump($person);
echo '</pre>';

// require 'index.view.php';