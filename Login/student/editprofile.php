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
                <li class="active">
                    <a href="home.php">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
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
                    <li >                    
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
                    <a class="navbar-brand" href="#">Edit Profile</a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form action="EditPro.php" method="POST">
                                   

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name of the student" name="Name">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Class</label>
                                                <input type="text" class="form-control" placeholder="eg CS6A" name="Class" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Branch</label>
                                                <input type="text" class="form-control" placeholder="eg CS" name="Branch" value="">
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Roll Number</label>
                                                <input type="text" class="form-control" placeholder="eg:CSU14111" name="Rollno" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Register Number</label>
                                                <input type="text" class="form-control" placeholder="University register number" name="Regno" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Admission Number</label>
                                                <input type="text" class="form-control" placeholder="6145/14" name="Admno" value"">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Year Of Admission</label>
                                                <select class="date-year form-select required" id="edit-apntugyog-year" name="YearAdm">
                                                    <option value="">-Year</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2035">2025</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Year Of Graduation</label>
                                                <select class="date-year form-select required" id="edit-apntugyog-year" name="YearGra">
                                                    <option value="">-Year</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" placeholder="Gender" name="Gender" value="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date Of Birth</label>
                                                <input type="date" class="form-control" placeholder="DOB" name="DOB" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Contact Details</h4>
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Mobile Number" name="Mob" value="">
                                            </div>
                                        </div>                                      
                                    

                                      <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" placeholder="Official Email Address" name="Email" value="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address" name="Address" value="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fathers Name</label>
                                                <input type="text" class="form-control" placeholder="Fathers Name" name="Father" value="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mothers Name</label>
                                                <input type="text" class="form-control" placeholder="Mothers Name" name="Mother" value="">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fathers Contact</label>
                                                <input type="text" class="form-control" placeholder="Fathers Contact" name="FatherContact" value="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mothers Contact</label>
                                                <input type="text" class="form-control" placeholder="Mothers Contact" name="MotherContact" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fathers Email</label>
                                                <input type="text" class="form-control" placeholder="Fathers Email id" name="FatherEmail" value="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mothers Email</label>
                                                <input type="text" class="form-control" placeholder="Mothers Email id" name="MotherEmail" value="">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gaurdian's Name</label>
                                                <input type="text" class="form-control" placeholder="Gaurdian's name" name="Gaurdian" value="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gaurdian's Contact</label>
                                                <input type="text" class="form-control" placeholder="Gaurdian's Contact" name="GContact" value="">
                                            </div>
                                        </div>
                                    </div>
                          

                                    <h4>Acadamic Details</h4>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Class 10 Mark</label>
                                                <input type="number" class="form-control" step="0.1" placeholder="Class 10 Mark" name="Class10" value="">
                                            </div>
                                        </div> 
                                    </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Class 10 Passing Year</label>
                                                <select class="date-year form-select required" id="edit-apntugyog-year" name="Year10">
                                                    <option value="">-Year</option>
                                                    <option value="2005">2008</option>
                                                    <option value="2006">2009/option>
                                                    <option value="2007">2010</option>
                                                    <option value="2008">2011</option>
                                                    <option value="2009">2012</option>
                                                    <option value="2010">2013</option>
                                                    <option value="2011">2014</option>
                                                    <option value="2012">2015</option>
                                                    <option value="2013">2016</option>
                                                    <option value="2014">2017</option>
                                                    <option value="2015">2018</option>
                                                    <option value="2016">2019</option>
                                                    <option value="2017">2020</option>
                                                    <option value="2018">2021</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Class 10 Board</label>
                                                <input type="text" class="form-control" step="0.1" placeholder="Board" name="Board10" value="">
                                            </div>
                                        </div> 
                                    </div>
                                     
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Class 12 Mark</label>
                                                <input type="number" class="form-control" step="0.1" placeholder="Class 12 Mark" name="Class12" value="">
                                            </div>
                                        </div> 
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Class 12 Passing Year</label>
                                                <select class="date-year form-select required" id="edit-apntugyog-year" name="Year12">
                                                    <option value="">-Year</option>
                                                    <option value="2005">2017</option>
                                                    <option value="2006">2018</option>
                                                    <option value="2007">2019</option>
                                                    <option value="2008">2020</option>
                                                    <option value="2009">2021</option>
                                                    <option value="2010">2022</option>
                                                    <option value="2011">2023/option>
                                                    <option value="2012">2024</option>
                                                    <option value="2013">2025</option>
                                                    <option value="2014">2026</option>
                                                    <option value="2015">2027</option>
                                                    <option value="2016">2028</option>
                                                    <option value="2017">2029</option>
                                                    <option value="2018">2030</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Class 12 Board</label>
                                                <input type="text" class="form-control" step="0.1" placeholder="Board" name="Board12" value="">
                                            </div>
                                        </div> 
                                    </div>
                                     

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Diploma University</label>
                                                <input type="text" class="form-control" placeholder="University" name="Diploma" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Percentage Obtained</label>
                                                <input type="text" class="form-control" placeholder="Marks Percentage  " name="DiplomaMark" value="">
                                            </div>
                                        </div>
                                        
                                    </div>

                                  

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Semester - I </label>
                                                <input type="number" step="0.1" class="form-control" placeholder="CGPA" name="Sem1_2" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Semester - II </label>
                                                <input type="number" step="0.1" class="form-control" placeholder="CGPA" name="Sem2" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Semester - III</label>
                                                <input type="number" step="0.1" class="form-control" placeholder="CGPA" name="Sem3" value"">
                                            </div>
                                        </div>                                   

                                    
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Semester - IV</label>
                                                <input type="number" step="0.1" class="form-control" placeholder="CGPA " name="Sem4" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Semester - V</label>
                                                <input type="number" step="0.1" class="form-control" placeholder="CGPA" name="Sem5" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Semester - VI</label>
                                                <input type="number" step="0.1" class="form-control" placeholder="CGPA" name="Sem6" value"">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Semester - VII</label>
                                                <input type="number" step="0.1" class="form-control" placeholder="CGPA" name="Sem7" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Semester - VIII</label>
                                                <input type="number" step="0.1" class="form-control" placeholder="CGPA " name="Sem8" value"">
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>GATE SCORE</label>
                                                <input type="number" class="form-control" step="0.1" placeholder="Score" name="GATE" value="">
                                            </div>
                                        </div> 
                                    </div>
                                        

                                    <!--<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                        </div>
                                    </div>-->

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
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