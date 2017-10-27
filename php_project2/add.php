<?php
session_start();

if($_SESSION['loggedIn']){
    

}
else{
    header('Location: index.php'); 
}

include('includes/functions.php');

include('includes/connection.php');

if(isset($_POST['add'])){
    
    $name = validateFormData($_POST['clientName']);
    $email = validateFormData($_POST['clientEmail']);
    $phone = validateFormData($_POST['clientPhone']);
    $address = validateFormData($_POST['clientAddress']);
    $company = validateFormData($_POST['clientCompany']);
    $notes = validateFormData($_POST['clientNotes']);
   
    $query = "INSERT INTO clients VALUES(NULL, '$name', '$email', '$phone', '$address', '$company', '$notes', CURRENT_TIMESTAMP)";
    
    if($name != "" && $email != ""){
        if(mysqli_query($conn, $query)){
            
            header('Location: clients.php?alert=success');
        }
        else{
            echo "Error inserting data: ".$query."<br>".mysqli_error($conn)."<br>";
        }
        
    }
    else{
        $error = "<div class='alert alert-danger'>Please provied all the required fields *</div>";
    }
   
}
 mysqli_close($conn);
include('includes/header.php');
?>

<h1>Add Client</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="row">
    <?php echo $error; ?>
    <div class="form-group col-sm-6">
        <label for="client-name">Name *</label>
        <input type="text" class="form-control input-lg" id="client-name" name="clientName" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-email">Email *</label>
        <input type="text" class="form-control input-lg" id="client-email" name="clientEmail" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-phone">Phone</label>
        <input type="text" class="form-control input-lg" id="client-phone" name="clientPhone" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-address">Address</label>
        <input type="text" class="form-control input-lg" id="client-address" name="clientAddress" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-company">Company</label>
        <input type="text" class="form-control input-lg" id="client-company" name="clientCompany" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-notes">Notes</label>
        <textarea type="text" class="form-control input-lg" id="client-notes" name="clientNotes"></textarea>
    </div>
    <div class="col-sm-12">
            <a href="clients.php" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="add">Add Client</button>
    </div>
</form>

<?php
include('includes/footer.php');
?>