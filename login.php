<?php
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="log.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 


<?php 

include 'dbcon.php';

   

        
        if(isset($_POST['submit'])){

            $email   = mysqli_real_escape_string($con, $_POST['email']);
            $password= mysqli_real_escape_string($con, $_POST['password']);
            
            $email_search= "select * from registration where email= '$email' ";
            $query= mysqli_query ($con, $email_search);
    
            $email_count= mysqli_num_rows($query);


        if($email_count){

            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass ['password'];

            $pass_decode= password_verify( $password,$db_pass);
            
            if($pass_decode){

                ?>

                <script>
    
                    alert ("Login Successful");
                    </script>
                <?php


                
                ?> 
                <script>
                    location.replace("home.php");
                 </script>
                 <?php
            }

            else{
                ?>

                <script>
    
                    alert ("Password Incorrect");
                    </script>
                <?php
            }
        }else{

            ?>

            <script>

                alert ("Invalid Email");
                </script>
            <?php
        }
    
    
        }
                
      ?>         
 
 <div class="log">  
    
              <div class="wlc">
                    Log In
                </div>
        
                
                <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"  >
        
                    <div class="login">
        
        
                      
                    <div class="e-box box">
                            <label for="email">Email Address</label>
                            <input name="email" class="e-text" placeholder="Email Address" type="email" required>
                        </div>
        
                        
        
                        <div class="pass-box box">
                            <label for="password">Password</label>
                            <input name="password" class="password" placeholder="Password" type="password" required>
                        </div>
        
        
                        <div class="btn">
        
                          <button type="submit" name="submit" class="submit">Login</button>

                       </div>
        
                        <div class="msg">
                            <p>Don't have an Account yet?</p>
                            <a href="signup.php">Sign up </a>
                        </div>
        
                     </div>
                </div>
                </form>
         </div>
        </div>
     </div>  
    </body>
        </html>