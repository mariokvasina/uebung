<?php
/**
 * Created by PhpStorm.
 * User: Mario
 */

namespace Kvasina\Ball;

include_once "ball.php";
include_once "ballInterface.php";
include_once "basketball.php";
include_once "fußball.php";


//header("Content-Type: application/json");

$ball = new basketball("schöner basketball", 2, "plastik");
$ball1 = new basketball("schircher basketball", 2, "glas");
$ball2 = new fußball("schöner ball", 45, "glas");

$array = array("ball" => $ball, "ball2" => $ball2, "ball1" => $ball1);

/*{
    "name": "test",
    "zahl": 2,
    "array": [12, 3, 4]
}*/

if (isset($_GET['format'])) {
    if ($_GET['format'] == "json") {
        header("Content-Type: application/json");
        if (isset($_GET["material"])) {
            outputAllOfSpecificMaterialJSON($array, $_GET["material"]);
        } else {
            echo outputJSON($ball);
        }
    } else {
        if (isset($_GET["material"])) {
            outputAllOfSpecificMaterialHTML($array, $_GET["material"]);
        } else {
            echo outputHTML($ball);
        }
    }
} else {
    ?>
    <a href="index.php?format=html">Wechseln zur HTML Ansicht</a>
    <a href="index.php?format=json">Wechseln zur JSON Ansicht</a>
    <?php
}

function outputAllOfSpecificMaterialJSON($array, $material)
{
    foreach ($array as $value) {
        if (strcmp($value->getMaterial(), $material) == 0) { // wenns gleich ist kommt 0 raus
            echo outputJSON($value) . "<br>";
        }
    }
}

function outputAllOfSpecificMaterialHTML($array, $material)
{
    foreach ($array as $value) {
        if (strcmp($value->getMaterial(), $material) == 0) { // wenns gleich ist kommt 0 raus
            echo outputHTML($value) . "<br>";
        }
    }
}

function outputHTML($ball)
{
    return "name = " . $ball->getName() . " material = " . $ball->getMaterial() . " durchmesser = " . $ball->getDurchmesser() . " volumen = " . $ball->getVolumen();
}

function outputJSON(Ball $ball): string
{
    return "{\"name\":\"" . $ball->getName() . "\",
          \"durchmesser\":" . $ball->getDurchmesser() . ",
          \"material\": \"" . $ball->getMaterial() . "\" ,
          \"volumen\" : " . $ball->getVolumen() . "
    }"; //Ausgabe in JSON

}

/*if (isset($_GET['format'])) {
    if ($_GET['format'] == "json") {
        header("Content-Type: application/json");
        echo outputJSON($myflag);
    } else {
        echo outputHTML($myflag);
    }
} else {
    echo outputHTML($myflag);
}*/


