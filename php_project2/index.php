<?php

session_start();
include('includes/functions.php');

//$value = "palep";

if(isset($_POST['login'])){
    
    $email = validateFormData($_POST['email']);
    $pwd = validateFormData($_POST['password']);
    
    include('includes/connection.php');
    
    //create a query
    $query = "SELECT name, password FROM users WHERE email='$email'";
    
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0 ){
        
        while($row = mysqli_fetch_assoc($result)){
            
            $name = $row['name'];
            $hash = $row['password'];
        }
        
        if(password_verify($pwd, $hash)){
            
            //if user verified successfully only or logged in only.
            $_SESSION['loggedIn'] = true;
            
            $_SESSION['loggedInUser'] = $name;
            
            header('Location: clients.php'); 
        }
        else{//if password did not verify properly.
            $loginError = "<div class='alert alert-danger'>Wrong username/password Try again..</div>";
        }
    }
    else{//if there are now rows in the database.
        
        $loginError = "<div class='alert alert-danger'>No such data in the database..<a class='close' data-dismiss='alert'>&times;</a></div>";
        
    }
    
}
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Client Address Book</h1>
<p class="lead">Log in to your account.</p>

<?php echo $loginError; ?>
<form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group">
        <label for="login-email" class="sr-only">Email</label>
        <input type="text" class="form-control" id="login-email" placeholder="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
        <label for="login-password" class="sr-only">Password</label>
        <input type="password" class="form-control" id="login-password" placeholder="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>

<?php
include('includes/footer.php');
?>