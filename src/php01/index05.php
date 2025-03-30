<?php
$a=7;

if($a===5){
    echo"\$aは5です";
}else{
    echo"\$aは5以外です";
}




$people="Saburo";

switch ($people) {
    case"Taro":
    echo"太郎です";
        break;
    case"Jiro":
    echo"次郎です";
        break;
    case"Saburo":
    echo"三郎です";
    break;
}

$b=7;
$c=($b>5)?"TRUE":"FALSE";
echo$c;