<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>OriaMalul</title>
    <style>
        #asd{
            display: flex;
            justify-content: center;
            background-color: #111111;
            background: linear-gradient(135deg, #2f22ee 0%, #111111 74%);
            /* content: ' '; */
            position: absolute;
            width: 100%;
            height: 100%;
            resize: none;
        }
        input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 8px; /* Some padding */ 
  border: 1px solid rgb(133, 131, 131); /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: none ;/* Allow the user to vertically resize the textarea (not horizontally) */
  color:rgb(133, 131, 131);
  text-align: center;
}

label{
    color:rgb(133, 131, 131);
}


       
    </style>
</head>
<body>
    <header id="header">
        <a  class="logo" href="contact.php"><i class="icon fa-envelope-o"></i> צור קשר </a>
        <nav>
            <a href=""> דירוג <i class="icon fa-list"></i>    </a>
            <a href="quiz.php"> חידות <i class="icon fa-tasks"></i>   	</a>
            <a href="index.php"> בית <i class="icon fa-home"></i>  </a>

        </nav>
    </header>
<div id="asd">
    <section style="width: 50%; text-align: center;">
        <form action="" method="POST">
            <label for="fname">שם </label>
            <input type="text" id="fname" name="firstname" placeholder="השם שלך">
        
            <label for="lname">שם משפחה</label>
            <input type="text" id="lname" name="lastname" placeholder="שם המשפחה">
        
            <label for="city">עיר</label>
            <select id="city" name="city">
              <option value="tzfat">צפת</option>
              <option value="tel aviv">תל אביב</option>
              <option value="nahriya">נהריה</option>
              <option value="haifa">חיפה</option>
              <option value="jerusalem">ירושלים</option>
              <option value="eilat">אילת</option>
              <option value="beer-sheva">באר שבע</option>
              <option value="akko">עכו</option>
              <option value="modiin">מודיעין</option>
            </select>
        
            <label for="subject">נושא</label>
            <textarea id="subject" name="subject" placeholder="כתוב משהו"></textarea>

        <br>
            <input type="submit" value="שלח">
          </form>
    </section>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/main.js"></script></body>
</html>
