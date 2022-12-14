<html>

<head>

  <title>create plane</title>
  <script src="../assets/js/planing.js"></script>
</head>

<body>
  <?php include_once('navbar.php'); ?>
  <div class="plane">
    <div class="left">

    </div>
    <div class="right">
      <form name="myForm" action="../controllers/plane/createPlane.php" method="post" onsubmit="return validate();">
        <label for="title">Destination place : </label> <br>
        <input type="text" name="title" value="Enter Place"> <br>
  
        <label for="title">Location : </label><br>
        <input type="text" name="location" value="Enter Place" id="location"><br>

        <label for="title">Date : </label><br>
        <input type="date" name="date" value="Enter Place"><br>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</body>

</html>