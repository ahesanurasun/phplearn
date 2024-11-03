<?php

// Electric bill calculation
function calculateElectricBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 150) {
        $bill = (50 * 3.50) + (($units - 50) * 4.00);
    } elseif ($units <= 250) {
        $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
    } else {
        $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
    }

    return $bill;
}

$units = 50;
echo "The electric bill for $units units is: " . calculateElectricBill($units) . " Tk . <br>";

// A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)

function calculator($num1, $num2, $operation) {
    $result = 0;

    switch($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;

        case 'subtract':
            $result = $num1 - $num2;
            break;

        case 'multiply':
            $result = $num1 * $num2;
            break;

        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                return "Error: Division by zero is not allowed.";
            }
            break;

        default:
            return "Invalid operation. Please choose add, subtract, multiply, or divide.";
    }

    return "The result of $operation on $num1 and $num2 is: $result";
}

$num1 = 10;
$num2 = 5;
$operation = 'add'; 
echo calculator($num1, $num2, $operation) . "<br>";

// Check if a person is eligible to vote by age
$age = 20;
if($age>=18){
    echo "You are eligible to vote<br>";
}else{
    echo "You are not eligible to vote<br>";
}
// Check if a person is eligible for marriage in BD by gender.
function checkMarriageEligibility($age, $gender) {
    $gender = strtolower($gender);
    switch($gender) {
        case 'male':
            if ($age >= 21) {
                return "Eligible for marriage.";
            } else {
                return "Not eligible for marriage. Minimum age is 21 for males.";
            }

        case 'female':
            if ($age >= 18) {
                return "Eligible for marriage.";
            } else {
                return "Not eligible for marriage. Minimum age is 18 for females.";
            }
        default:
            return "Invalid gender input. Please enter 'male' or 'female'. ";
    }
}

$age = 20;
$gender = 'male'; 
echo checkMarriageEligibility($age, $gender) ."<br>";


// Check if number is odd or even
$number = 19;
if($number % 2 == 0){
    echo "$number is Even.<br>";
}else{
    echo "$number is Odd.<br>";
}
// Check if number is positive or negetive
$mynNumber = -3;
if($mynNumber > 0){
    echo "$mynNumber is Positive<br>";
}else{
    echo "$mynNumber is Negetive<br>";
}
// String
$asun = "Hello World";
var_dump($asun);
echo "<br>";
// Integar
$myNumber = 9547;
var_dump($myNumber);
// Check if a person is eligible for marriage in BD by gender.

$age = 20;
$gender = 'male';

function checkMarriageEligiblety($age, $gender){
    if($gender === 'male' && $age >=21){
        echo "You are Eligible for Marriage.";
    }elseif($gender === 'female' && $age >=18){
        echo "You are Eligible for Marriage.";
    }else{
        echo "You are not Eligible for Marriage.";
    }
}
echo checkMarriageEligiblety($age, $gender);
?>
