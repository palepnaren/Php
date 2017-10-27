<?php
session_start();

if($_SESSION['loggedIn']){
    

}
else{
    header('Location: index.php'); 
}

include('includes/connection.php');

$query = "SELECT * FROM clients";

$result = mysqli_query($conn, $query);

if(isset($_GET['alert'])){
    
    //client added.
    if($_GET['alert'] == 'success'){
        
        $msg = "<div class='alert alert-success'>New Client Added<a class='close' data-dismiss='alert'>&times;</a></div>";
    }
    //client updated.
    elseif($_GET['alert'] == 'updatesuccess'){
        $msg = "<div class='alert alert-success'>Client Updated Successfully!<a class='close' data-dismiss='alert'>&times;</a></div>";
    }
        elseif($_GET['alert'] == 'deleted'){
        $msg = "<div class='alert alert-success'>Client deleted Successfully!<a class='close' data-dismiss='alert'>&times;</a></div>";
    }
}
mysqli_close($conn);
include('includes/header.php');
?>

<h1>Client Address Book</h1>

<?php echo $msg; ?>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Company</th>
            <th>Notes</th>
            <th>Edit</th>
        </tr>
    </thead>
    
    <?php
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            
            echo "<tbody><tr>";
        
            echo "<td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['address']."</td><td>".$row['company']."</td><td>".$row['notes']."</td>";
        
            echo '<td><a href="edit.php?id='.$row['id'].'" type="button" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a></td>';
        
            echo "</tr></tbody>";
        
    }
    }
    else{
        echo "<div class='alert alert-warning'>You have no clients to show!</div>";
    }
    
    mysqli_close($conn);
            
    ?>
    
        

    <tr>
        <td colspan="7"><div class="text-center"><a href="add.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Client</a></div></td>
    </tr>
</table>

<?php
include('includes/footer.php');
?>