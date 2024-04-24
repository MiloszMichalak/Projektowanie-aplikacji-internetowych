<?php

$n = $_POST['liczba'];
$test = true;
for ($i = 2; $i < $n; $i++) {
    if ($n % $i == 0 ){
        $test = false;
        break;
    }
}

if ($test){
    print("Liczba pierwsza");
} else {
    print("Liczba zlozona");
}

?>
