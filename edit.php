<?php
require_once("model/employeeConfig.php");

$req = new employeeConfig();
$id = $_GET['id'];
$req->setId($id);

if(isset($_POST['edit'])){
    $req->setfullName($_POST['fullName']);
        $req->setEmail($_POST['email']);
        $req->setPosition($_POST['position']);

        echo $req->updateData();
        echo "<script>alert('Data updated successfully')</script>";
}

$record = $req->getSingle();
$val=$record[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Edit Employee</title>
</head>
<body>
    <nav>
        <div class="logo"><a href="index.php">ROADDO</a> </div>
    </nav>
    <div class="container">
        <h2>Edit Employee</h2>
        <p style="margin:20px 0;">Please fill all the form correctly</p>

        <form action="" method="post">
            <div class="f-group">
                <label for="">Full Name</label>
                <input type="text" name="fullName" value="<?php echo $val['fullName']; ?>" class="control" require>
            </div>
            <div class="f-group">
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo $val['email']; ?>" class="control" require>
            </div>
            <div class="f-group">
                <label for="">Position</label>
                <input type="text" name="position" value="<?php echo $val['position']; ?>" class="control">
            </div>

            <button type="submit" name="edit" class="button-5 btn-edit">Update</button>
        </form>
    </div>
</body>
</html>