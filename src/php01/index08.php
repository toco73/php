<?php
$people=array('Taro','Jiro','Saburo');
var_dump($people);
echo "<br>";

echo $people[0] ;
echo "<br>";

$members=array(
    'person1'=>'taro',
    'person2'=>'jiro',
    'person3'=>'saburo'
);
var_dump($members);
echo "<br>";

$member_list=[
    'person1'=>'taro',
    'person2'=>'jiro',
];
echo $member_list['person2'];
echo "<br>";

$people_list=[
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
];
echo $people_list[0]["last_name"];
echo "<br>";

$persons=array('taro','jiro','saburo');
foreach($persons as $person){
    echo $person; 
    echo '<br />';
}

$member = array(
    'person1' => 'taro',
    'person2' => 'jiro',
    'person3' => 'saburo'
);
foreach($member as $person => $name){
    print $person. "は" . $name . "です" . '<br />';
}

$peoples=[
    [
        "Taro",25,"men"
    ],
    [
        "Jiro",20,"men"
    ],
    [
        "hanako",16,"women"
    ]
];
foreach($peoples as $person){
    echo $person[0].'('.$person[1].'歳'.$person[2].')'.'<br />';
}