<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORMS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>FORMS</h1>
    <div>
        <?php
//           echo $_GET['user_name'];
//           echo "<br>";
//           echo strlen($_GET['user_name']);
        ?>
    </div>
    <form action="action.php" method="get">
        <input type="text" name="user_name" placeholder="User Name">
        <br><br>
<!--        <button>Button</button>-->
        <input type="submit" value="SUBMIT GET">
    </form>
    <form action="action.php" method="post">
        <input type="text" name="user_name" placeholder="User Name">
        <br><br>
        <!--        <button>Button</button>-->
        <input type="submit" value="SUBMIT POST">
    </form>
</body>
</html>