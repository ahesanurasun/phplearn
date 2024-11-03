<?php 
// $num1 = 5;
// $num2 = 10;
// $operation = 'add';
// switch($num1, $num2){
//     case 'add':
//     echo $num1 + $num2;
//     break;
//     case 'subtract':
//         echo $num1 - $num2;
//     break;
//     case 'multiply':
//         echo $num1 * $num2;
//     break;
//     case 'divide':
//         echo $num1 / $num2;
//     default:
// }



// Grade Calculator
function calculateGrade($score) {
 switch(true){
    case $score >= 90:
    echo "Your Grade: A";
    case $score >=80:
        echo "Your Grade: B";
    case $score >=70:
        echo "Your Grade: C";
    case $score >=60:
        echo "Your Grade: D";
    default;
        echo "You are Fail";

 }
}
echo calculateGrade(54) . "<br>"; 

// Vowel or Consonant Checker
function checkVowelOrConsonant($char){
    switch(strtolower($char)){
        case 'a':
        case 'e':
        case 'i':
        case 'u':
        case 'o':
            return "This is Vowel";
        default:
            return "This is Consonant";
    }
}
echo checkVowelOrConsonant('a') . "<br>";

// Day of the Week Display
$numOfDay = 6;
function getDeyOfWeek($numOfDay){
    switch ($numOfDay){
        case 1:
            return  "Sunday";
        case 2:
            return  "Monday";
        case 3:
            return  "Tuesday";
        case 4:
            return  "Wednesday";
        case 5:
            return  "Thursday";
        case 6:
            return  "Friday";
        case 7:
            return  "Saturday";
        default:
            return  "Invalid day number.";
    }
}
echo getDeyOfWeek($numOfDay) . "<br>";

// Age Group Categorizer
/* Write a PHP function that categorizes a person based on age.
Categories:Child: 0-12 years, Teen: 13-17 years, Adult: 18-64 years, Senior: 65 years and above */

$age = 68;
function getAgeCategory($age){
    if($age >= 0 && $age <= 12){
        return "You are Child";
    }elseif($age >= 13 && $age<= 17){
        return "You are Teen";
    }elseif($age >= 18 && $age<= 64){
        return " Your are Adult";
    }elseif($age >= 65){
        return "You are Senior";
    }else{
        return " Pls, Enter valid Age.";
    }
}
echo getAgeCategory($age);


/* Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00 tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit) */

$unit = 50;

if($unit > 250) {
    echo "Electricity rate is 20 Taka <br/>";
} elseif ($unit >= 250) {
    echo "Electricity rate is 15 Taka <br/>";
} elseif ($unit >= 150) {
    echo "Electricity rate is 10 Taka <br/>";
} elseif ($unit >= 50) {
    echo "Electricity rate is 5 Taka <br/>";
} else {
    echo "Rate not found";
}

?>