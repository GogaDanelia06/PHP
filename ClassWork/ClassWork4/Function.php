<?php 
function f1(){
    echo "<h1>Function</h1>";
}
function f2($name="Goga", $lastname="Danelia"){
    echo "<h1>Hello $name</h1>";
}
function f3(){
    return "Hello Function";
}
function f4($x, $y, $z){
    return 2*$x+$y-$z;
}

f1();
f1();
echo "<hr>";
f2("Goga", "Danelia");
echo "<hr>";
echo f4($y=4, $x=5, $z=8);

function f5($N){
    if($N==1){
        return 1;
    }
        return $N*f5($N-1);
    }
    echo "<hr>";
    echo f5(5); //1*2*3*4*5=120