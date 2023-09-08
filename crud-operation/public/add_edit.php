<?php 
require_once "../app/database.php";
use App\Database;
$emp = new Database();
$title = "Add/edit your data ";

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
      $emp->addData($name, $email, $gender);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>

<html lang="en">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
</head>
<body>

    <div class="container">
        <p class="lead my-5 text-center"> <?php echo $title ?> </p>
        <form method="post" class="form">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div>
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" >  
            </div>
            <button type="submit" class="btn btn-success mt-3" >SAVE</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>