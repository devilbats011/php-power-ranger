<?php

$profiles = file_get_contents(__DIR__.'/data/powerRangerProfiles.json');
$profiles = json_decode($profiles, true);
$index = mt_rand(0,count($profiles)-1);
print_r($profiles[$index]);
echo "<br><br>";
print_r($profiles[$index]["name"] . ", si ".$profiles[$index]["powerRangerName"]." dan Kuasanya adalah ".$profiles[$index]["ability"]);