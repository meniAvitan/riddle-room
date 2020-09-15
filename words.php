<?php


function getArray(){
include 'dbConnect.php';
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_schema);


$q = "SELECT * FROM `fix_words_riddles` WHERE id NOT IN (SELECT `riddle_id` FROM `history_riddle` WHERE riddle_type =1)";
$result = mysqli_query($mysqli,$q);

$fixedArray = $row = mysqli_fetch_assoc($result);


$uid=1;

$t = "INSERT INTO `history_riddle`(`user_id`, `riddle_id`, `status`, `riddle_type`) VALUES ('$uid' , {$row['id']} , '0' , '1')";
//echo $t ."<br>";
$result = mysqli_query($mysqli,$t);

mysqli_close($mysqli);

return $fixedArray;
}

echo "<br>";
$fixedArray = getArray();
$origArray = array();
$messArray = array();

foreach($fixedArray as $words => $words_values){
    $pos = strpos($words, 'word');
    if($words == $pos){
     $origArray[]=$words_values;
     }

    
}
$elad="";
$chosen = array();
for($i = 0; $i < count($origArray); $i++){
    do {
        $newPlace = rand(0, count($origArray) -1);
    }while(in_array($newPlace, $chosen));
    $chosen[] = $newPlace;
    $messArray[$newPlace] = $origArray[$i];
    $elad.=$newPlace;

}
$cnt = 1;
for($d = 0; $d < count($messArray); $d++){
    echo $cnt+$d .'.'.$messArray[$d]. '<br>';
}
echo '<br>'.$elad . '<br><br>';

?>
