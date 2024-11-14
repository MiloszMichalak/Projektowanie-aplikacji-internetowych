<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post">
        <label for="number">Podaj numbera</label>
        <input type="number" name="number" placeholder="Wpisz liczbe" id="number">
        <input type="submit" value="Wyślij">
    </form>
    <p><?php
        // Zadanie 1
        if (isset($_POST['number'])){
            $wiek = $_POST['number'];
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
        }
        ?></p>
</body>
</html>