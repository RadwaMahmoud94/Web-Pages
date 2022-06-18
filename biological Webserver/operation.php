
  <?php
  function insert()
  {
    include  "conncet.php";
    if (isset($_POST['submit'])) {
      $organism = $_POST['organism'];
      $organsimType = $_POST["organismtype"];
      $seq = $_POST['seq'];
      $accesion = $_POST['accession'];
      $strain = $_POST['strain'];
      $baseCount = $_POST['base'];
      $molType = $_POST['mol'];
  
  
      $sql = "INSERT INTO user (Accession, OrganismType, Organism, MolType, Strain, BaseCount, Seq)
            values ('$accesion', '$organsimType', '$organism', '$molType', '$strain', '$baseCount', '$seq')";
      $result = mysqli_query($con, $sql);
  
      if ($result) {
        echo "New Record Inserted Successfully <br>";
      } else {
        die(mysqli_error($con));
      }
    }
  }
  function update()
  {
    include  "conncet.php";
    if(isset($_POST["query"]))
    {
      $col = $_POST["col"];
      $id= $_POST["selectID"];
      $newvalue= $_POST["query"];

      $check="SELECT ID FROM user WHERE ID='$id'";
      if($con->query($check)->num_rows===1)
      {
        $sql = "UPDATE user SET ".$col."='$newvalue' WHERE ID="."$id";
        $con->query($sql);
        echo 'Specific row is updated successfully';    
      }
      else
          {
              echo "Update Failed";
          }
    }
  }

  function delete()
  {
    include  "conncet.php";
    if(isset($_POST["selectID"]))
    {
      
      $id= $_POST["selectID"];
      

      $check="SELECT ID FROM user WHERE ID='$id'";
      if($con->query($check)->num_rows===1)
      {
        $sql = "DELETE FROM user WHERE ID="."$id";
        $con->query($sql);
        echo 'Specific row is deleted successfully';    
      }
      else
          {
              echo "delete Failed";
          }
    }

  }

  ?>