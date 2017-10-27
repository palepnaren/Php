<html>
    <head>
        <title>Php Variables &amp; Constants</title>
    </head>
<body>
    
    <?php
    
    //boolean
    $loggedIn = true;
    
    //integer
    $age =40;
    
    //floating point
    $price = 30.89;
    
    //String
    $name = "Naren";
    
    
    echo "I am boolean = ".$loggedIn.", I am integer = ".$age.", I am float = ".$price.", I am a String = ".$name."<br><br>";
    
    //we can even plave variables directly in the quotes like.
    
    echo "My name is $name <br>";
    
    //defining constants in php, these cant's be changed.
    
    define("AGE", "40");
    
    //displaying the constant in php.
    echo AGE;
    
    ?>
    
    </body>
</html>