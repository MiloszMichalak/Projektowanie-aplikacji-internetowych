<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post">
        <label for="liczba">Liczba</label>
        <input type="number" min="0" name="number" id="liczba">
        <button type="submit">Zatwierdz</button>
    </form>

    <p id="name">
        <?php
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            echo isPrime($number);
        }
        function isPrime($number)
        {
            if ($number < 2) { return "Nie"; }
            for ($i = 2; $i < $number; $i++) {
                if ($number % $i == 0){
                    return "Nie";
                }
            }
            return "Tak";
        }
        ?>
    </p>
</body>
</html>