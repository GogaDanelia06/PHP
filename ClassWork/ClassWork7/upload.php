<!doctype html>
<html lang="en">
<head>
    <title>Upload</title>
    <style>
    .upload{
    width: 500px;
    min-height: 100px;
    border: solid 5px green;
    margin: 20px auto;
    padding: 10px;
    background-color: beige;
}

.root{
    width: 500px;
    min-height: 100px;
    border: solid 5px green;
    margin: 20px auto;
    padding: 10px;
    background-color: beige;
}

.file{
    width: 700px;
    min-height: 100px;
    border: solid 5px green;
    margin: 20px auto;
    padding: 10px;
    background-color: beige;
}

.file .tittle{
    background-color: aquamarine;
    font-size: 1.5em;
    font-weight: bold;
}

.file .text{
    background-color: white;
    margin: 0;
}

.file .autor{
    background-color: white;
    margin: 0;
    border-bottom: solid 3px black;
}
    </style>
</head>
<body>
    <div class="upload">
        <?php
            if(isset($_GET['folder'])){
                mkdir("root");
            }
            if(is_dir("root")){
                echo '<p><a target="_blank" href="root.php">Root Folder</a></p>';
            }else{
               echo '<p><a href="upload.php?folder=root">Make Root Folder</a></p>';
            }
            $size_error = "";
            $type_error = "";
            if(isset($_POST['upload'])){
                $file = $_FILES['file'];
//                print_r($file);
                if($file['size']>10*1024*1024){
                    $size_error = "Error of Size!!!";
                }
                $file_type = pathinfo($file['name'], PATHINFO_EXTENSION);
//                echo $file_type;
                if($file_type!="txt"){
                    $type_error = "Error of Type";
                }
                if(empty($size_error)&&empty($type_error)){
                    date_default_timezone_set("Asia/Tbilisi");
                    $file_patch = "root/".date('Y-m-d-h-i-sa').".".$file_type;
                    move_uploaded_file($file['tmp_name'], $file_patch);
                }
            }
        ?>
        <p><?=$size_error?></p>
        <p><?=$type_error?></p>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <br><br>
            <button name="upload">Upload File</button>
        </form>
    </div>
</body>
</html>