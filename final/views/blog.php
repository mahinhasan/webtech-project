<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/adminStyle.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <?php         include('navbar.php');

    include('../models/db.php');
    ?>


    <fieldset style="padding: 20px;margin:20px" align="center">
        <legend>Search</legend>
        <div class="search">
            <form action="blogSearch.php" method="post">
                <input type="text" name="search">
                <input type="submit" name="submit" value="search">
            </form>

        </div>
    </fieldset>


    <main>
        <?php
        require_once "../models/blogModel.php";
        $data = displayAllBlog();

        while ($row = mysqli_fetch_array($data)) {
            $id = $row['id'];
        ?>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?=$row['title'];?></h1>
                        <span><?=$row['content'];?></span>
                    </div>
                    <div>
                        <span class="fas fa-flag"></span>
                    </div>
                    <form action="../controllers/blog/blogCheck.php" method="post">
                        <input type="submit" name="delete_blog" value="delete">
                    </form>
                </div>
                
            </div>
        <?php
        }
        ?>

    </main>


    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("livesearch").innerHTML = "";
                document.getElementById("livesearch").style.border = "0px";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("livesearch").innerHTML = this.responseText;
                    document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET", "livesearch.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
</body>

</html>