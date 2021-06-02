<?php
    require_once "../db_connect.php";
    if(isset($_POST['reason']) && $_POST['reason'] == "update"){
        $id = $_POST['id'];
        $myQue = "
            SELECT *
            FROM BooksInfo
            WHERE id = '$id'
        ";

        $respose = mysqli_fetch_assoc(mysqli_query($conn, $myQue));
        $BookName = $respose['BookName'];
        $PageNumber = $respose['PageNumber'];
        $Price = $respose['Price'];
        $BarCode = $respose['BarCode'];
        $Author = $respose['Author'];

        $result = "
        <div id='addWrap'>
            <input type='hidden' id='id' value='$id' required>
            <input type='text' id='BookName' value='$BookName' required>
            <input type='number' id='PageNumber' value='$PageNumber' required>
            <input type='number' id='Price' value='$Price' required>
            <textarea id='BarCode' cols='30' rows='10' required>$BarCode</textarea>
            <input type='text' id='Author' value='$Author' required>
            <button onclick='updateProduct()'>Update Product</button>
            <span id='addResponse'></span>
        </div>
        ";
        echo $result;
    }

?>