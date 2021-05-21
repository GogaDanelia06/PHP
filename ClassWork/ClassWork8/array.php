<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $m = [4, "Nato", 23, 34, "Gvanca"];
            print_r($m);
            $r = rand(0, 5);
            echo "<br>";
            echo $r;
            $n = [rand(0, 5), rand(0, 5), rand(0, 5)];
            echo "<br>";
            print_r($n);
            $n1 = [];
            for($i=0; $i<50; $i++){
                array_push($n1, rand(0, 5));
            }
            echo "<br>";
            print_r($n1);
            //დაბეჭდეთ 5 სიმბოლოანი ქართული შემთხვითი სიტყვა.
            //დფჯფდ,  სდკჯვ, სკჯვკ,
            // ა, ბ, გ, დ, ე,  ააააა,
            echo "<br>";
            $abc = "აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ";
            echo strlen($abc);
            echo "<br>";
            echo $abc[7];
            echo "<br>";
            $arr1 = str_split($abc);
            print_r($arr1);
            echo "<br>";
            echo mb_strlen($abc);
            $abc = ['ა', 'ბ', 'გ', 'დ', 'ე', 'ვ', 'ზ', 'თ'];
            $word = "";
            for($i=0; $i<5; $i++){
                $word .= $abc[rand(0, count($abc)-1)];
            }
            echo "<br>";
            echo $word;
            echo "<br>";
                print_r($_POST);
            echo "<br>";
            foreach ($_POST as $k=>$v){
                echo "<h4>";
                    echo $k." - ".$v;
                echo "</h4>";
            }
        ?>
    </div>
    <form action="" method="post">
        <input type="text" name="user">
        <br><br>
        <input type="number" name="age">
        <br><br>
        <input type="password" name="pass">
        <br><br>
        <button>Data</button>
    </form>
</body>
</html>