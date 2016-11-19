<?php
// the following line are used to dump
// some data to a javascript-validated file.
header("Content-type: application/json");
array_map(function($data){include("data_generator/".$data.".php"); return false;},[
    'utility',
    'site_settings',
    'site_content'
]);
?>
