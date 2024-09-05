<?php

    $a = 2;
    $b = 3;
    $c = 4;
    print("<b> A </b> ma wartosc $a <br>");
    print("<b> B </b> ma wartosc $b <br>");
    print("<b> C </b> ma wartosc $c <br>");
    if ($a > $b && $a > $c){
        print("Wieksza liczbe ma wartosc a, jego wartosc to $a");
    } elseif ($b > $a && $b > $c){
        print("Wieksza liczbe ma wartosc b, jego wartosc to $b");
    } elseif ($c > $a && $c > $b) {
        print("Najwieksza liczba to c, jego wartosc to $c");
    } else {
        print("Liczby sa rowne, wartosci to $a");
    }
?>