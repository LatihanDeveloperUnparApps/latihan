<?php
function lempar($name, $content){
    echo "var $name=" . json_encode($content) . ";" . PHP_EOL;
}
?>