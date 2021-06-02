<?php
require_once "../db_connect.php";
if(isset($_POST['delete'])){
    $info = getData();
    $delete_query = "DELETE FROM `idusnew` WHERE Rollno = '$info[0]'";
    try{
    $delete_result = mysqli_query($conn, $delete_query);
    if($delete_result){
    if(mysqli_affected_rows($conn)>0)
    {
    echo("data deleted");
    }else{
    echo("data not deleted");
    }
    }
    }catch(Exception $ex){
    echo("error in delete".$ex->getMessage());
    }
    }
?>