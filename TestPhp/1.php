<?php


function getsearch($str) {
    
    header('Location: https://www.google.co.il/search?q=' . $str);
    exit;
    }
    getsearch('yes') ;
?>