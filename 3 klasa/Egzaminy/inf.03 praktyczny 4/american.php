<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <section class="right">
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
            <?php
                $conn = new mysqli("localhost", "root", "", "hodowla");

                $sql = "SELECT rasy.rasa FROM rasy;";
                $result = $conn -> query($sql);
                while ($row = $result -> fetch_array()) {
                    echo "<li>" . $row['rasa'] . "</li>";
                }
            ?>
        </ol>
    </section>
    <menu>
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa American</a>
        <a href="crested.php">Rasa Crested</a>
    </menu> 
    <div class="left">
        <img src="american.jpg" alt="Swinka morska rasy american">
        <?php
            $conn = new mysqli("localhost", "root", "", "hodowla");

            $sql = "SELECT swinki.data_ur, swinki.miot, rasy.rasa FROM swinki NATURAL JOIN rasy WHERE rasy.id = 6;";
            $result = $conn -> query($sql);
            while ($row = $result -> fetch_array()) {
                echo "<h2>Rasa: ". $row['rasa'] ."</h2>";
                echo "<p>Data urodzenia: ". $row['data_ur'] ."</p>";
                echo "<p>Oznaczenie miotu: ". $row['miot'] ."</p>";
            }
        ?>
        <hr>
        <h2>Świnki w tym miocie</h2>
        <?php
            $sql = "SELECT swinki.imie, swinki.cena, swinki.opis FROM swinki WHERE swinki.rasy_id = 6;";
            $result = $conn -> query($sql);
            while ($row = $result -> fetch_array()) {
                echo "<h3>". $row['imie']." - ".$row['cena']. "zł</h3>";
                echo "<p>". $row['opis'] ."</p>";
            }
        ?>
    </div>
    <footer>
        <p>Stronę wykonał: XYZ</p>
    </footer>
</body>
</html>