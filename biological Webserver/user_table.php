<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>

</head>

<body>
    <?php
    include  "conncet.php";

    $tble = "user";

        $sql = "SELECT * FROM " . $tble;

        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $p = strtoupper($tble);
            echo "<center>";
            echo "<h1> $p DATABASE" . "</h1> <br>";

            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Acession </th>
                        <th>Organism Type</th>
                        <th>Organism Name</th>
                        <th>Strain</th>
                        <th>Mole Type</th>
                        <th>Base Count</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["ID"] . "</td>
                    <td>" . $row["Accession"] . "</td>
                    <td>" . $row["OrganismType"] . "</td>
                    <td>" . $row["Organism"] . "</td>
                    <td>" . $row["Strain"] . "</td>
                    <td>" . $row["MolType"] . "</td>
                    <td>" . $row["BaseCount"] . "</td>
                </tr>";
            }
            echo "</table>";
            echo "</center>";
        } else {
            echo "No Results";
        }
    
    ?>

</body>

</html>