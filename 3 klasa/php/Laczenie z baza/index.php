<?php
$con = new mysqli("localhost", "root", "", "taryfikator");

$query = "SELECT * FROM kierowcy_txt";

$result = $con->query($query);
echo "<table>";
echo "<tr>
        <td>IdOsoby</td>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>NrRejestracyjny</td>
      </tr>";

while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['IdOsoby']."</td>";
    echo "<td>".$row['Imie']."</td>";
    echo "<td>".$row['Nazwisko']."</td>";
    echo "<td>".$row['NrRejestracyjny']."</td>";
    echo "</tr>";
}
echo "</table>";
