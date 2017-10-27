<?php
define("TITLE","Form methods PHP");

if(isset( $_POST['form_submit'] ) ){
    
    function formValidation ($formdata){
        
        $formdata = trim(stripslashes(htmlspecialchars($formdata)));
        
        return $formdata;
    }
    
    if($_POST['name']==""){
        
        $nameError = "Enter your name";
    }else{
        $name = formValidation($_POST['name']);
    }
    
    if($_POST['email']==""){
        
        $emailError = "Enter your email";
    }else{
        $email = formValidation($_POST['email']);
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo TITLE; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--   These below comments help internet explorer understand the html5 and bootstarp to work properly.     -->
        <!--[if lt IE 9]>

<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
<body>
    
    <div class="container ">
       <h1><?php echo TITLE; ?></h1>
           
        <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <p class="text-danger">&#42; All fields are required</p>
            <span class="text-danger"><?php
                echo "&#42; $nameError"; ?></span>
            <input type="text" name="name" placeholder="entre your name" class="form-control"><br>
            <span class="text-danger"><?php
                echo "&#42; $emailError"; ?></span>
            <input type="email" name="email" class="form-control" placeholder="enter your email"><br>
            <input type="submit" value="submit" class="btn btn-primary" name="form_submit">
        </form>
        
        <h2>Your info</h2>
        <p class="well">
            <?php
            
            echo "Name is $name <br>";
            echo "Email is $email <br>";
            ?>
        </p>
         
    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>