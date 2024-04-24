<?php

$zmienna = "tak";
print(isset($zmienna));

print "<br>";

echo date('d.m.F.r');
print "<br>";
echo date("g.G.s.i.l.Y");

print "<br>";

$data = getdate();
//$data['hours'];
//foreach ($data as $item){
//    print($item."<br>");
//}

print "<br>";

// sekundy minelo od 1 stycznie 1970
echo time();

print "<br>";

echo strlen("kot");

print "<br>";

echo substr(" ala ma kot",4,3);

print "<br>";

echo nl2br("kot.
jedna spacja.
druga spacja");

print "<br>";

// jak sie wysle to zwraca true
$wyslany = mail("adres", "temat", "tresc", "naglowek");

print "<br>";

print strstr("ala ma kota", "ma");

print "<br>";

print str_replace("ala", "tomek", "ala ma kota");

print "<br>";

// ucina spacje, lewo to ltrim, prawo to rtrim
print trim("        debil    ");

print "<br>";

print ucfirst("ala");

print "<br>";

print strtoupper("ala");

print "<br>";

print strtolower("ALa");

print "<br>";

echo wordwrap("jakis tam tekst ale no on normalnie dziala tego typu i mozna powiedziec", 30, "<br>\n");

print "<br>";



?>

