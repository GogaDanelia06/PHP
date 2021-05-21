<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ClassWork1</title>
    <style>
        div{
            width: 500px;
            padding: 10px;
            border: solid;
            margin: auto;
            margin-bottom:20px;
        }
        .error{
            color: red;
            font-size: 14px;
        }
        table{
            margin-top: 30px;
            border: solid black 1px;
            border-collapse: collapse;
        }
        table td {
            border: solid black 1px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
        $user_error = "";
        $old_user = "";
        $data_bool = false;
        if(isset($_POST['send_user'])){
            $old_user = $_POST['user'];
            if(empty($_POST['user'])){
                $user_error = "user field is empty";
            }else{
                $data_bool = true;
            }
        }
    ?>
    <div>
        <form method="post">
            <input type="text" name="user" value="<?=$old_user?>"> *
            <label class="error"><?=$user_error?></label>
            <br><br>
            <button name="send_user">Submit</button>
        </form>
        <?php
            if($data_bool){
        ?>
        <table class="">
            <tr>
                <td>User: </td>
                <td><?=$old_user?></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </div>
</body>
</html>
