<?php
$login = $_POST['login'];
$password = $_POST['password'];

if ($login == null || $password == null) {
    print("Musisz podac login i haslo");
}

if ($login == "login1" && $password == "haslo1") {
    print("<body><h1>Gratuluje wygranej</h1>");
} else {
    print("Bledne dane");
}


?>