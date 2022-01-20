<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Create Employee</title>
</head>
<body>
    <nav>
        <div class="logo"><a href="index.php">ROADDO</a> </div>
    </nav>
    <div class="container">
        <h2>Create Employee</h2>
        <p style="margin:20px 0;">Please fill all the form correctly</p>

        <form action="post_action.php" method="post">
            <div class="f-group">
                <label for="">Full Name</label>
                <input type="text" name="fullName" placeholder="e.g Adebola Shayo" class="control" require>
            </div>
            <div class="f-group">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="e.g adebola@gmail.com" class="control" require>
            </div>
            <div class="f-group">
                <label for="">Position</label>
                <input type="text" name="position" placeholder="e.g Fullstack Developer" class="control">
            </div>

            <button type="submit" name="create" class="button-5 btn-link">Create</button>
        </form>
    </div>
</body>
</html>