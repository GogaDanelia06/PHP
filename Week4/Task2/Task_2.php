<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task_2</title>
    <style>
    body{
    margin: 0;
}
.folder a{
    width: 100%;
    height: 100%;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:black;
    color:white;
}
*{
    box-sizing: border-box;
}
#wrapper{
    width: 100%;
    height: 500px;
    margin-top: 50px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
    background-color:black;
    color:white;
}
nav{
    width: 50%;
    height: 50px;
    box-shadow: 0px 5px 20px green;
    border-radius: 25px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    color:white;
}
nav input{
    width: 400px;
    border: none;
    outline: none;
}
nav button{
    border-radius: 25px;
    border: none;
    height: 30px;
    width: 60px;
    background-color: salmon;
    cursor: pointer;
    color: white;
}
nav button:hover{
    box-shadow: 0px 5px 2px green;
    color:white;
}
#structure, #edit{
    width: 45%;
    height: 350px;
    box-shadow: 0px 5px 20px red;
    border-radius: 25px;
}
#structure{
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 20px;
    flex-direction: column;
}
#output{
    margin-top: 20px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}
#out{
    width: 100%;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.folder, .file{
    min-width: 80px;
    height: 60px;
    box-shadow: 0px 0px 10px salmon;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-right: 20px;
    margin-bottom: 20px;
    padding: 8px;
}
.file{
    box-shadow: 0px 5px 20px red;
}
#edit form{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    height: 100%;
}
    </style>
</head>
<body>
<?php
    if (!is_dir("storage")) mkdir("storage");
    ?>
    <div id="wrapper">
        <nav>
            <?php
            function delTree($dir)
            {
                if(!is_dir($dir)) return unlink($dir);
                $files = array_diff(scandir($dir), array('.', '..'));
                foreach ($files as $file) {
                    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
                }
                return rmdir($dir);
            };
            if (count($_GET) == 0) {
                $path = "storage";
            } else {
                $key = array_keys($_GET)[0];
                $path = $key . "/" . $_GET[$key];
            }
            $folder_content = scandir($path);
            if (isset($_GET[$path])) {
                $path .= "/" . $folder_content[$_GET[$path]];
            }
            if(isset($_POST['del'])){
                delTree($_POST['del']);
            }
            include "navigation.php" ?>
        </nav>
        <div id="out">
            <div id="structure">
                <?php
                try{
                    $undo = explode("/", $path);
                    $new_path = "index.php?";
                    for($i = 0; $i < count($undo) - 2; $i++){
                        if(count($undo) > 3 && $i < count($undo) - 3){
                            $new_path .=  $undo[$i]."/";
                        }else{
                            $new_path .=  $undo[$i];
                        }       
                    } 
                    if (count($undo) > 2) {
                        $new_path .= "=".$undo[count($undo) - 2];
                    }
                }catch(Exception $ex){
                    echo "<script>alert('Cant go any further!')</script>";
                }
                echo "<a href='$new_path'>[Back]</a>";
                echo $path;
                ?>
                <div id="output">
                    <?php
                    $folder_content = scandir($path);
                    for ($i = 2; $i < count($folder_content); $i++) {
                        if(is_dir($path."/".$folder_content[$i])){
                            echo 
                            "<div class='folder'>
                                <a href='index.php?$path=$folder_content[$i]'>$folder_content[$i]</a>
                                <form method='post'>
                                    <input type='hidden' name='del' value='$path/$folder_content[$i]'>
                                    <button type='submit'>remove</button>
                                </form>
                            </div>";
                        }else{
                            echo 
                            "<div class='file'>
                                <form method='post'>
                                    <input type='hidden' name='update' value='$path/$folder_content[$i]'>
                                    <button type='submit' style='border:none; background:white;cursor:pointer;'>$folder_content[$i]</button>
                                </form>
                                <form method='post'>
                                    <input type='hidden' name='del' value='$path/$folder_content[$i]'>
                                    <button type='submit'>remove</button>
                                </form>
                            </div>";
                        }  
                    }
                    ?>
                </div>
            </div>
            <div id="edit">
                <?php include "edit.php"; ?>
            </div>
        </div>
    </div>
</body>
</html>