<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie PHP</title>
</head>
<body>
<h1>Tworzenie bazy danych</h1>
<form method="post">
    <label for="dbName">Nazwa bazy danych</label>
    <input type="text" id="dbName" name="dbName" required> &nbsp;
    <label for="tableName">Nazwa tabeli</label>
    <input type="text" id="tableName" name="tableName1" required><br><br>


    <label for="fieldName1">Pole w tabeli 1</label>
    <input type="text" id="fieldName1" name="fieldName1" required><br><br>
    <label for="fieldName2">Pole w tabeli 2</label>
    <input type="text" id="fieldName2" name="fieldName2" required><br><br>

    <button type="submit">Zatwierdz</button>
    <br>
    
    <?php
        $server = "localhost";
        $user = "root";
        $password = "";
        
        $con = new mysqli($server, $user, $password);
        
        if (isset($_POST["dbName"])) {
            if ($con->connect_error) {
                die("Polaczenie nieudane: ".$con->connect_error);
            }
            
            $db = $_POST["dbName"];
            
            $query = "CREATE DATABASE IF NOT EXISTS ".$db;
            if ($con->query($query) === TRUE) {
                echo "Baza stworzono prawidłowa"."<br>";
            } else {
                echo "Nie udalo sie stworzyc bazy danych: ".$con->error;
            }
            
            $con->query("USE ".$db);
            
            $sql = "CREATE TABLE 
                {$_POST['tableName1']} 
                ({$_POST['fieldName1']} INT NOT NULL, 
                {$_POST['fieldName2']} INT NOT NULL)";
            
            if ($con->query($sql) === TRUE) {
                echo "Tabela z polami stworzona pomyslnie";
            } else {
                echo "Blad przy tworzeniu tabel z polami: ".$con->error;
            }
            
            $con->close();
        }
        ?>
</form>
</body>
</html>


