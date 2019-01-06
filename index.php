<?php

require_once 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://root:root@mongo_container:27017");
$db = $client->selectDatabase('users');
$contracts = $db->selectCollection('contracts');
$results = $contracts->find()->toArray();
foreach ($results as $result) {
    var_dump($result);
}
