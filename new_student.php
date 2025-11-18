<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Students Entery</h3>


    <form action="" method="post">
        <!-- <input type="text" name="id" placeholder="Enter your id"> <br> -->
        <input type="text" name="gender" placeholder="Enter your gender"> <br>
        <input type="text" name="country" placeholder="Enter your country name"> <br>
        <input type="text" name="distric" placeholder="Enter your distric name"> <br>
       
        <input type="submit" name="submit" value="Submit">
    </form> <br><br>

        <?php 
    
    include_once('db_config.php');
    if(isset($_POST['submit'])):
        extract($_POST);
 
        $sql = "INSERT INTO students VALUES (NULL, '$gender', '$country', '$distric')";
        $db->query($sql);

        if($db->affected_rows){
            echo "Inserted <br>";
        }

    endif;
    
    ?>

    <a href="students.php">Student List:</a>
</body>
</html>