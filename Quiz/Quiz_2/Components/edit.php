<?php
if(isset($_POST['update'])){
    $info = getData();
    $update_query="UPDATE `BookName` SET `PageNumber`='$info[1]',Price='$info[2]',BarCode='$info[3]',Author='$info[4]' WHERE Rollno = '$info[0]'";
    try{
    $update_result=mysqli_query($conn, $update_query);
    if($update_result){
    if(mysqli_affected_rows($conn)>0){
    echo("data updated");
    }else{
    echo("data not updated");
    }
    }
    }catch(Exception $ex){
    echo("error in update".$ex->getMessage());
    }
    }
?>