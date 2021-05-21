<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 3</title>
    <style>
        div{
            width: 500px;
            padding: 10px;
            border: solid;
            margin: auto;
            margin-bottom:20px;
        }
    </style>
</head>
<body>
<div>
    <h2>Multidimensional Arrays</h2>
<?php
    $m = [
            34,
            [4, "Php", 5.9],
            7.9,
            ['names'=>["Cotne", "Dato", "Petre"], 'age'=>21]
        ];
    foreach ($m as $item){
        if(is_array($item)){
//            print_r($item);
            foreach ($item as $v){
                if(is_array($v)){
                    foreach ($v as $value){
                        echo "<br>";
                        echo $value;
                    }
                }else{
                    echo "<br>";
                    echo $v;
                }
            }
        }else{
            echo "<br>";
            echo $item;
        }
    }
    echo "<hr>";
    echo "<pre>";
    print_r($m);
    echo "</pre>";
    echo "<hr>";
    echo $m[2];
    echo "<hr>";
    echo $m[1][2];
    echo "<hr>";
    echo $m[3]['names'][1];
?>
</div>
<div>
    <h2>Associative Arrays</h2>
<?php
    $m1 = ['name'=>"Beso", 78, 'Age'=>67, 'Mobile'=>"5991111111", 78, 'Age'=>37];
    echo "<pre>";
    print_r($m1);
    echo "</pre>";
    $m2 = ['Age'=>89];
    $m3 = array_merge($m1, $m2);
    echo "<pre>";
    print_r($m3);
    echo "</pre>";
    echo $m1['Mobile'];
    echo "<hr>";
    foreach ($m3 as $k=>$v){
        echo "<br>";
        echo $k." - ".$v;
    }
?>
</div>

<div>
    <h2>Indexed Arrays</h2>
<?php
    $m1 = array(3, 5.9, "Hello", 78);
    $m2 = [4, 9.8, "php", 8, true];
    echo $m2[2];
    echo "<hr>";
    echo $m1[3];
    echo "<hr>";
    echo "<pre>";
    var_dump($m1);
    echo "</pre>";
    echo "<pre>";
    print_r($m1);
    echo "</pre>";
    print_r($m2);
    array_push($m1, 34, 35);
    echo "<pre>";
    print_r($m1);
    echo "</pre>";
?>
</div>
</body>
</html>