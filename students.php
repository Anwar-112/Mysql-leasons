<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$sql = "SELECT * FROM students";
$result = $db->query($sql);


if ($result && $result->num_rows > 0) {
   // $row = $result->fetch_assoc();
    // echo $row['id'] . "<br>";
    // echo $row['first_name'] . "<br>";
} else {
    echo "No data found<br>";
}
?>

<table border="1">
    <tr>
        <th>id</th>
        <th>gender</th>
        <th>country</th>
        <th>distric</th>
    </tr>
    <?php 
    //
    if ($result && $result->num_rows > 1) { 
        while($row1 = $result->fetch_object()){
            ?>
            <tr>
                <td><?php echo $row1->id ?></td>
                <td><?php echo $row1->gender?></td>
                <td><?php echo $row1->country ?></td>
                <td><?php echo $row1->distric ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
    
</body>
</html>
