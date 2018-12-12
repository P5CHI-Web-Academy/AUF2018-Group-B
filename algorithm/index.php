<?php


include "dijkstra.php";
header('Content-Type: application/json');
error_reporting(0);
/**
 * decode json feile!
 */
$string = file_get_contents("nw.json");
$data = json_decode($string, true);

$byPrice;
$byTime;
$byDistance;
//byPrice
{
    $vehicleGraph = [];
    foreach ($data as $index => $path) {
        $vehicleGraph[$path['from']][$path['to']] = $path['vehicle']['price'];
    }

    $dijkstra = new dijkstra($vehicleGraph);
    $path = $dijkstra->shortestPaths('1', 'final')[0];

    $distance = 0;
    for ($i = 1; $i <= count($path); $i++) {
        $distance += $vehicleGraph[$path[$i - 1]][$path[$i]];
    }

    $byPrice = array("graph" => $path, "value" => $distance);
}

//byTime
{
    $vehicleGraph = [];
    foreach ($data as $index => $path) {
        $vehicleGraph[$path['from']][$path['to']] = $path['vehicle']['time'];
    }

    $dijkstra = new dijkstra($vehicleGraph);
    $path = $dijkstra->shortestPaths('1', 'final')[0];

    $distance = 0;
    for ($i = 1; $i <= count($path); $i++) {
        $distance += $vehicleGraph[$path[$i - 1]][$path[$i]];
    }

    $byTime = array("graph"=> $path,"value"=>$distance);
}

//byDistance
    {
        $vehicleGraph = [];
        foreach ($data as $index => $path) {
            $vehicleGraph[$path['from']][$path['to']] = $path['vehicle']['distance'];
        }

        $dijkstra = new dijkstra($vehicleGraph);
        $path = $dijkstra->shortestPaths('1', 'final')[0];

        $distance = 0;
        for ($i = 1; $i <= count($path); $i++) {
            $distance += $vehicleGraph[$path[$i - 1]][$path[$i]];
        }
        $byDistance = array("graph"=>$path,"value"=>$distance);
    }

    echo json_encode(array("price"=>$byPrice,"time"=>$byTime,"distance"=>$byDistance));

