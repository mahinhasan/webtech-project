<!-- <html>
<head>
    <title>create post</title>
</head>
<body>

        <form method="post" action="createData.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Signup</legend>
                Place: <input type="text" name="place" value=""/> <br>
                Date: <input type="date" name="date" value=""/> <br>
                Img: <input type="file" name="myfile" value="" /> <br>
                <input type="submit" name="btn" value="Submit"/>
            </fieldset>
        </form>
</body>
</html> -->


<html>
<head>
    <title>File Upload</title>
</head>
<body>
        <form method="POST" action="createData.php" enctype="multipart/form-data" >
            Place: <input type="text" name="place" value=""/> <br>
            Text: <textarea type="" name="text" value=""></textarea><br>
            Date: <input type="date" name="date" value=""/> <br>
            Image: <input type="file" name="myfile" value="" />
                <input type="submit" name="submit" value="Submit"/>
        </form>
</body>
</html>