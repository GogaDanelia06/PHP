<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week_4</title>
    <style>
    header {
        border: solid 5px blue;
        height: 150px;
        background-color:darkgreen;
        margin:auto;
        margin-bottom:10px;
        width:70%;
    }
    .body { 
        border: solid 5px blue;
        height: 250px;
        background-color:gray;
        margin:auto;
        width:70%;
        margin-bottom:10px;
        min-height:150px;
    }

    footer {
        border: solid 5px blue;
        height: 150px;
        background-color:pink;
        margin:auto;
        width:70%;
        margin-bottom:10px;
        min-height:150px;
    }
    </style>
</head>
<body>
    <?php
    if(isset($_GET['profile'])){
        include("blocks/profile.php");

    } else{
        include("blockes/authorization.php");
    }
    for($i=0; $i<5; $i++){
        @include("blcoks/header.php")
    }

    include("blocks/header.php");
    include_once("blocks/body.php");
    include("blocks/header.php");
    require("blocks/header.php")
    ?>
</body>
</html>