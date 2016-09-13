<?php

function preprint($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function clearString($string){
    return trim(htmlentities($string));
}