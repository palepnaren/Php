<?php
include('connection.php');

$query = "SELECT * FROM persons";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Udemy Mysql with Php!!
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
            <div class="page-header">
                <h3 class="text-center">Mysql with php</h3>
                
                <?php 
                if( mysqli_num_rows($result) > 0){
    
    
    echo "<table class='table table-bordered table-striped table-hover'><tr><th>Id</th><th>Username</th><th>Email</th></tr>";
    while($row =  mysqli_fetch_assoc($result)){
        
        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td> ".$row["email"]."</td></tr>"; 
    }
    echo "</table>";
}else{
    
    echo "No data!..";
}


mysqli_close($conn);
                ?>
                
            </div>
            
            
        </div><!--end container-->
        
        
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>