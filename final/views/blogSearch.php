<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('navbar.php');

    include('../models/db.php');
    ?>

    <div class="data" align="center">
        <table align="center">
            <?php if (isset($_POST['submit'])) {
                $search = $_POST['search'];
                $sql = "select * from `blogs` where title='$search'";
                $con = getConnection();
                $res = mysqli_query($con, $sql);

                if (mysqli_num_rows($res) > 0) {
                    echo "<thead>
                                <tr>
                                <th>ID </th>
                                <th> Title</th>
                                <th>Content </th>
                                </thead>
                                ";

                    $row = mysqli_fetch_assoc($res);
                    $id = $row['id'];
                    $title = $row['title'];
                    echo "<tbody>

                                <tr>
                                    <td>$id</td>
                                    <td>$title</td>

                                </tr>

                                </tbody>";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>