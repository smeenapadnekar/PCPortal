
<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> MEC Placement Cell</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#"" class="simple-text">
                    <img src="assets/img/llogo.jpeg" width="32px" height="32px">Placement Cell <br></a><span style="font-size: 16px">Model Engineering College</span>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="home.html">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                 <li class="active">
                    <a href="profile.php">
                        <i class="pe-7s-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="uploadResume.php">
                        <i class="pe-7s-id"></i>
                        <p>Resume</p>
                    </a>
                </li>
                <li>
                    <a href="message.php">
                        <i class="pe-7s-mail"></i>
                        <p>Messages</p>
                    </a>
                </li>
                <li>
                    <a href="notification.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li>
                    <a href="registeration.php">
                        <i class="pe-7s-credit"></i>
                        <p>Company Registraion</p>
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
                    <a class="navbar-brand" href="#">Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        <?php
                                            $var= $_SESSION['susername'];
                                            //echo $var;
                                            include("dbconnect.php");
                                            $sql="SELECT Name FROM student where Roll_No='$var'";
                                            $result=mysqli_query($conn,$sql);
                                            $row=mysqli_fetch_assoc($result);
                                            echo $row['Name'];
                                        ?>
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="logout.php">Logout</a></li>
                               
                              </ul>
                        </li>
                        
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12   ">
                        <div class="card">
                            
                            <div class="content">
                        
                                   

                                    <div class="row">
                                        <div >
                                         <?php
           //include("dbconnect.php");
           //session_start();
           $var=$_SESSION['susername'];//$_SESSION['susername'];
            $sql="SELECT * FROM student WHERE Roll_No='$var' ";
            $result=mysqli_query($conn,$sql);
            if (mysqli_num_rows($result)>0) {
                $row=mysqli_fetch_assoc($result);
                 echo " <div class=\"alert alert-block alert-danger col-md-12\" style=\"background-color: #87ceeb; text-color:#9AFEFF  \" >  ";
                echo "<tab>ROLL NUMBER : <b>".$row["Roll_No"]."</b>";
                echo "<br>ADMISSION NUMBER : <b>".$row["Adm_No"]."</b>";
                echo "REGISTER NUMBER : <b>".$row["Reg_No"];
               //  echo " <div class=\"alert alert-block alert-danger\" style=\"background-color: #87ceeb; text-align: left  \" >  ";
                echo "<br>NAME : <b>".$row["Name"]."</b>";
                echo "<br>CLASS : <b>".$row["Class"]."\t"."</b>BRANCH : <b>".$row["Branch"]."</b>";
                echo "<br>GENDER : <b>".$row["Gender"]."</b>";
                echo "<br>DATE OF BIRTH : <b>".$row["DOB"]."</b>"; 
                echo "<br>EMAIL ID : <b>".$row["Email"]."</b>";
                echo "<br>Contact NUMBER : <b>".$row["Contact_no"]."</b>";
                echo "<br>ADDRESS : <b>".$row["Address"]."</b>";
                echo "<br>FATHER'S NAME : <b>".$row["Father"]."</b>\tMOTHER'S NAME : <b>".$row["Mother"]."</b>";
                echo "<br>FATHER'S CONTACT : <b>".$row["Fthr_Contact"]."</b>\tMOTHER'S CONTACT : <b>".$row["Mthr_Contact"]."</b>";
                echo "<br>FATHER'S EMAIL : <b>".$row["Fthr_email"]."</b>\tMOTHER'S EMAIL : <b>".$row["Mthr_email"]."</b>";
                echo "<br><br><br>";
                echo "<br>10th MARK: <b>".$row["Mark10"]."</b>";
                echo "<br>12th MARK: <b>".$row["Mark12"]."</b>";
                echo "<br>DIPLOMA MARK: <b>".$row["Diploma"]."</b>";
                echo "<br><br>SEMESTER I & II MARK: <b>".$row["Sem1_2"]."</b>"; 
                echo "<br>SEMESTER III MARK: <b>".$row["Sem3"]."</b>";
                echo "<br>SEMESTER IV MARK: <b>".$row["Sem4"]."</b>";
                echo "<br>SEMESTER V MARK: <b>".$row["Sem5"]."</b>";
                echo "<br>SEMESTER VI MARK: <b>".$row["Sem6"]."</b>";
                echo "<br>SEMESTER VII MARK: <b>".$row["Sem7"]."</b>";
                echo "<br>SEMESTER VIII MARK: <b>".$row["Sem8"]."</b>";
                echo "<br>CGPA: <b>".$row["Cgpa"]."</b>";
                echo "<br>GATE SCORE: <b>".$row["Gate_score"]."</b>";

            }

       ?>
       <!-- display all info-->
        <div align="right">


<button onclick="location.href='editprofile.php'" type="button">
     Update Profile</button>

        </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <footer class="footer">
            <div class="container-fluid">
            
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.mec.ac.in">Govt. Model Engineering College</a>
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>