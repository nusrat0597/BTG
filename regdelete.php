<?php
include 'dbcon.php';
$id = $_GET['id'];
$query= "DELETE from registration where id = '$id'";
$data = mysqli_query($con, $query);

if($data)
{
    ?>
                
    <script>
        alert("Record Deleted Successfully");
        </script>
        <?php
        ?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/final-project/regrecord.php"/>
<?php

    }

else
{
    
    ?>
    
                
    <script>
        alert("Record failed to delete");
        </script>
        <?php
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>