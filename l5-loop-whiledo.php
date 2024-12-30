<?php 
// start point
// end point
// increment / decrement




// while loop | Important
$n = 1;
while($n <= 10){
    echo $n ."<br>";
    $n++;
}

// do...while loop
$a = 15;
do {
    echo $a . "<br>";
    $a++;
} while ($a < 10);

// for loop
for($i =0; $i < 10; $i++){
    echo $i . "<br>";
}


// foreach | Importent

$colors = ["red", "yellow", "blue", "green"];

echo $colors[0] . "<br>";

// for examplae as arrey print
for($d = 0; $d < count($colors); $d++){
    echo "Color Name: " . $colors[$d] . "<br>";
}

// foreach example as arrey print

foreach($colors as $h){
    echo "Color: " . $h ."<br>";
}

?>