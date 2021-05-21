<!doctype html>
<html lang="en">
<head>
    <title>Root</title>
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
    <div class="root">
        <h2>Root Folder</h2>
        <?php
            $files = scandir("root");
            for($i=2; $i<count($files); $i++){
                echo '<p><a href="root.php?file='.$i.'">'.$files[$i].'</a></p>';
            }
        ?>
    </div>
    <div class="file">
        <?php
            if(isset($_GET['file'])){
                $file = "root/".$files[$_GET['file']];
//                echo $file;
                $f =  fopen($file, 'r');
                $file_info = fread($f, filesize($file));
                fclose($f);
//                echo $file_info;
                $posts = explode("===", $file_info);
//                print_r($posts);
                for($i=0; $i<count($posts)-1; $i++){
                    $post = explode('--', $posts[$i]);
//                    print_r($post);
                    echo "<p class='title'>$post[0]</p>";
                    echo "<p class='text'>$post[1]</p>";
                    echo "<p class='autor'>$post[2] $post[3]</p>";
                }
            }
        ?>
    </div>
</body>
</html>