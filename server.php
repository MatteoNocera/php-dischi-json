<?php

$albums_json = file_get_contents('albums.json');

$albums = json_decode($albums_json, true);

//var_dump($albums);

echo $albums_json;
