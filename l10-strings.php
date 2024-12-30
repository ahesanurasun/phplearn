<?php 
// Concateating Strings
$firstName = "Ahesanur";
$lastName ="Rahaman";

$fullName =  $firstName . " " . $lastName;
echo $fullName . "<br>";

// String Length    
$fullName =  "Ahesanur Rahman";
echo strlen($fullName) . "<br>";

// String Functions
$fullName =  "Ahesanur Rahman";
echo strtolower($fullName) . "<br>";
echo strtoupper($fullName) . "<br>";
echo ucfirst($fullName) . "<br>";
echo ucwords($fullName) . "<br>";

// String Replace
$fullName =  "Ahesanur Rahman";
echo str_replace("Rahman", "Rahaman", $fullName) . "<br>";  

// String Search
$fullName =  "Ahesanur Rahman";
echo strpos($fullName, "Rahman") . "<br>";

// String Substring
$fullName =  "Ahesanur Rahman";
echo substr($fullName, 0, 5) . "<br>";

// String Split
$fullName =  "Ahesanur Rahman";

echo "<pre>";
print_r(explode(" ", $fullName));
echo "</pre>";







?>