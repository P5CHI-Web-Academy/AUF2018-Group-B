<?php
include "dijkstra.php";
/**
 * decode json feile!
 */
$string = file_get_contents("nw.json");
$data = json_decode($string, true);


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
     //   var_dump($distance);
     //   print_r($path);

        $arr = $path;
        echo "Path:", json_encode($arr);

        $int = $distance;
        echo "Price:", json_encode($int);


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
      //  var_dump($distance);
      //  print_r($path);

        $arr = $path;
    echo "<br>";
        echo "Path:", json_encode($arr);

        $int = $distance;
        echo "Time:", json_encode($int);
}

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
  //  var_dump($distance);
 //   print_r($path);


    $arr = $path;
    echo "<br>";
    echo "Path:", json_encode($arr);

    $int = $distance;
    echo "Distance:", json_encode($int);
}
