<?php

// comments
/*
 line A
 line B
 line C 
 */

$name = "Dana Cohen Levy";
$names = explode(" ", $name);

$firstName = array_shift($names);

#1
$lastName = $names[0] . " " . $names[1];

#2
$lastName = "";
for($i = 0 ; $i < count($names) ; $i++) {
    // $lastName .= " " . $names[$i];
    $lastName .= $names[$i] . " ";
}

#2.1
$i = 0;
$lastName = "";
while($i < count($names)) {
    $lastName .= $names[$i] . " ";
    $i++;
}

// #3 
$lastName = implode(" ", $names);

$colors = array(
    "Yellow" => "#FFFF00",
    "Green"  => "#006400"
);

$colors["Red"] = "#FF0000";

// echo $colors["Green"];

foreach($colors as $color => $hex) {
    echo "The color " . $color . " Hex is: " . $hex . "\n";
}

// Object
class Greeting {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo "Hello " . $this->name;
    } 
}

$yehuda = new Greeting("Yehuda");
$yehuda->sayHello();
echo $yehuda->name;

$isOk = true;

if($isOk) {

} else if(!$isOk) {

} elseif($isOk) {

} else {

}


?>