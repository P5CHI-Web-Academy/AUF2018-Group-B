<?php

include "dijkstra.php";
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Accept: /');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: access-control-allow-origin,content-type");
error_reporting(0);

$string = file_get_contents('php://input');
$jsonData = json_decode($string, true);

$byPrice;
$byTime;
$byDistance;

function resolveGraph($graphType,$data){
    $newGraph = [];
    foreach ($data as $index => $path) {
        $newGraph[$path['from']][$path['to']] = $path['vehicle'][$graphType];
    }

    $dijkstra = new dijkstra($newGraph);
    $path = $dijkstra->shortestPaths('1', 'final')[0];

    $distance = 0;
    for ($i = 1; $i <= count($path); $i++) {
        $distance += $newGraph[$path[$i - 1]][$path[$i]];
    }

    return array("graph" => $path, "value" => $distance);
}


$byPrice = resolveGraph('price',$jsonData);
$byTime = resolveGraph('time',$jsonData);
$byDistance = resolveGraph('distance',$jsonData);

echo json_encode(array("price"=>$byPrice,"time"=>$byTime,"distance"=>$byDistance));