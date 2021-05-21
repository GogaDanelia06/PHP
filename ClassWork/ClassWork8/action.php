<!doctype html>
<html lang="en">
<head>
    <title>Action</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Action</h1>
    <div>
        <?php
            echo $_GET['user_name'];
            echo "<br>";
            echo strlen($_GET['user_name']);
            echo "<br>";
            echo $_POST['user_name'];
            echo "<br>";
            echo strlen($_POST['user_name']);
        ?>
    </div>
</body>
</html>