<html>
<head>
    <meta name="viewport" content="width=divice-width,initial-scale=1,user-scalable=no"/>
    <title>responsiive sliding menu</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Modak&display=swap" rel="stylesheet">

</head>
<body >
    <div class="header">
        <div><img src="image/ida.png" width=10% height=100%></div>
        <div>
            <h2 class="htext"><i>District dental association<br>Ballari</i></h2>
        </div>
    </div>
    <br>
    <br>
    <nav>
        <h1 class="brand"><a href="#">MENU</a></h1>
        <ul>
            <li><a href="index.html">HOME</a></li>
             <li><a href="about.html">ABOUT</a></li>
             <li><a href="portfolio1.html">PORTFOLIO</a></li>
             <li><a href="events.html">EVENTS</a></li>
             <li><a href="contact.html">CONTACT</a></li>
             <li><a href="#">PUBLICATIONS</a></li>
             <li><a href="membership2.html">MEMBERSHIP</a></li>

            
        </ul>
        <div style="clear:both"></div>
    </nav>
    <br>
    <br>
    <br>
     <div style="position:relative;
            font-size:8pt; font-family: 'Trebuchet MS';">
            <center>
            <h1>
            <?php
                echo"<div class='path' style='padding-left: 10%;' >"."Home > evnts"."</div><br><br><br>";

            $con=mysqli_connect("localhost","root","","auth") or die(mysql_error());
            echo"<a href='index.html' style='float:left;padding-left:3%;'>"."back"."</a><br>";

            echo "Events details";
            echo "<form style='padding-left: 30%;padding-right: 30%;'>";
            echo"<div class='content'>";
            echo "<h3 style='color:darkorchid'>"."Calender of Events"."</h3>";
            $sel="select * from events";
            if($qh=mysqli_query($con,$sel)) {
            while($row=mysqli_fetch_row($qh)) {
           
            echo   "<a href='events1.html'><h3 style='color:darkorchid'>"."event name:"."$row[1]"."</h3></a>".
        "$row[2]"."<br>".$row[3]."<br>".$row[4]."<br>".$row[5]."<br>";
      echo  "<hr>";
      
            }
            mysqli_free_result($qh);
            }

             echo" </div>";
   echo" </form>";
    
    
    
   
     
  
    
    ?>
            </h1>
            </center>
    </div>
</body>
</html> 