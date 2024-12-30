<?php 
// Regular Expression

//  preg_match(), preg_match_all(), preg_replace(), preg_split(), preg_grep()

/**
 * i - Case insensitive
 * ^ - Start of a string
 * $ - End of a string
 * . - Any character
 * * - Zero or more
 * + - One or more
 * ? - Zero or one
 * ?=. - Match any single character
 * [] - Character class
 * \ - Escape character
 */




// email validation with preg_match()
$email = "ahesanurasun@gmail.com";
$pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/i";
if(preg_match($pattern, $email)){
    echo " Valid '$email' address. <br>";
} else{
    echo " Invalid '$email' address. <br>";
}
// Hard Password Validation with preg_match()
$password = "Ahesanur12@";
$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$%^&=+]).{8,20}$/";
if(preg_match($pattern, $password)){
    echo "Your Password is Vaild <br>";
}else{
    echo "Your Password is invaild <br>";
}

/**
 * (?=.*[A-Z]) - Must contain at least one uppercase letter
 * (?=.*[a-z]) - Must contain at least one lowercase letter
 * (?=.*[0-9]) - Must contain at least one digit
 * (?=.*[@#$%^&=+]) - Must contain at least one special character
 * .{8,20} - Password length must be between 8 and 20 characters
 */

?>