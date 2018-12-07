<?php
include "dijkstra.php";
/**
 * Decode JSON feile!
 */
$string = file_get_contents("nw.json");
$data = json_decode($string, true);



   foreach ($data as $index => $path){
            ($path ["from"] . $path ["to"]);
            ($path ["to"] . $path ["from"]);

         $distnace = [$path ["from"]] [$path ["to"]] = $path ["vehicle"];

   }






/*    {
        foreach ($graph as $path ){
            $this -> vehicle [$path ["from"]] [$path ["to"]] = $path ["vehicle"];
            $this -> vehicle [$path ["to"]] [$path ["from"]] = $path ["vehicle"];
        }
        $this->graph = $graph;
    }**/
