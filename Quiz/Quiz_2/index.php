<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
nav{
    padding: 15px;
    background: darkblue;
    display: flex;
    align-items: center;
    justify-content: space-around;
    cursor: pointer;
}
body{
    margin: 0;
    background:purple;
}

nav div{
    padding: 25px;
    background: black;
    color:white;
    border-radius: 25px;
}

nav div:hover{
    background: gray;
}

#addWrap{
    width: 100%;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
}

#addWrap input, textarea, button{
    margin-bottom: 15px;
    width: 250px;
}

#postWrap button {
    width: 100px;
    margin: 8px;
}

#postWrap table{
    border-collapse: collapse;
}
#postWrap{
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

#postWrap td, th{
    padding: 15px;
    border: solid 1px black;
}
</style>

<body>
    <?php 
        include_once "Components/navigation.php";
    ?>

    <div id="content">

    </div>
    
    <script src="app.js"></script>
</body>
</html>