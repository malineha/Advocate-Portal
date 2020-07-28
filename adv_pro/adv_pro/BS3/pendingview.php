<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="gray" data-image="assets/img/sidebar.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                 <h> <b> <font size="+1">ADVOCATE DESHPANDE</font></b></h>
            
            </div>

            <ul class="nav">
            <li class="active">
                    <a href="pending.php">
                        <i class="pe-7s-note2"></i>
                        <p>Pending Appointments</p>
                    </a>
                </li>
                <li >
                    <a href="appointment.php">
                        <i class="pe-7s-note2"></i>
                        <p>Appointments</p>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Comment Box</p>
                    </a>
                </li>
                
                
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Pending Appointments</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        
                        <li>
                            <a href="index.html">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav><br><br>
        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">PENDING CASE DETAILS</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" >
                                
<?php 
$con=mysqli_connect("localhost","root","","advocate"); 
if (mysqli_connect_errno()) 
{ 
echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}


$id = $_GET['id'];
if(isset($id)) {

$result = mysqli_query($con,"SELECT * FROM appointment where id=".$id);

while($row = mysqli_fetch_array($result)) 
{ 
 echo"<br><br>";


        echo "<b>Name:</b>".$row["name"]."<br><b>Email:</b>".$row["email"]."<br><b>Contact no:</b>".$row["mobile"];
        echo "<br><b>Address:</b>".$row["add_line1"]."  ".$row["add_line2"]."<br><b>City:</b>".$row["city"]."<br><b>Zip Code:</b>".$row["zipcode"]."<br><b>Date:</b>".$row["date"]."<br><b>Time:</b>".$row["time"];
        echo"<br><b>Case Type:</b>".$row["case_type"];
  echo"<tbody><tr><td><a href='accept.php?id=" . $row['id'] . "'><button id=". $row['id'] .">Accept</button></a></td><td><a href=pending.php><button>Close</button></a></td></tr></tbody>";
    

} 
echo "</table>"; 
}

mysqli_close($con); 
?>


                            </div>
                        </div>
                    </div>


                    
                    </div>


                </div>
            </div>
        </div>

       
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</html>
