<?php
for($i=0;$i<=4;$i++){
    echo$i . '<br />';
}

for($a=1;$a<=5;$a++){
    echo$a*2 . '<br />';
}


$b= 0;
while($b<3){
    echo 'b= ' . $b . '<br />';
    $b+=1;
}

$count=0;
while($count<=20){
    echo $count . '<br />';
    $count+=1;
}

$count1=0;
while ($count1 <= 100){
    if ($count1 === 20){
        break;
    }
    if ($count1 % 3 === 0){
        $count1++;
        continue;
    }
    echo $count1 . '<br />';
    $count1++;
}

$num=0;
do{
    echo "num=" . $num . '<br />';
    $num+=1;
}while($num<3);