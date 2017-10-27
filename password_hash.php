<?php
include('connection.php');


?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Udemy Password hash with php!!
    </title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/Projects_udemy/Css3/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">
        
<!--   These below comments help internet explorer understand the html5 and bootstarp to work properly.     -->
        <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        </head>
    
    <body>
        
<!--   Now let's create a carousel for this page     -->
    
        <div class="container">
                <h3 class="text-center">Password hash with php using md5()</h3><br>
              
           <?php
            
            $password = "naren123@";
            
            $hash = md5($password);
            
            echo $hash."<br>";
            
            if(password_verify($password,$hash)){
                echo "password is correct!!";
            }
            else{
                echo "Incorrect password!!";
            }
            
            ?>
            
            <h3 class="text-center">Password hash with php using sha1()</h3><br>
              
           <?php
            
            $password = "naren123@";
            
            $hash = sha1($password);
            
            echo $hash."<br>";
            
            if(password_verify("naren12345@",$hash)){
                echo "password is correct!!";
            }
            else{
                echo "Incorrect password!!";
            }
            
            
            ?>
            
            <h3 class="text-center">Password hash with php using password_hash</h3><br>
              
           <?php
            
            $password = "naren123@";
            
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            echo $hash."<br>";
            
            if(password_verify($password,$hash)){
                echo "password is correct!!";
            }
            else{
                echo "Incorrect password!!";
            }
            
            
            ?>
            <h3 class="text-center">Password hash with php using password_hash</h3><br>
            
            <?php
            
            $password = "palep";
            
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            echo $hash."<br>";
            
            if(password_verify($password,$hash)){
                echo "password is correct!!";
            }
            else{
                echo "Incorrect password!!";
            }
            
            
            ?>
            
        </div><!--end container-->
        <hr>
        
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>