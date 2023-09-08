<?php 
require_once "../app/database.php";
use App\Database;
$emp = new Database();
$all_data=$emp->getData();
$title = "SIMPLE PHP CRUD OPERATION APPLICATION";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <p class="text-center lead fs-2"><?php echo $title ?></p>
        <a href="add_edit.php" class="btn btn-secondary">Add Data</a>
        <table class="table">
            <thead>
                <caption class="text-center caption-top">STUDENT SIGN UP FORM</caption>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
                </tr>

            </thead>
            <tbody>
                <?php  
                foreach($all_data as $data):?>
                <tr>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['gender']; ?></td>
                    <td>
                        <a href="add_edit.php" class="btn btn-success">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php  endforeach; ?>
            </tbody>
        </table>
    </div>
    


<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>