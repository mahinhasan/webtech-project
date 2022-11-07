
<html>
<head>

</head>
<body>
<fieldset>
    <legend>Admin</legend>
    <a href="../profile.php">edit
<?php
echo '<table border="1">';
$file = fopen("../user.txt", "r") or die("Unable to open file!");
while (!feof($file)){   
    $data = fgets($file); 
    
    echo "<tr><td>" . str_replace('|','</td><td>',$data) . '</td></tr>';
}
echo '</table>';
fclose($file);
?>
</a>
</fieldset>

</table>
</body>
</html>