<?php include 'header.php'; ?>
<?php include 'config.php'; ?>




<?php 

    if(isset($_GET['id'])){
        $userid = $_GET['id'];
    }    


    $query = "DELETE FROM `users` WHERE `user_id` = '$userid'";

    $result = mysqli_query($connection, $query);

    if(!$result){
        // die('Error: '. mysqli_error($connection));
    }
    else {
        header('Location: index.php?delete-msg=Deleted successfully');
    }

    // if(isset($_POST['delete_student'])) {

    //     $query = "DELETE FROM `users` WHERE `user_id` = '$userid'";

    //     $result = mysqli_query($connection, $query);

    //     if(!$result){
    //         die('Error: '. mysqli_error($connection));
    //     }
    //     else {
    //         header('Location: index.php?');
    //     }
    // }
?>

<?php 

    // if(isset($_POST['delete_student'])) {

    //     $query = "DELETE FROM `users` WHERE `user_id` = '$userid'";
    //     $result = mysqli_query($connection, $query);

    //     if(!$result){
    //         // die('Error: '. mysqli_error($connection));
    //     }
    //     else {
    //         header('Location: index.php?');
    //     }
    // }

?>








<?php include 'footer.php'; ?>