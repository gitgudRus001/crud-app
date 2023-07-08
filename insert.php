<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form input {
        width: 250px;
        margin: 0 0 10px 0;
        padding: .6em;
    }
</style>
<body>

    <!-- <div class="container">
        <h1>Sign up</h1>
    
        <form action="insert.php" method="POST">

            <input type="text" name="firstname" id="" placeholder="First Name">

            <input type="text" name="lastname" id="" placeholder="Last Name">

            <input type="text" name="age" id="" placeholder="Age">
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div> -->
    
    <?php 
    include 'config.php';

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
                $age = $_POST['age'];
        
                if(isset($_POST['add_student'])){
    
                $add_user = "INSERT INTO `users` (user_firstname, user_lastname, user_age) VALUES ('$firstname', '$lastname', '$age');";
                header("Location: index.php");
                
                if(mysqli_query($connection, $add_user)){
                    // echo "New record added successfully!";
    
                    $add_user = "";
                } else {
                    echo mysqli_error($connection);
                }
            }
        }
    ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>