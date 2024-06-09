
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

<?php 


include 'dbcon.php'; 


    if(isset($_POST['submit'])){

        $username= mysqli_real_escape_string($con, $_POST['username']);
        $email   = mysqli_real_escape_string($con, $_POST['email']);
        $phone   = mysqli_real_escape_string($con, $_POST['phone']);
        $password= mysqli_real_escape_string($con, $_POST['password']);
        $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);
        
        

        $pass= password_hash($password, PASSWORD_BCRYPT);
        $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = "select * from registration where email='$email'";
        $query = mysqli_query ($con,$emailquery);

        $emailcount= mysqli_num_rows($query);

        if($emailcount >0){ 
            ?>
                
            <script>
                alert("Email Already Exists");
                </script>
                <?php
        }
        else{

            if( $password === $cpassword){

                $insertquery = "insert into registration (username,email,phone,password,cpassword) values('$username','$email','$phone','$pass','$cpass')";
                
                $iquery = mysqli_query ($con,$insertquery);

                if($iquery){

                    ?>
                
                    <script>
                        alert("Insert Successfully");
                        </script>
                        <?php

                   

                      
                
                }

                else{

                    ?>

                       <script>
                        alert("Not Inserted");
                        </script>
                        <?php

                }
            }
            else{

                ?>

                <script>
                 alert("Password not matching");
                 </script>
                 <?php
            }
              
        }
    }
    

?>

<div class="reg">  
             <h1 class="wlc">Registration</h1>

                <form method="post" action="">
        
                    <div class="signup">
        
                    <div class="u-box box">
                            <label for="fullName">Full Name</label>
                            <input name="username" class="u-text" placeholder="Full name" type="text" required>
                        </div>
        
                        <div class="n-box box">
                            <label for="fullName">Username</label>
                            <input name="username" class="u-text" placeholder="Username" type="text" required>
                        </div>
        
                        <div class="e-box box">
                            <label for="email">Email Address</label>
                            <input name="email" class="e-text" placeholder="Email Address" type="email" required>
                        </div>

                        <div class="phn-box box">
                            <label for="phone">Phone Number</label>
                            <input name="phone" class="phn-text" placeholder="Enter your Phone number" type="text" required>
                        </div>
        
                        
                    <div class="pass-box box">
                            <label for="password">Password</label>
                            <input name="password" class="pass-text" placeholder="Password" type="password" required>
                        </div>

                        <div class="cpass-box box">
                            <label for="cpassword">Repeat password</label>
                            <input name="cpassword" class="cpass-text" placeholder="Repeat Password" type="password" required>
                        </div>
        
        
                        <div class="btn">
        
                            <button type="submit" name="submit"  class="submit">Signup</button>
                            
                        </div>
        
                        <div class="msg">
                            <p>Already have an Account ?</p>
                            <a href="login.php">Login here </a>
                        </div>
        
                     </div>
                </div>
                </form>
        
        </div>
     </div>  
    </body>
        </html>