<?php

if(isset($_POST['login_validate'])){
    
    function formValidation ($formdata){
        
        $formdata = trim(stripslashes(htmlspecialchars($formdata)));
        
        return $formdata;
    }
                          
    $username = formValidation($_POST['username']);
    $pwd = formValidation($_POST['password']);
    
//    if($username == null || $username == ""){
//        
//        $error_name = "Please provide the correct username";
//    }else{
//        validate($username);
//    }
//                          
//    if($password == null || $password == ""){
//        
//        $error_pwd = "Please provide the correct username";
//    }else{
//        validate($password);
//    }
    
    include('/Users/narenpalep/Desktop/javascript/Projects_udemy/PHP/connection.php');
    
    $query = "SELECT username, email, password FROM persons WHERE username='$username'";

    //and password = '$password'
                          
    $result = mysqli_query($conn,$query);
            
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            $user = $row['username'];
            $email = $row['email'];
            $hashed = $row['password'];
        }
//        var_dump($hashed);
//        var_dump($pwd);
        if(password_verify($pwd,$hashed)){
            
            //redirect to profile page else redirect to the same page with error msg.
            
            session_start();
            
            $_SESSION["loggedInUser"] = $user;
            $_SESSION["loggedInEmail"] = $email;
            
            header('Location: profile.php');
        }
        else{//if password did not verify properly.
            $loginError = "<div class='alert alert-danger'>Wrong username/password Try again..<a class='close' data-dismiss='alert'>&times;</a></div>";
        }
    }
    else{//if there are now rows in the database.
        
        $loginError = "<div class='alert alert-danger'>No such data in the database..<a class='close' data-dismiss='alert'>&times;</a></div>";
        
    }
    
    mysqli_close($conn);
    
}


?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login
    </title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--        <link rel="stylesheet" type="text/css" href="/Projects_udemy/Css3/bootstrap.css">-->
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
            <div class="page-header">
                <h3 class="text-center">Login form</h3>
                
                <?php echo $loginError; ?>
                
                <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <legend>User Login:</legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="login_username" class="sr-only">Username:</label>
                                <input type="text" class="form-control" id="login_username" name="username" placeholder="enter your username">
                            </div>
                            <div class="col-sm-6">
                                <label for="login_password" class="sr-only">Password:</label>
                                <input type="password" class="form-control" id="login_password" name="password" placeholder="enter password">
                            </div>
                        </div><br>
                        <button type="submit" name="login_validate" class="btn btn-success">Login</button>
                        <button type="reset" class="btn btn-warning">Clear</button>
                </form>
                
                
            </div>
            
            
        </div><!--end container-->
        
        
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>