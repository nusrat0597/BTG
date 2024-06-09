<?php
include 'dbcon.php';

$id = $_GET['id'];


$query = "select * from registration where id='$id'";

$data= mysqli_query($con, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
<div class="reg">  
    
        <div class="full">
        
            <div class="form">
                <div class="logo">
                    <div class="logoimg"></div>
        
                    <p>Bangladesh Tourist Guide</p>
                </div>
        
                <div class="wlc">
                   Update Registration Details 
                </div>
        
                
                
        
                <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"   >
        
                    <div class="signup">
        
                    <div class="u-box">
                            <div class="u-logo"><i class="fa-solid fa-user"></i></div>
                            <input name="username" value="<?php echo $result['username'];?>" class="u-text" placeholder="Full name" type="text" required>
                        </div>
        
                      
        
                        <div class="e-box">
                            <div class="e-logo"><i class="fa-solid fa-envelope"></i></div>
                            <input name="email"  value="<?php echo $result['email'];?>" class="e-text" placeholder="Email Address" type="email" required>
                        </div>

                        <div class="phn-box">
                            <div class="phn-logo"><i class="fa-solid fa-phone"></i></div>
                            <input name="phone"   value="<?php echo $result['phone'];?>" class="phn-text" placeholder="Phone number" type="text" required>
                        </div>
        
                        
      
                       <div class="type" >
                        <select name="user_type" required>
                            <option value="user"
                          <?php
                          

                        if($result['user_type'] == 'user')
                         {
                        echo "selected";
                        }
                    ?>
                       >  
                       user</option>

                            <option value="admin"
                            <?php

                     if($result['user_type'] == 'admin')
                      {
                     echo "selected";
                      }
                      ?>
                          >  

                        admin</option>
                       </select>
                       </div>
        
        
                        <div class="btn">
        
                            <button type="submit" name="submit" value="submit" class="submit">Update</button>
                        </div>
        
                
        
                     </div>
                </div>
                </form>
         </div>
        </div>
     </div>  
    </body>
        </html>


<?php
include 'dbcon.php';
$id = $_GET['id'];
$query = "select * from registration where id='$id'";

$data= mysqli_query($con, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);
   
   if(isset($_POST['submit'])){

$username = mysqli_real_escape_string($con, $_POST['username']);
$email   = mysqli_real_escape_string($con, $_POST['email']);
$phone   = mysqli_real_escape_string($con, $_POST['phone']);
$user_type = mysqli_real_escape_string($con,$_POST['user_type']); 



$query="update registration set username ='$username',email ='$email',phone ='$phone',user_type ='$user_type'  where  id ='$id'";

$data = mysqli_query($con, $query);

if($data)
{ ?>
                
    <script>
        alert("Record Updated Successfully");
        </script>
        <?php

?>

<meta http-equiv = "refresh" content = "; url = http://localhost/final-project/regrecord.php"/>

<?php
}
else
{
    ?>
                
    <script>
        alert("Failed to Update!");
        </script>
        <?php
}


   }
?>
