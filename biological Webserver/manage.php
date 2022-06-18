<!DOCTYPE html>
<html>
  <head>
    <title>Manage Data</title>
  </head>
  <link href="style.css" rel="stylesheet">

    <body>
            <div class="section1_tool">
            <br>
                <h1> Edit Database</h1>
                <img src="logo.png" class="logo" />
            </div>
        <br>
    
    
    <div class="section3">
      <form action="insert.php" target="_self">
        <img src="images/insert.jpg" class="sequence" /> <br /><br /><br />
        <input type="submit" value="insert" class="tools" />
      </form>
      <br />
    </div>

    <form action="update.php" target="_self">
      <div class="section4">
        <img src="images/update.jpg" class="search" />
        <input type="submit" value="update" class="display" />
      </div>
    </form>

    <form action="delete.php" target="_self">
      <div class="section5">
        <img src="images/delete.jpg" class="database" />
        <input type="submit" value="delete" class="insert" />
      </div>
    </form>


    </body>
</html>