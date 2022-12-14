<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/css/blog.css">


    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("livesearch").innerHTML = "";
                document.getElementById("livesearch").style.border = "0px";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("livesearch").innerHTML = this.responseText;
                    document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET", "livesearch.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>

</head>

<body>

    <form>
        <input type="text" size="30" onkeyup="showResult(this.value)">
        <div id="livesearch"></div>
    </form>
    <?php require_once('index.php'); ?>

    <div class="container">
        <?php
        require_once "../models/blogModel.php";
        $data = displayAllBlog();

        while ($row = mysqli_fetch_array($data)) {

        ?>
        <div class="card">

            <div class="card-header">
                <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg" alt="rover" />
            </div>
            <div class="card-body">

                <span class="tag tag-teal">Technology</span>
                <h4>
                    <?php echo "<h4>" . ($row['title']) . "</h4>"; ?>
                </h4>
                <p>
                    <?php echo "<p>" . substr(($row['content']), 0, 50) . "</p>"; ?>
                </p>
                <div class="user">
                    <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo"
                        alt="user" />
                    <div class="user-info">
                        <h5>July Dec</h5>
                        <small>2h ago</small>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

</body>

</html>