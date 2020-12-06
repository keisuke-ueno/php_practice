<?php
echo "hello php";
echo "\n";

$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥"
    ];
    $value = 6;
    echo $animals["bird"] ."\n";;
    echo $animals["cat"] ."\n";
    echo $animals["dog"] ."\n";;
    $a = 3;
    $b = 7;
    echo $a+$b;
    echo "\n";
    
    $array_manth=["1月","２月","３月","４月","５月"];
    echo $array_manth [4];
    echo "\n";
    $hello = "hello";
    $name = "keisuke";
    $world = "'sWorld";
    echo $hello.$name.$world;
    echo "\n";
    $tech_boost = "tech";
    $tech_boost .= " boost";
    echo $tech_boost;
    echo "\n";
    $calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月",
];
echo $calendar_2018["December"];
echo "\n";
$integer = 20;
$string = "abc";
echo $integer;
echo "\n";
echo $string;
echo "\n";
$new_integer =$integer + 10;
echo $new_integer;
echo "\n";
    $value = 10;
    $result = $value ==20;
    var_dump($result);
    $height = 160;
    if ($height < 150) {
        echo "150cm未満の方はご乗車できません。";
    }else {
        echo "ご乗車になれます。";
        echo "\n";
    }
    $height = 230;
    if ($height<150){
        echo "150cm未満の方はご乗車できません。";
    }else if($height>=200){
        echo "200cm以上の方はご乗車できません。";
        echo "\n";
    }
    else{
        echo "ご乗車になれましす。";
        echo "\n";
    }
    $height = 168;
    if ($height<150){
        echo "150cm未満の方はご乗車できません。";
        echo "\n";
    }
    else if ($height>=200){
        echo "200cm以上の方はご乗車できません。";
        echo "\n";
    }
    else {
        echo "ご乗車できます。";
        echo "\n";
    }
    $weekday = "月曜";
    switch ($weekday) {
        case "月曜":
            echo "可燃ごみの日です。";
            echo "\n";
            break;
            case "水曜":
                echo "資源ごみの日です。";
                break;
                default:
                    echo "回収はありません。";
                    break;
    }
    $weekday = "木曜";
    switch ($weekday){
        case "月曜":
        case "木曜":
        echo "可燃ごみの日です。";
        echo "\n";
        break;
        case "水曜":
        echo "資源ごみの日です。";
        break;
        default:
            echo "回収はありません。";
            break;
    }
    $a = 3;
    $b = 3;
    $c = "3";
    var_dump($a == $b);
    var_dump($a != $b);
    var_dump($a > $b);
    var_dump($a !==$c);
    for($i = 0; $i < 10; $i++){
        echo $i;
    }
    $total = 0;
    echo $total;
    echo "\n";
    for ($i=0;$i<=100;$i++){
     $total+=$i;    
    }
    echo $total;
    echo "\n";
    $fruits = array("apple","orange","lemon");
    echo count($fruits);
    echo "\n";
    for ($i = 0; $i <count($fruits);$i++){
        echo "要素は". $fruits[$i];
        echo "\n";
    }
    for ($i = 0; $i <count($fruits); $i++){
        echo "このフルーツは、".$fruits[$i];
        echo "\n";
    }
    $animals = array("dog","cat","panda");
    foreach($animals as $animal){
        echo "要素は".$animal;
        echo "\n";
    }