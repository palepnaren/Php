<?php
define("TITLE","Php Arrays");
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
           
         <pre> <?php
           //Simple php array
           $user = array(
               "naren",
               "Naren Palep",
               23,
               "Male",
               "India"
           );
           
           //displaying array values
           
           echo $user[0]."<br>";
           echo $user[1]."<br>";
           echo $user[2]."<br>";
           echo $user[3]."<br>";
           echo $user[4]."<br>";

           //associative arrays, we can have coustume key name for our values unlike simple array

            $people = array(
                
                "username" => "narenpalep",
                "fullname" => "Naren Palep",
                "age" => 23,
                "country" => "India"
                
            );
            
            echo "<br> Associative array <br>";
            echo $people["username"]."<br>";
            echo $people["fullname"]."<br>";
            echo $people["age"]."<br>";
            echo $people["country"]."<br>";
            
            //multidimentional arrays in php
            $employees = array(
            
                array(
                    "username" => "narenpalep",
                    "fullname" => "Naren Palep",
                    "age" => 23,
                    "country" => "India"
                ),
                array(
                    
                    "username" => "raj",
                    "fullname" => "Raj Kumar",
                    "age" => 24,
                    "country" => "India"
                )
                
            );

            echo"<br> Multidimenstional array<br>";
            echo $employees[0]["username"]."<br>";
            echo $employees[1]["username"]."<br>";
           
           ?></pre>
    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>