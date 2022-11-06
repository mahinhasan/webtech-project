<html>
<head>
   <h1>hello guys</h1>
    <title>Document</title>
</head>
<body>
    <h3>
    <?php
    session_start();
     echo $_SESSION['login_user']['username'];?>
    </h3>
</body>
</html>