<?php
require_once("model/employeeConfig.php");

$req = new employeeConfig();
$all= $req->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eMPLOYEE PAGE</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav>
    <div class="logo"><a href="index.php">ROADDO</a> </div>
    </nav>
    <div class="container">
        <a href="create.php"class="button-5 btn-link">Create Employee</a>

        <div class="card">
            <table class="table">
                <thead>
                    <th>S/N</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Action</tr>
                </thead>

                <tbody>
                    <?php 
                        $i=1;
                        foreach ($all as $key => $item) {
                            ?>
                    <tr>
                        <td><?=$i++ ?></td>
                        <td><?=$item['fullName']?></td>
                        <td><?=$item['email']?></td>
                        <td><?=$item['position']?></td>
                        <td>
                            <a class="button-5 btn-edit" href="edit.php?id=<?=$item['id']?>">Edit</a>
                            <a class="button-5 btn-delete" href="delete.php?id=<?=$item['id']?>&req=delete">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>