<?php 
$numbers = array("apple","orange");
var_dump($numbers[0]);

$people = [
    [
        "email" => "jason@gmail.com",
        "name" => "Jason",
        "phone" => "xyz"
    ],
    [
        "email" => "joe@gmail.com",
        "name" => "Joe",
        "phone" => "xyz"
    ]
    ];

    var_dump($people[0]["email"]);
    var_dump(json_encode(($people)))
?>