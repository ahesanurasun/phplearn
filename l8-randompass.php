<?php 
$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$lowercase = 'abcdefghijklmnopqrstuvwxyz';
$number = '0123456789';
$special = '@#%&*';


$shuffledUppercase = 






$suffledUppercase = str_shuffle($uppercase);
$getFirstTwouppercase = substr($suffledUppercase, 0, 2);


$suffledLowercase = str_shuffle($lowercase);
$getsuffledLowercase = substr($suffledLowercase, 0, 2);


$suffledNumber = str_shuffle($number);
$getsuffledNumber = substr($suffledNumber, 0, 2);

$suffledSpecial = str_shuffle($special);
$getsuffledSpecial = substr($suffledSpecial, 0, 2);

$randomPass= $getFirstTwouppercase . $getsuffledLowercase . $getsuffledNumber . $getsuffledSpecial . "<br>";

echo "Random Password:  $randomPass <br>";




// unique Random Password
$uniqueRandomPassword = uniqid();
echo "Unique random Password: $uniqueRandomPassword <br>";

// Random Numbar 
$randomNumber =rand(1000, 9999);
echo "Random Number: $randomNumber <br>";
?>

<button id="reloadBtn">Reload</button>


<script>
    const reloadBtn = document.getElementById('reloadBtn');
    const reloadfunc = () => {
        location.reload();
    }

    reloadBtn.addEventListener('click', reloadfunc);
</script>