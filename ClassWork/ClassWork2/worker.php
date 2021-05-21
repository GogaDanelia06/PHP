<h1>Worker</h1>
<?php
    if(isset($_GET['user']))  echo $_GET['user'];
    echo "<hr>";
    if(isset($_GET['pass']))  echo $_GET['pass'];
    echo "<hr>";
    print_r($_GET);
    echo "<hr>";
    if(isset($_GET['cat'])) echo $_GET['cat'];
//    $user = $_GET['user'];
?>

<h1>
    <?=$_GET['user']?>
</h1>