<html>
                  
<head>
    <title>File Upload</title>
</head>
<body>
        <form method="POST" action="creatpostData.php" enctype="multipart/form-data" >
           <fieldset>
            <legend align="center"><h3>Creat Your Post</h3></legend>
            <table>
            <tr>
                <td>Place</td>
                <td><input type="text" name="place" value=""/></td>
            </tr>
            <tr>
                <td>Text</td>
                <td><textarea type="text" name="text" value=""></textarea></td>
            </tr>
            <tr>
                <td>Date</td>
                <td> <input type="date" name="date" value=""/></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file" name="myfile" value="" /></td>
            </tr>
                <td><input type="submit" name="submit" value="Submit"/></td>
            </table>
           </fieldset>
        </form>
</body>

</html>