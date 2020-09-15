    <?php


    $mysqli=openDb();

    $q="SELECT * FROM `riddle` WHERE 1";
    $result = mysqli_query($mysqli,$q);
    $row = mysqli_fetch_assoc($result);
    
    $redele = array("name"=>"", "content"=>"", "Answer1"=>"", "Answer2"=>"", "Answer3"=>"", "Answer4"=>"");
    $redele_rand= array_rand($row);
    $chosen = [];

    closeDb($mysqli);
        
        
function openDb(){
    include 'newredelroomp.php';
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_schema);
    return $mysqli;
}
function closeDb($mysqli){
    mysqli_close($mysqli);
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
      <?php
        while(mysqli_fetch_assoc($result))
        {
            ?>
            <pre>
            <?php
            print_r($row);
            ?>
            </pre>
            <?php
            
        }
            
        
        ?>
       
    </body>
</html>