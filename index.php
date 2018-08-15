<?php

require_once 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://root:root@mongo_container:27017");
$collection = $client->users->cards;
$result = $collection->insertMany(
    [
        ['name' => 'Mohammed Yehia', 'age' => 36],
        ['name' => 'Ahmed Yehia', 'age' => 32],
        ['name' => 'Bassem Yehia', 'age' => 32],
    ]
);
var_dump($collection->find()->toArray());
