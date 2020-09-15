<?php

if (isset ($_POST ['submit'])){
    $name=$_POST['name'];
    $content=$_POST['content'];
    $good_ans=$_POST['good_ans'];
    $time_to_ans=$_POST['time_to_ans'];
    $ans_1=$_POST['ans_1'];
    $ans_2=$_POST['ans_2'];
    $ans_3=$_POST['ans_3'];
    $ans_4=$_POST['ans_4'];
    echo $name,$content,$good_ans,$time_to_ans,$ans_1,$ans_2,$ans_3,$ans_4;
    $connection=mysqli_connect("localhost","root","","riddlehall2");
    if($connection)
    {
        echo "ok";
    }else
    {
        echo "no";
    }
    
    $query="INSERT INTO `riddle`(`name`, `content`, `good_ans`, `time_to_ans`,`ans_1`, `ans_2`, `ans_3`, `ans_4`)";
    $query.="VALUE ('$name','$content','$good_ans','$time_to_ans','$ans_1','$ans_2','$ans_3','$ans_4')";
    
    $result=mysqli_query($connection,$query);
    
    


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>"טופס הכנסת  חידות"</h1>
<form action="Riddle creation form.php" method="post">
    
<input type="text" name="name" placeholder="הקלד את שם החידה"><br>
<input type="text"  name="content" placeholder="הקלד את החידה"><br>
<input type="text" name="good_ans" placeholder="הקלד מספר תשובה נכונה"><br>
<input type="text"  name="time_to_ans" placeholder="זמן לענות על תשובה בשניות"><br>
<input type="text" name="ans_1" placeholder="פתרון 1"><br>
<input type="text"  name="ans_2" placeholder="פתרון 2"><br>
<input type="text" name="ans_3" placeholder="פתרון 3"><br>
<input type="text"  name="ans_4" placeholder="פתרון 4"><br>

<input type="submit" name="submit"/>
   
    
    
</form>



</body>
</html>