<!DOCTYPE html>
<html>
  <head>
    <title>Insert Data</title>


    <style>
      label
      {
          font-size:35px;
      }
      input
      {
         font-size:25px;
      }
      label
      {
        background-color: rgb(54, 54, 117);
        color: white;
        width:50px;
        padding: 7px 10px;
        font-size: 20px;
        border-radius: 12px;
      }
      .buttom_insert
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
      textarea
      {
        position: relative;
        top:30px;
        width:300px;
        margin-left:20px; 
      }
      input
      {
        margin-left:20px;
      }

    </style>
    <link href="style.css" rel="stylesheet">

  </head>
  

<body  style="background-image:url(images/bg_update.webp);
  height:80%;
  background-repeat:no-repeat;
  background-size: cover;">

  <div class="section1_tool">
    <br>
    <h1> Insert New Gene</h1>
    <img src="images/logo.png" class="logo" />
  </div>
  <br>
  <form method="post" name="myform" onsubmit="return required()">

    <label for="accession"> Accession Number </label>
    <input type="text" name="accession" id="accession" required /><br><br>

    <label for="organismtype">Organism Type </label>
    <input type="text" name="organismtype" id="organismtype" required/><br><br>

    <label for="organism">Organism Name </label>
    <input type="text" name="organism" id="organism" required/><br><br>

    <label for="strain"> Strain </label>
    <input type="text" name="strain" id="strain" required/><br><br>

    <label for="base"> Base Count </label>
    <input type="base" name="base" id="base" required/><br><br>

    <label for="mol"> Mole Type </label>
    <input type="text" name="mol" id="mol" required/> <br><br>

    <label for="seq"> Sequence </label>
    <textarea id="seq" name="seq" rows="4" col="40" style="resize:none;" required> </textarea> <br><br><br><br><br>

    <center><input type="submit" name="submit" value="Insert New Gene" class="buttom_insert"/></center> <br>
  </form>

  <script>
  function required()
  {


    var letter=document.forms["myform"]["mol"].value;

    if (letter=="")
    {
        alert("Can't be empty , Must be filled out");
        return false;
    }
  }
  </script>

  <?php
        include "operation.php"; 
        insert();
  ?>
</body>
</html>