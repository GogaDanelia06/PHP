<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_5</title>
    <style>
    
    #wrapper{
    margin: auto;
    width: 700px;
    height: 400px;
    border-radius: 20px;
    box-shadow: 0px 0px 50px green;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
}

*{
    box-sizing: border-box;
}

h4{
    text-align: center;
}

.error{
    color: red;
    font-size: 8px;
}
textarea{
    resize: none;
}
form{
    width: 95%;
    height: 95%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
}

#personal{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

#personal div{
    text-align: right;
    margin-top: 5px;
}

.inner{
    height: 50px;
}

#personal input{
    width: 120px;
}

form label{
    font-size: 14px;
}
#gender_wrap{
    width: 100%;
    text-align: left;
}


.display{
    border: solid 1px black;
}

table{
    border-collapse: collapse;
    margin: auto;
    margin-top: 40px;
}

td, th{
    border: solid 1px black;
    padding: 10px;
}

th{
    font-weight: bold;
}
    </style>
</head>

<body>

    <?php
        include 'validation_library.php';
        $user_values = [
            'name_value' => "",
            'email_value' => "",
            'website_value' => "",
            'comment_value' => "",
            'gender_value' => ""
        ];
        $error_list = [
            'name_error' => "",
            'email_error' => "",
            'gender_error' => ""
        ];

        $status = [
            "",
            "",
            ""
        ];

        if(isset($_POST['sub'])){
            $user_values = set($user_values, array_keys($user_values), [$_POST['name'],$_POST['email'],$_POST['website'],$_POST['comment'], $_POST['gender']]);
            for($i = 0; $i < sizeof($status); $i++){
                if($i+1 == $user_values['gender_value']){
                    $status[$i] = "checked";
                }
            }
            $error_list['name_error'] = validate_name($user_values['name_value']);
            $error_list['email_error'] = validate_email($user_values['email_value']);
            $error_list['gender_error'] = validate_gender($user_values['gender_value']);
        }

    ?>

    <div id="wrapper">
        <h4>PHP Form Validation Example</h4>
        
        <span class="error" style="text-align: left; width:95%;">* requred fields</span>
        <form method="post">
            <div id="personal">
                <div class="inner">
                    <div>
                        <label for="name">Name<span class="error">*</span>:</label>
                        <input type="text" name="name" value="<?=$user_values['name_value']?>">
                    </div>

                    <div class="error"><?=$error_list['name_error']?></div>
                </div>
                <div class="inner">
                    <div>
                        <label for="email">Email<span class="error">*</span>:</label>
                        <input type="text" name="email" value="<?=$user_values['email_value']?>">
                    </div>
                    <div class="error"><?=$error_list['email_error']?></div>
                </div>
                <div class="inner">
                    <div>
                        <label for="website">Website: </label>
                        <input type="text" name="website" value="<?=$user_values['website_value']?>">
                    </div>
                    
                </div>
            </div>

            <div id="gender_wrap">
                <label for="gender">Gender<span class="error">*</span>:</label>
                <input type="hidden" name="gender" value="0" checked>
                <input type="radio" name="gender" value="1" <?=$status[0]?>>
                <label>male</label>
                <input type="radio" name="gender" value="2" <?=$status[1]?>>
                <label>female</label>
                <input type="radio" name="gender" value="3" <?=$status[2]?>>
                <label>other</label>
                
                <span class="error"><?=$error_list['gender_error']?></span>
            </div>
            <textarea name="comment" id="" cols="78" rows="10" placeholder="Type Comment Here ...."><?=$user_values['comment_value']?></textarea>
            <button type="submit" name="sub">Submit</button>
        </form>
    </div>

    <?php
        if(!error_check($error_list) && isset($_POST['sub'])){
    ?>
        <table>
            <tr>
                <?php
                    foreach($user_values as $key => $value){
                ?>
                    <th><?=$key?></th>
                <?php
                    }
                ?>
            </tr>

            <tr>
                <?php
                    foreach($user_values as $value){
                ?>
                    <td><?=$value?></td>
                <?php
                    }
                ?>
            </tr>

        </table>

    <?php
        }
    ?>
</body>

</html>