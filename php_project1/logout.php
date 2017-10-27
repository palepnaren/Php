<?php

if(isset($_COOKIE[session_name()])){
    
    setcookie(session_name(),'',time()-86400,'/');
}

session_start();

session_unset();

session_destroy();

echo "You have been logged out successfully..";

echo "<p><a href='login.php'>login back</a></p>";

?>