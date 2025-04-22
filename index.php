<?php

require __DIR__ . '/vendor/autoload.php';

$fileData = file_get_contents(__DIR__ . '/users.json');
$isValid  = json_validate($fileData);

if ($isValid) {
    // Convert to a list of objects
    $phpData = json_decode($fileData);
    //dump($phpData[0]);

    // Convert to a list of arrays
    $phpData = json_decode($fileData, true);
    //dump($phpData);

    // Convert array to JSON and save to a file
    $result = file_put_contents(__DIR__ . '/added-users.json', json_encode($jsonData));
    echo 'Result: ' . $result;
}
