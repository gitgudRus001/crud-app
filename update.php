<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<?php 

    
    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];
    }
                
        $query = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";

        $result =  mysqli_query($connection, $query);

        if(!$result){
            die("Query failed" . mysqli_connect_error());
        } 
        
        else {
            $row = mysqli_fetch_assoc($result);
            // print_r($row);

        }          
        // <?php echo $row['user_firstname']  S       s
?>


<?php 

        if(isset($_POST['update_student'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];

            $query = "UPDATE `users` SET `user_firstname` = '$firstname', `user_lastname` = '$lastname', `user_age` = '$age' WHERE `user_id` = '$user_id'";
            $result = mysqli_query($connection, $query);
            
            if(!$result){
                die("Query failed". mysqli_connect_error());
            }
            else {
                header("Location: index.php?update_msg=Updated successfully!");
            }
        }

?>



<form method="POST" class="mt-5">
    <label for="firstname">First name:</label>
    <input type="text" name="firstname" class="form-control my-3" required autocomplete="off" value="<?php echo $row['user_firstname']  ?>">

    <label for="firstname">Last name:</label>
    <input type="text" name="lastname" class="form-control my-3" required autocomplete="off" value="<?php echo $row['user_lastname']  ?>">

    <label for="firstname">Age:</label>
    <input type="text" name="age" class="form-control my-3" required autocomplete="off" value="<?php echo $row['user_age']  ?>">

    <input type="submit" class="btn btn-success" name="update_student" value="UPDATE">
    <a href="index.php" class="btn btn-danger">Go back</a>
</form>

<!-- <video controls src="ani.mp4"></video> -->


<?php include 'footer.php'; ?>
