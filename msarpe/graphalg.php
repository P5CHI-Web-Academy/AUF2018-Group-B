<?php
$string = file_get_contents("nw.json");
$json_a = json_decode($string, true);

echo $json_a($string);
