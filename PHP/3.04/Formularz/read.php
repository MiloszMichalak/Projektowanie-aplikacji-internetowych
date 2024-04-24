<?php
$a = $_POST['liczba1'];
$b = $_POST['liczba2'];
$c = $_POST['liczba3'];

// skrypt na obliczanie delty
$delta = pow($b, 2) - 4 * $a * $c;
if ($delta < 0){
    print("Rownanie nie ma pierwiastkow rzeczywistych");
} elseif ($delta == 0){
    $x1 = (-$b) / (2 * $a);
    print("Rownanie ma tylko jeden pierwiastek rzeczywisty i jest to $x1");
} else {
    $x1 = (-$b - sqrt($delta)) / (2 * $a);
    $x2 = (-$b + sqrt($delta)) / (2 * $a);
    print("Rownanie ma dwa pierwiastki rzeczywiste: $x1 i $x2");
}
?>