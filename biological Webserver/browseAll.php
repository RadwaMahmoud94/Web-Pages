<!DOCTYPE html>
<html>

<head>
    <title>Display All Databases </title>

    <style>
        table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>

    <link href="style.css" rel="stylesheet">
</head>

<body style="background-image:url(images/bg_update.webp);
  height:80%;
  background-repeat:no-repeat;
  background-size: cover;">
    <div class="section1_tool">
        <br>
        <h1> Display Result </h1>
        <img src="images/logo.png" class="logo" />
    </div>
    <br>


    <?php
    include  "conncet.php";

    $tble = ["bacteria", "virus", "archaea", "user"];
   

    foreach ($tble as $key => $value)
     {
        $sql = "SELECT * FROM " . $value;
        if ($value === "user")
         {
            $result = $con->query($sql);

            if ($result->num_rows > 0) 
            {
                $p = strtoupper($value);
                echo "<center>";
                echo "<h1> $p DATABASE" . "</h1> <br>";

                echo "<table>
                        <tr>
                            <th>ID</th>
                            <th>Gene Acession </th>
                            <th>Organism Type</th>
                            <th>Organism</th>
                            <th>Strain</th>
                            <th>Mole Type</th>
                            <th>Base Count</th>
                        </tr>";
                while ($row = $result->fetch_assoc()) 
                {
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
            }
        }
            else 
            {
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    $p = strtoupper($value);
                    echo "<center>";
                    echo "<h1> $p DATABASE" . "</h1> <br>";

                    echo "<table>
                        <tr>
                            <th>ID</th>
                            <th>Gene Acession </th>
                            <th>Organism</th>
                            <th>Strain</th>
                            <th>Mole Type</th>
                            <th>Base Count</th>
                        </tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>" . $row["ID"] . "</td>
                        <td>" . $row["Accession"] . "</td>
                        <td>" . $row["Organism"] . "</td>
                        <td>" . $row["Strain"] . "</td>
                        <td>" . $row["MolType"] . "</td>
                        <td>" . $row["BaseCount"] . "</td>
                    </tr>";
                    }
                    echo "</table>";
                    echo "</center>";
                }
            }
    }
    ?>

</body>

</html>