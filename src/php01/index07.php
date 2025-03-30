<?php
function outoputNumber($a){
    echo"引数の値は" .$a. "です";
    return ;
}
outoputNumber(2);


function outputHello(){
    echo"Hello world";
}
outputHello();
echo "<br />";


function exam($score1,$score2,$score3){
    $total=$score1+$score2+$score3;
    if($total>210){
        echo "合計点は" . $total . "なので合格です";
    }else{
        echo "合計点は" . $total . "なので不合格です";
    }
}
echo exam(80,60,0),"<br />";
echo exam(100,70,80),"<br />";


function getSquarArea($base,$height){
    return $base*$height;
}
function getTriangleArea($base,$height){
    return $base*$height/2;
}
function getTrapezoidArea($upperBase,$lowerBase,$height){
    return($upperBase+$lowerBase)*$height/2;
}
echo getSquarArea(5,5) . "\n";
echo getTriangleArea(7,8) . "\n";
echo getTrapezoidArea(4,5,4);