<?php
include "dijkstra.php";
/**
 * decode json feile!
 */
$string = file_get_contents("nw.json");
$data = json_decode($string, true);




/*$graph1 = array(
    'A' => array('B' => 9, 'D' => 14, 'F' => 7),
    'B' => array('A' => 9, 'C' => 11, 'D' => 2, 'F' => 10),
    'C' => array('B' => 11, 'E' => 6, 'F' => 15),
    'D' => array('A' => 14, 'B' => 2, 'E' => 9),
    'E' => array('C' => 6, 'D' => 9),
    'F' => array('A' => 7, 'B' => 10, 'C' => 15),
);
*/

//$newArray = array('#1'=>9);

//echo json_encode($graph1);




foreach ($data as $index => $path) {
    ($path ["from"] . "-" . $path ["to"] . "\r\n");
   // ($path ["to"] . $path ["from"]);

    $distance = $path(
         $path["from"]["to"] = (["vehicle"] ["price"])
    );
}


$dijkstra = new dijkstra;
echo $dijkstra ->shortestPaths($distance);


/*
$dijkstra = new Dijkstra($path);
Dijkstra::shortestPaths($path["from"]["to"]);







//echo $distance;


/*     $arr = array();

    array_push($arr,array(
        $path['from'] => IterateThrow($data,$path['from'],'price')
    ));

}

function IterateThrow($originalData,$keytoSearch,$valueToSearch){
    foreach ($originalData as $index => $path) {
        if ($path['from'] === $keytoSearch) {
            return array($path['to']=>$path['vehicle'][$valueToSearch]);
        }

    }

    echo json_encode($arr);
}


//        if (!array_key_exists( $path['from'],$newArray)){
//            echo !array_key_exists( $path['from'],$newArray);
//            array_push($newArray,$path['from']);
//        }
//        echo $path["from"];



//        array_push($newArray,$arr);


//       echo json_encode($newArray);

    /**
     * @var integer[][]
     */

/*        $distance = $path(
            $path (["vehicle"]["price"])
        );

        $distance = $path(
            $path (["vehicle"]["time"])
        );

        $distance = $path(
            $path (["vehicle"]["distance"])
        );
    }
    echo $this->distance;
//    $instance = new Dijkstra($distance);
//    echo $instance->shortestPaths();


/*    {
        foreach ($graph as $path ){
            $this -> vehicle [$path ["from"]] [$path ["to"]] = $path ["vehicle"];
            $this -> vehicle [$path ["to"]] [$path ["from"]] = $path ["vehicle"];
        }
        $this->graph = $graph;
    }**/