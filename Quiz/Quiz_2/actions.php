<?php
    require_once "db_connect.php";

    if(isset($_GET['page'])){
        echo file_get_contents("Components/".$_GET['page']);
    }

    if(isset($_POST['reason']) && $_POST['reason'] == "upload"){

        $BookName = $_POST['BookName'];
        $PageNumber = $_POST['PageNumber'];
        $Price = $_POST['Price'];
        $BarCode = $_POST['BarCode'];
        $Author = $_POST['Author'];
        $myQuery = "
            INSERT INTO BooksInfo(BookName, PageNumber, Price, BarCode, Author)
            VALUES ('$BookName', '$PageNumber', '$Price', '$BarCode', '$Author')
        ";

        if(mysqli_query($conn, $myQuery)){
            echo "Success!";
        }else{
            echo "Failed!";
        }
    }

    if(isset($_POST['reason']) && $_POST['reason'] == "update"){

        $id = $_POST['id'];
        $BookName = $_POST['BookName'];
        $PageNumber = $_POST['PageNumber'];
        $Price = $_POST['Price'];
        $BarCode = $_POST['BarCode'];
        $Author = $_POST['Author'];
        $myQuery = "
            UPDATE BooksInfo
            SET BookName = '$BookName', PageNumber='$PageNumber', Price = '$Price', BarCode = '$BarCode', Author = '$Author' 
            WHERE id = '$id'
        ";
        mysqli_query($conn, $myQuery);
    }

    if(isset($_POST['reason']) && $_POST['reason'] == "Book"){
        $productQuery = "
            SELECT * 
            FROM BooksInfo
        ";
        $fromdb = mysqli_query($conn, $productQuery);

        $result = [];
        while($res = mysqli_fetch_assoc($fromdb)){
            array_push($result, $res);
        }
        echo json_encode($result);
    }

    if(isset($_POST['reason']) && $_POST['reason'] == "delete"){
        $product_id = $_POST['id'];
        $delQuery = "
            DELETE FROM BooksInfo
            WHERE id = '$id'
        ";
        mysqli_query($conn, $delQuery);
    }

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