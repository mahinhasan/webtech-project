


<html>
<head>
  <title>User</title>
</head>
     <body>
        <form method="post" action="ProfileCheck.php" enctype="">
          <fieldset>
            <legend style="text-align: center;"><h1>Welcome</h1></legend>
            <br><br><br>
                <table align="center">
          <tr>
            <td><h2 style="color:brown">
    <?php
    session_start();
     echo $_SESSION['login_user']['username'];?></h2>
            </td>
          </tr>
          <tr>
            <td align="center">
              <a href="logout.php">LOGOUT
                </a>
            </td>
          </tr>
            </table>
            <br><br><br>      
            </fieldset>
        </form>
    </body>
</html>

