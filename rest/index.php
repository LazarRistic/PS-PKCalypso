<?php

use root\Controller;

require 'flight/Flight.php';
require 'jsonindent.php';
require '../Controller.php';

Flight::register('db', 'Database', array('rest'));
$json_podaci = file_get_contents("php://input");
Flight::set('json_podaci', $json_podaci );


Flight::route('GET /', function(){
    echo 'hello nestos!';
});
/*
Flight::route('GET|POST /register/@title/@address/@email/@coutry/@city/@website', function ($title, $address, $email, $coutry, $city, $website) {
    $controller = new Controller();
    echo $controller->registerDanceClub($title, $address, $email, $coutry, $city, $website);
});*/

Flight::route('POST /register', function () {
    header("Content-Type: application/json; charset=utf-8");
    $controller = new Controller();
    $danceClub = json_decode($_POST["danceClub"]);
    echo $controller->registerDanceClub($danceClub->{"dc_title"}, $danceClub->{"dc_address"}, $danceClub->{"dc_email"}, $danceClub->{"dc_country"}, $danceClub->{"dc_city"}, $danceClub->{"dc_web_site"});
});

Flight::route('GET /dancer/json/@username', function ($username) {
    header("Content-Type: application/json; charset=utf-8");
    $controller = new \root\Controller();
    $dancerJSON = $controller->loadUserFromUsernameJSON($username);
    echo indent($dancerJSON);
});

Flight::route('GET /danceclub/json/@title', function ($title) {
    header("Content-Type: application/json; charset=utf-8");
    $controller = new \root\Controller();
    $danceClubJSON = $controller->loadDanceClubFromUsernameJSON($title);
    echo indent($danceClubJSON);
});

Flight::route('GET /danceclub/all/xml', function () {
    header("Content-Type: text/xml; charset=utf-8", 200);
    $controller = new \root\Controller();
    $dancerClubXML = $controller->loadAllDanceCLubsXML();
    print $dancerClubXML->asXML();
});

Flight::route('/danceclub/all/json', function () {
    header ("Content-Type: application/json; charset=utf-8");
    $controller = new \root\Controller();
    $dancerClubJSON = $controller->loadAllDanceClubsJSON();
    echo $dancerClubJSON;
});


Flight::start();
?>
