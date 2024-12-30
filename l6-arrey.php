<?php 


// index arrey
$studentinfo = ["Ahesanur", "Male", "Hooghly", "9547274602"];

echo "<pre>";
print_r ($studentinfo);
echo "</pre>";

echo count($studentinfo) . "<br>";

for ($i = 0; $i< count($studentinfo); $i++){
    echo $studentinfo[$i] . "<br>";
}

foreach($studentinfo as $h){
    echo $h . "<br>";
}

// Associative Array
$studentInfo =[
    "name" => "Ahesanur",
    "gender" => "Male",
    "address" => "Hooghly",
    "number" => "9547274602"
];

foreach ($studentInfo as $key => $info){
    echo ucfirst($key)  . " : " . $info ."<br>";
}


// Multi-dimensional array
$personDeatial = [
    [
        "name" => "Ahesanur",
        "age" => 26,
        "city" => "Arambagh",
        "isMarried" => false
    ],
    [
        "name" => "Rahul",
        "age" => 24,
        "city" => "kolkata",
        "isMarried" => true
    ],
    [
        "name" => "Rashed",
        "age" => 25,
        "city" => "Kanchra",
        "isMarried" => false
    ],
    [
        "name" => "Muntasir",
        "age" => 27,
        "city" => "Maldha",
        "isMarried" => false
    ]
];

echo "<pre>";
print_r($personDeatial);
echo "<pre>";


foreach($personDeatial as $person){
    foreach($person as $key => $value){
        echo ucfirst($key) . " : " . $value . "<br>";
    }
}


?>