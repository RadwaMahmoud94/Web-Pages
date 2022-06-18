<!DOCTYPE html>
<html>

<head>
    <title>Update Data</title>

    <style>
    label {
        font-size: 35px;
    }

    input {
        font-size: 25px;
    }
    select
    {
        font-size:25px;
    }
 
    .select_update
        {
            font-size: large;
            font-weight: bold;
            background-color: rgb(54, 54, 117);
            color: white;
            padding: 5px 20px;
            font-size: 20px;
            cursor:pointer;
            border-radius: 4px;
        }
        .button_update,label
            {
            background-color: rgb(54, 54, 117);
            color: white;
            padding: 10px 25px;
            font-size: 20px;
            cursor:pointer;
            border-radius: 12px;
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
        <h1> Update Database</h1>
        <img src="images/logo.png" class="logo" />
    </div>
    <br>
    <?php include "user_table.php"; ?>
   


    <form method="POST">
        <label for="selectID"> ID </label>
        <input type="text" name="selectID" id="selectID" placeholder="Enter ID from above table"> <br><br>
        <select name="col" id="col" class="select_update">
            <option value="Accession">Accession</option>
            <option value="OrganismType">Organism Type</option>
            <option value="Organism">Organism Name</option>
            <option value="Strain">Strain</option>
            <option value="BaseCount">Base Count</option>
            <option value="MolType">Mole Type</option>
        </select>
        <input type="text" name="query" placeholder="Enter new value" /><br><br>
        <center><input type="submit" value="update" class="button_update"/></center>
    </form>
          
    <?php
                include "operation.php";
                update();
    ?>
</body>

</html>