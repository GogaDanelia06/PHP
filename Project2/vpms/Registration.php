<div id="addWrap">
    <input type="text" id="user_name" placeholder="Username" required>
    <input type="email" id="user_email" placeholder="Email" required>
    <input type="password" id="user_password" placeholder="Password" required>
    <button onclick="userRegister()">Register</button>
    <span id="addResponse"></span>
</div>

<?php
if(isset($_POST['reason']) && $_POST['reason'] == "register"){
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $reg_date = date("Y-m-d H:i:s");
        $regQuery = "
            INSERT INTO users (user_name, user_email, user_password, reg_date)
            VALUES ('$user_name', '$user_email', '$user_email', '$reg_date')
        ";

        if(mysqli_query($conn, $regQuery)){
            echo "Success in Registration";
        }else{
            echo "Registration Failed";
        }

    }
?>