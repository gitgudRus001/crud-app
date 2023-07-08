<?php include 'header.php'; ?>
<?php include 'config.php'; ?>


        <button id="addClass" type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENT</button>

        <table class="table table-hover table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                
                $query = "SELECT * FROM `users`";

                $result =  mysqli_query($connection, $query);
                
                if(!$result){
                    die("Query failed" . mysqli_connect_error());
                } else {
                    // print_r($result);

                    while($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <tr class="align-middle">
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['user_firstname']; ?></td>
                            <td><?php echo $row['user_lastname']; ?></td>
                            <td><?php echo $row['user_age']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['user_id']; ?>" class="btn btn-success">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>

                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <!-- Button trigger modal -->


<!-- Modal -->
<form action="insert.php" method="POST">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="firstname">First name:</label>
                            <input type="text" name="firstname" class="form-control" required autocomplete="off">

                            <label for="firstname">Last name:</label>
                            <input type="text" name="lastname" class="form-control" required autocomplete="off">

                            <label for="firstname">Age:</label>
                            <input type="text" name="age" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add_student" value="ADD">
                </div>
            </div>
    </div>
    </div>
</form>

<!-- Delete Modal
<form action="delete.php" method="POST">

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <p class="lead">Are you sure you want to delete this user?</p>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="delete_student" value="YES">
            </div>
    </div>
    </div>
</form> -->
   
    <?php include 'footer.php'; ?>
</body>
</html>