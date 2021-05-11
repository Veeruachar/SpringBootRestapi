<html>
<head>  
        <meta name="viewport" content="width=divice-width,initial-scale=1,user-scalable=no"/>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <div class="header">
        <div><img src="image/ida.png" width=10% height=100%></div>
        <div>
            <h2 class="htext"><i>District dental association<br>Ballari</i></h2>
        </div>
    </div>
    <br>
    <nav>
        <h1 class="brand"><a href="#">MENU</a></h1>
        <ul>
            <li><a href="index.html">HOME</a></li>
             <li><a href="#">ABOUT</a></li>
             <li><a href="#">PORTFOLIO</a></li>
             <li><a href="events.html">EVENTS</a></li>
             <li><a href="#">CONTACT</a></li>
             <li><a href="#">PUBLICATIONS</a></li>
             <li><a href="membership2.html">MEMBERSHIP</a></li>
            
        </ul>
        <div style="clear:both"></div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div style="position:relative;
        font-size:8pt; font-family: 'Trebuchet MS';">
        <center>
        <h1>
        <?php
        $con=mysqli_connect("localhost","root","","auth") or die(mysql_error());
        echo"<a href='index.html' style='float:left;padding-left:3%;'>"."back"."</a>";
        echo "Memebers details details";
        echo "<table border='3'><tr><th>id</th><th>Name</th><th>email</th><th>Membershiptype</th></tr>";
        $sel="select * from events";
        $i=0;
        if($qh=mysqli_query($con,$sel)) {
        while($row=mysqli_fetch_row($qh)) {
        echo "<tr> <td> <b>", $row[0]," </b> </td> <td> <b>", $row[1]," </b> </td> <td> <b>",$row[2]," </b> </td> <td> <b>",$row[3],"
        </b> </td> </tr>";
        $i=$i+1;
        }
        mysqli_free_result($qh);
        echo "</table>";
        $count=$i;
        }

        ?>
        </h1>
        </center>
        </div>
    </body>
</head></html>