

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
         <style>
            input[type=text] {
                width: 20%;
                display: flex;
                margin: 0 auto;  
            }
            input[type=submit] {
                text-align: center;
                display: flex;
                justify-content: center;
                margin: 0 auto;
                margin-top: 20px;
            }
            label {
                text-align: center;
            }
            table {
                color:black;
                background-color: red;
                text-align: center;
            }
            #form {
                border: 2px solid green;
                width: 50%;
margin: 0 auto;
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
    
    <section>
<!--<pre>-->
<?php
 include 'words.php';
 include 'dbConnect.php';
?>	

<!--        <div id="form" style="border:5px solid black;">
            <form action="words.php" method="POST">
            <label for="word1">תשובה ראשונה </label>
            <input type="text" name="word1"/>
            <input type="submit" value="שלח" />
                
        </form>
        </div>-->
            

</section>
    
    
    <footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>רקע קצת שטויות</h3>
							<p>נמצא מה לרשום</p>
						</section>
						<section>
							<h4>צוות יוצרים</h4>
							<ul class="alt">
								<li><a href="#">אוריה</a></li>
								<li><a href="#">אלעד</a></li>
								<li><a href="#">דבורה</a></li>
							</ul>
						</section>
						<section>
							<h4>מצאו אותנו</h4>
							<ul class="plain">
								<li><a href="https://www.facebook.com/OriaMalul"><i class="icon fa-facebook">&nbsp;</i>פייסבוק</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>אינסטגרם</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>גיט</a></li>
							</ul>
						</section>
					</div>
					<div style="color: white;" class="copyright">
						&copy; OriaMalul</a>.
						<button style="float: left;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
					</div>
				</div>
			</footer>
    
    			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/script.js"></script>
                        <script>
                        /*
                         * 
                         * <div id="demo">
  <h2>Let AJAX change this text</h2>
  <button type="button" onclick="loadDoc()">Change Content</button>
</div>
    
                         * function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
                         */
                        </script>
</body>
</html>
