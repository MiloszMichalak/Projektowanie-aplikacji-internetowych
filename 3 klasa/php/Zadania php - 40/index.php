
<!-- cw1. Napisz skrypt, który umieści na stronie w znacznikach H1 napis: "PHP to język skryptowy wykonywany po
     stronie serwera". -->

<?php
echo "Zadanie 1";
echo ("<h1>PHP to język skryptowy wykonywany po stronie serwera</h1>");
?>

<!--cw2. Utwórz zmienną o nazwie $php i przypisz do niej napis: "$$$ PHP ćwiczenia $$$". Następnie, umieść zawartość
         tej zmiennej w tytule strony (znacznik TITLE) oraz w nagłówku H2 w widoku strony. -->

<?php
echo "<br> Zadanie 2";
$php = "$$$ PHP ćwiczenia $$$";

echo("<title> ". $php . "</title>");
echo("<h2>". $php ."</h2>");
?>

<!--
cw.3 Trzy zmienne zostały zdefiniowane:
$a = 97;
$b = 3.14;
$c = "PHP";
używając zmiennych $a, $b, $c napisz skrypt wyświetlający następujący tekst:
97 to liczba pierwsza
Liczba PI to: 3.14
PHP to język skryptowy -->

<?php
echo "<br> Zadanie 3 <br>";
$a = 97;
$b = 3.14;
$c = "PHP";

echo $a. "To liczba pierwsza<br>";
echo "Liczba PI to: ".$b."<br>";
echo $c. "To jezyk skryptowy<br>";

?>

<!--
cw.4 Wyświetl wynik dodawania, odejmowania, mnożenia, dzielenia, reszty z dzielenia i 
potęgowania dwóch
zmiennych:
$x = 10;
$y = 7; 
-->

<?php
    echo "<br> Zadanie 4<br>";
    $x = 10;
    $y = 7;
    echo "Dodawanie: ". ($x + $y). "<br>";
    echo "Odejmowanie: ". ($x - $y). "<br>";
    echo "Mnożenie: ". ($x * $y). "<br>";
    echo "Dzielenie: ". ($x / $y). "<br>";
    echo "Reszta z dzielenia: ". ($x % $y). "<br>";
    echo "Potęgowanie: ". ($x ** $y). "<br>";
?>

<!--
cw.5 Napisz skrypt, który zamienia między sobą wartości dwóch zmiennych:
$zmienna1 = 1;
$zmienna2 = 2;
-->

<?php
echo "<br> Zadanie 5<br>";
$zmienna1 = 1;
$zmienna2 = 2;

$zmienna1 ^= $zmienna2;
$zmienna2 ^= $zmienna1;
$zmienna1 ^= $zmienna2;
echo $zmienna1. "<br>";
echo $zmienna2;
?>

<!--
6. Napisz skrypt, który oblicza (i wyświetla) pole powierzchni i obwód prostokąta o bokach $a i $b:
$a = 10;
$b = 50;
-->
<?php
echo "<br><br> Zadanie 6<br>";
    $a = 10;
    $b = 50;
    echo "Pole powierzchni prostokątu wynosi: ".$a*$b."<br>";
    echo "Obwód prostokąta wynosi: " . $a*2 + $b*2 . "<br>";
?>
<!--2 metoda zeby wrzucic do paragrafow-->
<?php $a = 10; $b = 50 ?>
<p>Pole powierzchni prostokątu wynosi: <?=$a*$b?></p>
<p>Obwód prostokąta wynosi: <?=$a*2 + $b*2?></p>


<!--cw.7. Napisz skrypt, który sprawdza, czy zmienna $x jest większa od liczby 100 (użyj instrukcji if):
$x = 50;-->

<?php
    echo "<br> Zadanie 7<br>";
    $x = 50;
    if ($x > 100){
        echo "jest wieksza";
    }
    else{
        echo "nie jest wieksza";
    }
?>

<!--cw.8 Napisz skrypt, który sprawdza, czy zmienna $x jest liczbą trzycyfrową (użyj instrukcji if): -->

<?php
echo "<br><br> Zadanie 8<br>";
$x = 150; 
echo($x."<br>");
if($x>=100 && $x<=999)     
{
echo("To jest liczba trzycyfrowa");
}
else
{
echo("To nie jest liczba trzycyfrowa");
}
?>

<!--cw.9. Napisz skrypt, który sprawdza, czy zmienna $x jest mniejsza od 0 lub większa od 1000: -->
<!--$x = 15000; -->

<?php
echo "<br><br> Zadanie 9<br>";
$x = 15000; 
echo($x."<br>");
if($x<0 || $x>1000)     
{
echo("To jest liczba z przedziału");
}
else
{
echo("To nie jest liczba z przedziału");
}
?>

<!--cw.10. Napisz skrypt, który sprawdza, czy zmienna $x jest liczbą parzystą, czy nie: -->
<!--$x = 15; -->
<?php
echo "<br><br> Zadanie 10<br>";
$x = 15;
echo ($x % 2) == 0? "parzysta": "nieparzysta";
?>


<!--ćw.11. Napisz skrypt, który w zależności od wartości zmiennej $wiek umieszcza odpowiedni napis na stronie:-->
<!--• jeżeli $wiek mniejszy od 18, wyświetl: "Jeszcze nie możesz głosować"-->
<!--• jeżeli $wiek większy lub równy 18, wyświetl: "Możesz tylko głosować"-->
<!--• jeżeli $wiek większy lub równy 21, wyświetl: "Możesz głosować i kandydować do Sejmu"-->
<!--• jeżeli $wiek większy lub równy 30, wyświetl: "Możesz głosować i kandydować do Sejmu i Senatu"-->
<!--• jeżeli $wiek większy lub równy 35, wyświetl: "Możesz głosować, kandydować do Sejmu i Senatu oraz-->
<!--na Prezydenta"-->
<?php
    echo "<br><br> Zadanie 11<br>";
    $wiek = 28;
    switch ($wiek){
        case $wiek>=35:
            echo "Mozesz glosowac, kandydowac do Sejmu, Senatu i na Prezydenta";
            break;
        case $wiek>=30:
            echo "Mozesz glosowac, kandydowac do Sejmu i Senatu";
            break;
        case $wiek>=21:
            echo "Mozesz glosowac i kandydowac do Sejmu";
            break;
        case $wiek>=18:
            echo "Mozesz tylko glosowac";
            break;
        case $wiek<18:
            echo "Jeszcze nie mozesz glosowac";
            break;
        }
?>

<!--cw.12. Napisz skrypt, używając instrukcji switch, który umieszcza na stronie odpowiednią liczbę znaków + (plus) w-->
<!--zależności od wartości zmiennej $ile:-->
<!--• jeżeli $ile równe 1: wyświetl: +-->
<!--• jeżeli $ile równe 2: wyświetl: ++-->
<!--• jeżeli $ile równe 3: wyświetl: +++-->
<!--• …-->
<!--• jeżeli $ile równe 9: wyświetl: +++++++++-->
<!--• jeżeli $ile mniejsze od 1 lub większe od 9: wyświetl: "Wartość poza zakresem" -->

<?PHP
echo "<br><br> Zadanie 12<br>";
$ile = 5;

switch ($ile) {
    case 1:
        echo "+";
        break;
    case 2:
        echo "++";
        break;
    case 3:
        echo "+++";
        break;
    case 4:
        echo "++++";
        break;
    case 5:
        echo "+++++";
        break;
    case 6:
        echo "++++++";
        break;
    case 7:
        echo "+++++++";
        break;
    case 8:
        echo "++++++++";
        break;
    case 9:
        echo "+++++++++";
        break;
    default:
        echo "Wartość poza zakresem";
        break;
}
?>



<!--cw.13. Napisz skrypt, używając instrukcji switch, który umieszcza na stronie napis z numerem kwartału roku w-->
<!--zależności od zmiennej $miesicc:-->
<!--• jeżeli $miesiac równe 1,2, lub 3: wyświetl: "Kwartał I"-->
<!--• jeżeli $miesiac równe 4,5, lub 6: wyświetl: "Kwartał II"-->
<!--• jeżeli $miesiac równe 7,8, lub 9: wyświetl: "Kwartał III"-->
<!--• jeżeli $miesiac równe 10,11, lub 12: wyświetl: "Kwartał IV"-->
<!--• jeżeli $miesiac mniejsze od 1 lub większe od 12: wyświetl: "Błędny numer miesiąca"-->

<?php
echo "<br><br> Zadanie 13<br>";
$ile = 11;
switch ($ile) {
    case 1:
    case 2:
    case 3:
        echo "Kwartał I";
        break;

    case 4:
    case 5:
    case 6:
        echo "Kwartał II";
        break;

    case 7:
    case 8:
    case 9:
        echo "Kwartał III";
        break;

    case 10:
    case 11:
    case 12:
        echo "Kwartał IV";
        break;

    default:
        echo "Błędny numer miesiąca";
        break;
}
?>

<!--cw.14. Napisz skrypt, który sprawdza, która z wartości zmiennych $a, $b, $c jest największa:-->
<!--$a = 10;-->
<!--$b = 20;-->
<!--$c = 30;-->

<?php
echo "<br><br> Zadanie 14<br>";
$a = 10;
$b = 20;
$c = 30;
if ($a > $b && $a > $c)
{
    echo $a;
}
else if($b > $a && $b > $c)
{
    echo $b;
}
else if($c > $a && $c > $b)
{
    echo $c;
}
?>


<!--cw. 15. Wyświetl kolejno liczby od 5 do 15 (każda w nowej linii). Użyj pętli for.-->

<?php
echo "<br><br> Zadanie 15<br>";
for($i = 5;$i<16;$i++)
{
    echo $i."<br>";
}
?>

<!--cw. 16. Wyświetl kolejno liczby od 10 do 0 z krokiem 0,5. Użyj pętli for. -->
  
<?php
echo "<br><br> Zadanie 16<br>";
 for($i = 10; $i>=0 ;$i-=0.5)
  {
      echo $i."<br>";
  }
?>

<!--cw.17. Wyświetl: "PHP1 PHP2 PHP3 PHP4 PHP5 PHP6 PHP7 PHP8 PHP9 PHP10". Użyj pętli while.-->
<?php
echo "<br><br> Zadanie 17<br>";
$n = 0;
while ($n<10){
echo "PHP".$n." ";
$n++;
}
?>

<!--cw.18. Napisz skrypt z użyciem pętli do…while wyświetlający następującą listę:-->
<!--• Element nr 1-->
<!--• Element nr 2-->
<!--• Element nr 3-->
<!--• Element nr 4 -->

<?php
echo "<br><br> Zadanie 18<br>";
    $i = 0;
    do{
        $i++;
        echo "Element nr ".$i."<br>";
    } while($i<4);
?>

<!--
cw.19. Napisz skrypt sumujący wszystkie liczby nieparzyste z przedziału od 0 do 20. 
Użyj instrukcji continue.
-->

<?php
echo "<br><br> Zadanie 19<br>";
$sum = 0;
for($i = 0; $i <= 20; $i++){
    if ($i % 2) continue;
    $sum += $i;
}
echo $sum;
?>

<!--
   cw20. Napisz skypt wyswietlajacy: "1-2-3-4-5-6-7-8-9". Użyj dowolnej pętli i instrukcji break
-->

<?php
echo "<br><br> Zadanie 20<br>";
$i = 1;
while(true)
{
    if($i == 9){
        echo $i;
        break;
    };
    echo $i."-";
    $i++;
}
?>

<!--
 cw21. Napisz skrypt, obliczajacy silnie dowolnej liczby:
 $liczba = 10;
-->

<?php
    echo "<br><br> Zadanie 21<br>";
    function silniaReku($liczba){
        if($liczba == 0) return 1;
        else return $liczba * silniaReku($liczba - 1);
    }
    $liczba = 10;
    
    echo silniaReku($liczba)."<br>";
?>


<!--
    cw.22 Napisz skrypt z uzyciemm petli for wyswietlajacy 
    *
    **
    ***
    ****
    *****
-->

<?php
    echo "<br><br> Zadanie 21<br>";
    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }
?>

<!--
    cw.23 Nappisz skrypt z uzyciem petli for wsywietlajacy
    *
    **
    ***
    ****
    *****
    ****
    ***
    **
    *
-->

<?php
    echo "<br><br> Zadanie 23<br>";
    
    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }
    
    for($i = 4; $i >= 1; $i--){
        for($j = 1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    } 
?>

<!--
    cw 24. Napisz skrypt ktory wwysiwetli tabelke tabliczke mnozenia dla liczb od 1 do 10
-->

<?php
    echo "<br><br> Zadanie 24<br>";
    echo "<table>";
    for($i = 1; $i <= 10; $i++){
        echo "<tr>";
        for($j = 1; $j <= 10; $j++){
            echo "<td 
                    style='border-width: 2px; 
                    border-style: solid; 
                    border-color: black;>
                 ".$i*$j."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>

<!--
    cw 25. Utworz tablice trzyelementowa zawierajaca nastepujace wartosci: 
    "Niebieski"
    "Czerwony"
    "Zolty"
    Nastepnie uzyj jej do wyswietlenia ponizszej listy
-->

<?php
    echo "<br><br> Zadanie 25<br>";
    
    $colors = array("Niebieski", "Czerwony", "Zolty");
    echo "<ol>";
    foreach ($colors as $color){
        echo "<li>".$color."</li>";
    }
?>
