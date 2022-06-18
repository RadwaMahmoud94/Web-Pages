<!DOCTYPE html>
<html>

<head>
    <title>Delete Data</title>
    <style>
 label {
        font-size: 35px;
    }

    input {
        font-size: 25px;
        margin-left:20px;
    }
 
        .button_delete,label
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
        <h1> Delete from Database</h1>
        <img src="images/logo.png" class="logo" />
    </div>
    <br>
    <?php include "user_table.php"; ?>


    <form method="POST">
        <label for="selectID"> ID </label>
        <input type="text" name="selectID" id="selectID" placeholder="Enter ID to delete row"><br><br>
        <center><input type="submit" value="delete" class="button_delete" /></center>
    </form>
          
    <?php
                include "operation.php";
                delete();
    ?>
</body>

</html>