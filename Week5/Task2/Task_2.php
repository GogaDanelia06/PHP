<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task_2</title>
    <style>
    body{
        background:black;
    }
    #upload, #preview{
    margin: 20px auto;
    border-radius: 30px;
    width: 350px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0px 5px 15px green;
    padding: 25px;
}
#preview{
    width: 800px;
    flex-direction: row;
    flex-wrap: wrap;
}
.error{
    font-size: 20px;
    color: red;
}
.sucess{
    font-size: 20px;
    color: lightgreen;
}
.message{
    font-size: 20px;
    color: white;
}
.item{
    width: 250px;
    min-height: 90px;
    box-shadow: 0px 0px 15px gray;
    border-radius: 25px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    margin-bottom: 20px;
    overflow: hidden;
}
.actions{
    width: inherit;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.item span{
    width: 100%;
    text-align: center;
}
a{
    text-decoration: none;
}
    </style>
</head>
<body>
<?php include "program.php"; ?>

<div id="upload">
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="myFile">
        <button name="sub">Upload</button>
    </form>
    <br>
    <div class="error"><?=$error?></div>
    <div class="sucess"><?=$message?></div>
</div>

<div id="preview">
    <?php include "preview.php"; ?>
</div>
</body>
</html>