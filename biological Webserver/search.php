<!DOCTYPE html>
<html>

<head>
    <title>Retrive Data</title>

    <style>
        table,th,td{
            border: 3px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>

    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="section1_tool">
      <br>
      <h1> Search Result </h1>
      <img src="images/logo.png" class="logo" />
    </div>
    <br>




    <?php
    include  "conncet.php";

    $tbl_name = $_POST["list"];
    $qry = $_POST["query"];



    $sql = "SELECT * FROM " . $tbl_name . " WHERE Organism = " . "\"" . $qry . "\"";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<center>";
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
    } else {
        echo "<h1> No Results </h1><br>";
    }
    ?>

</body>

</html>