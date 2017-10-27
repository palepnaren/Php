<?php
include('connection.php');

if(isset( $_POST['insert'] ) ){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];
    
    function formValidation ($formdata){
        
        $formdata = trim(stripslashes(htmlspecialchars($formdata)));
        
        return $formdata;
    }
    
    if($username == ""){
        
        $nameError = "Enter your name";
    }else{
        $username = formValidation($username);
    }
    
    if($password == "" || $password >= 5){
        
        $passwordError = "Your password should be more then 5 characters";
    }else{
        $password = formValidation($password);
        $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
        //$password = password_hash($password);
        var_dump($password);
        var_dump($hashed_pwd);
    }
    
    if($email == ""){
        
        $emailError = "Enter your email";
    }else{
        $email = formValidation($email);
    }
    
    $bio = formValidation($bio);
    
    $query = "INSERT INTO persons (id, username, password, email, signup_date, about)
    VALUES(NULL, '$username', '$hashed_pwd', '$email', CURRENT_TIMESTAMP, '$bio')";
    
    
}
?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Udemy Mysql insert with Php!!
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
                <h3 class="text-center">Mysql insert with php</h3><br>
              <div class="row"> 
                <form class="form-horizontal col-sm-offset-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                  <div class="form-group">
                    <div class="col-sm-8">
                        <p class="text-danger">&#42; All fields are required</p>
                        <span class="text-danger"><?php
                            echo "&#42; $nameError"; ?></span>
                        <input type="text" name="username" placeholder="entre your username" class="form-control">
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="col-sm-8">
                        <span class="text-danger"><?php
                            echo "&#42; $passwordError"; ?></span>
                        <input type="password" name="password" class="form-control" placeholder="enter your password">
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="col-sm-8">
                        <span class="text-danger"><?php
                            echo "&#42; $emailError"; ?></span>
                        <input type="email" name="email" class="form-control col-4" placeholder="enter your email">
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="col-sm-8">
                        <textarea rows="5" cols="40" placeholder="enter your bio" name="bio" class="form-control col-4"></textarea><br>
                    </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-8">
                        <input type="submit" value="Insert" class="btn btn-primary" name="insert">
                      </div>
                    </div>
                </form>
            </div>
            <?php
            
            if(isset($_POST['insert'])){
                
                //check to see all fields have values.
                if( $username != "" && $password != "" && $email != ""){
                if(mysqli_query($conn, $query)){
                   $success = "New record added to the database";
                    echo "<div class=\"alert alert-success alert-dismissable fade in\">";
                    echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\">";
                    echo "&times;</a>";
                    echo "<strong>Success!</strong>".$success;
                    echo "</div>";
                   
                }else{
                    $failed = "Error while inserting ".$query."<br>".mysqli_error();
                    echo "<div class=\"alert alert-danger alert-dismissable fade in\">";
                    echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\">";
                    echo "&times;</a>";
                    echo "<strong>Failed!</strong>".$failed;
                    echo "</div>";
                }
               }
                    
             }
            mysqli_close($conn);
            ?>
        </div><!--end container-->
        <hr>
        
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>