<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      .update{

        background-color: royalblue;
        color: white;
        border: 0;
        outline: none;
        border-radius: 5px;
        height: 25px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
      }

.delete{

background-color: red;
color: white;
border: 0;
outline: none;
border-radius: 5px;
height: 25px;
width: 80px;
font-weight: bold;
cursor: pointer;
}
      </style>


</head>

    
<?php
include 'dbcon.php';

$query = "select * from registration ";
$data=mysqli_query($con, $query);

$total = mysqli_num_rows($data);



//echo $total;

//css e sob korbo design

if($total != 0)
{
    ?>
    <div class="table">
      <center>
   <table border="3" cellspacing="5" width="66%" >
    <tr>
    <th width="3%">ID</th>
    <th width="10%">Name</th>
    <th width="20%">Email</th>
    <th width="12%">Phone</th>
    <th width="8%">User_Type</th>
    <th width="13%">Operations</th>
</tr>






<?php
   
  while($result = mysqli_fetch_assoc($data))

  {
    echo   "<tr>
              <td>".$result['id']."</td>
              <td>".$result['username']."</td>
              <td>".$result['email'] ."</td>
              <td>".$result['phone']."</td>
              <td>".$result['user_type']."</td>

              <td><a href='regupdate.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>

              <a href='regdelete.php?id=$result[id]'><input type='submit' value='Delete' class='delete'onclick='record checkdelete()'></a></td>
              </tr>
              ";
              

  }
}
else{
    echo "no record";
}
?>
</table>
</center>
</div>


<body>

    
</body>

<script>

  function checkdelete()
  {
    record confirm ('Are you sure you want to delete this data?');
  }
</script>
</html>


