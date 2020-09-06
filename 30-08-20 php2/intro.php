<?php

    $name = "Dana Cohen Levy";
    $names = explode (" ", $name);

    $firstName = array_shift($names);

    $i = 0;
    $lastName = "";
    while count($names) {
        $lastName .= $names[$i] . " ";
        $i++;
    }

?>