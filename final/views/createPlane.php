<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/createPlane.css">
    <script src="../assets/js/planing.js"></script>

    <title>planing</title>
</head>
<body>
    <?php include('navbar.php'); ?>
<div class="container">
 
  <form id="form">
    <div class="social">
      <div class="title">Get Started</div>

    </div>

    <!-- /** 
          * ! user name Input here
         **/ -->

    <div>
      <label for="username">User Name</label>
      <i class="fas fa-user"></i>
      <input type="text" name="username" id="username" placeholder="Joy Shaheb" />
      <i class="fas fa-exclamation-circle failure-icon"></i>
      <i class="far fa-check-circle success-icon"></i>
      <div class="error"></div>
    </div>

    <!-- /** 
          * ! Email Input here
         **/ -->

    <div>
      <label for="email">Email</label>
      <i class="far fa-envelope"></i>
      <input type="email" name="email" id="email" placeholder="abc@gmail.com" />
      <i class="fas fa-exclamation-circle failure-icon"></i>
      <i class="far fa-check-circle success-icon"></i>
      <div class="error"></div>
    </div>

    <!-- /** 
          * ! Password Input here
         **/ -->

    <div>
      <label for="password">Password</label>
      <i class="fas fa-lock"></i>
      <input type="password" name="password" id="password" placeholder="Password here" />
      <i class="fas fa-exclamation-circle failure-icon"></i>
      <i class="far fa-check-circle success-icon"></i>
      <div class="error"></div>
    </div>

    <button type="submit" id="submit">Submit</button>
  </form>
</div>
</body>
</html>