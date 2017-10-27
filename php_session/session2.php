<?php

session_start();

echo "Welcome ".$_SESSION['username']." to our site <br>";
echo "Your email id is ".$_SESSION['email'];

?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Udemy Session handling php!!
    </title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                <h3 class="text-center">Session handling php Page-2</h3><br>
              <a href="session_destroy.php" class="btn btn-danger">logout</a>
           
        </div><!--end container-->
        <hr>
        
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>