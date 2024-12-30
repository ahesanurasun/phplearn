<?php 

// i. Find maximum number from an array
$numbers = [15, 30, 45, 55, 63, 5, 10, 84, 96];

$max = $numbers[0];
foreach ($numbers as $number){
    if ($number > $max){
        $max = $number;
    }
}

echo "Maximum number is: $max  <br>";

// ii. Find 2nd max number from an array

$max = $numbers[0];
$secondMax = $numbers[0];

foreach($numbers as $number){
    if($number > $max){
        $secondMax = $max;
        $max = $number;
    }elseif($number > $secondMax && $number != $max ){
        $secondMax =$number;
    }
}
echo "2nd Maximum number is: $secondMax  <br>";


// iii. Sort array from min to max

sort($numbers);
echo "<pre>";
print_r($numbers);
echo "<pre>";

// iv. Calculate average number of an array
$sum = 0;
foreach($numbers as $number){
    $sum += $number;
}

$avrage = $sum / count($numbers);
echo "Average number is: $avrage <br>";


// v. Merging 2 different types of array together
$numbers = [15, 30, 45, 55, 63, 5, 10, 5, 15, 63, 84, 96];
$name = ["kamal", "jamal", "rohit", "rahim", "karim"];

$margeArrey = array_merge($numbers, $name);

echo "<pre>";
print_r($margeArrey);
echo "<pre>";

// vi. Search data from an array

$search =15;
// $newSearch=  array_search($search, $numbers);

// echo ($newSearch);



$found = false;
foreach ($numbers as $number){
    if($number == $search){
        $found = true;
        break;
    }
}
if ($found){
    echo "Data found: $search <br>";
}else{
    echo "Data not found <br>";
}

// vii. Show array data in lowercase and uppercase

foreach($name as $newName){
    echo strtolower($newName) . "<br>";
}
    
foreach($name as $newName){
    echo strtoupper($newName) . "<br>";
}
    
// viii. Get unique values

$uniqueNumbers = array_unique($numbers);
echo "<pre>";
print_r($uniqueNumbers);
echo "</pre>";

// xii. Merge 2 comma separated lists with unique value only
$numbers1 = "15, 30, 45, 55, 63, 5, 10, 5, 15, 63, 84, 96";
$numbers2 = "15, 30, 45, 55, 63, 5, 10, 5, 15, 63, 84, 96";

$numbers1 = explode(", ", $numbers1);
$numbers2 = explode(", ", $numbers2);

$mergedarray = array_merge($numbers1, $numbers2);

echo "<pre>";
print_r($mergedarray);
echo "</pre>";

// xiii. Difference between 2 multi-dimensional arrays
$personDeatial1 = [
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
$personDeatial2 =[
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

$diffArray = array_udiff($personDeatial1, $personDeatial2, function($a, $b){
    return $a['name'] <=> $b['name'];
});

echo "<pre>";
print_r($diffArray);
echo "</pre>";

// xiv. Check if all values are string or not
$name = ["kamal", "jamal", "rohit", "rahim", "karim"];

$allstring = true;
foreach($name as $newName){
    if(!is_string($newName)){
        $allstring = false;
        break;
    }
}

if($allstring){
    echo "All values are string <br>";
}

// xv. Union of 2 arrays
$numbers1 = [15, 30, 45, 55, 63, 5, 10, 5, 15, 63, 84, 96];
$numbers2 = [15, 30, 45, 55, 63, 5, 10, 5, 15, 63, 84, 96];

$unionArray = array_unique(array_merge($numbers1, $numbers2));

echo "<pre>";   
print_r($unionArray);
echo "</pre>";

// xvi. Filter out array data with some specific keys
$personDeatial1 = [
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

$filteredArray = array_filter($personDeatial1, function($person){
    return $person['isMarried'];
}); 

echo "<pre>";
print_r($filteredArray);
echo "</pre>";



// xvii.Filter a multi-dimensional array.
$personDeatial1 = [
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

$filteredArray = array_filter($personDeatial1, function($person){
    return $person['isMarried'];
}); 

echo "<pre>";
print_r($filteredArray);
echo "</pre>";


// xviii. Remove all white spaces from an array
$personDeatial1 = [
    "Ahesanur",
    "Rahul",
    "Rashed",
    "Muntasir"
];

foreach($personDeatial1 as $key => $value){
    $personDeatial1[$key] = trim($value);
}

echo "<pre>";
print_r($personDeatial1);   
echo "</pre>";

// Combine 2 array and use one array data as keys and others as values

$key = ["name", "age", "city", "isMarried"];
$value = ["Ahesanur", 26, "Arambagh", false];

$combinedArray = array_combine($key, $value);

echo "<pre>";
print_r($combinedArray);
echo "</pre>";

// xx. Convert string to array 
$names1 = ["kamal", "jamal", "rohit", "rahim", "karim"];

// Convert array to string (separate names by comma)
$namesString = implode(", ", $names1);

// Now explode the string back into an array
$namesArray = explode(", ", $namesString);

echo "<pre>";
print_r($namesArray);
echo "</pre>";











?>
<?php

?>
