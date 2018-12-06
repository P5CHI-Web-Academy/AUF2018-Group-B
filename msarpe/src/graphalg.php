<?php
$string = file_get_contents("nw.json");
$data = json_decode($string, true);

foreach ($data as $index=>$path) {
    echo($path ["from"]. "-". $path ["to"] ."\n");
    echo($path['vehicle']['distance'] ."\n");
    echo($path['vehicle']['price'] ."\n");
    echo($path['vehicle']['time'] ."\n"."\r\n");
}

