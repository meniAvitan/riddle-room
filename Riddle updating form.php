<?php

 $connection=mysqli_connect("localhost","root","","riddlehall2");

$query="SELECT * FROM `riddle` WHERE 1 ";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>"טופס עדכון חידות"</h1>

<form action="Riddle updating form.php" method="post">
    
<input type="text" name="name" placeholder="הקלד את שם החידה"><br>
<input type="text"  name="content" placeholder="הקלד את החידה"><br>
<input type="text" name="good_ans" placeholder="הקלד מספר תשובה נכונה"><br>
<input type="text"  name="time_to_ans" placeholder="זמן לענות על תשובה בשניות"><br>
<input type="text" name="ans_1" placeholder="פתרון 1"><br>
<input type="text"  name="ans_2" placeholder="פתרון 2"><br>
<input type="text" name="ans_3" placeholder="פתרון 3"><br>
<input type="text"  name="ans_4" placeholder="פתרון 4"><br>
 
  

  <select name="id" id="">
   <?php
      
      while($row = mysqli_fetch_assoc($result)){
          $id =$row['id'];
        echo   "<option value='$id'>$id</option>";
      }
      ?>
</select>
   <input type="submit" name="submit" value="UPDATING"/>


 
   
    
    
</form>



</body>
</html>