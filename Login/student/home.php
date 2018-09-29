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
<style type="text/css">
                
                            
                            ul {list-style-type: none;}
                            

                            .month {
                                padding: 70px 25px;
                                width: 100%;
                                background: #1abc9c;
                            }

                            .month ul {
                                margin: 0;
                                padding: 0;
                            }

                            .month ul li {
                                color: white;
                                font-size: 20px;
                                text-transform: uppercase;
                                letter-spacing: 3px;
                            }

                            .month .prev {
                                float: left;
                                padding-top: 10px;
                            }

                            .month .next {
                                float: right;
                                padding-top: 10px;
                            }

                            .weekdays {
                                margin: 0;
                                padding: 10px 0;
                                background-color: #ddd;
                            }

                            .weekdays li {
                                display: inline-block;
                                width: 13.6%;
                                color: #666;
                                text-align: center;
                            }

                            .days {
                                padding: 10px 0;
                                background: #eee;
                                margin: 0;
                            }

                            .days li {
                                list-style-type: none;
                                display: inline-block;
                                width: 13.6%;
                                text-align: center;
                                margin-bottom: 5px;
                                font-size:12px;
                                color: #777;
                            }

                            .days li .active {
                                padding: 5px;
                                background: #1abc9c;
                                color: white !important
                            }

                            /* Add media queries for smaller screens */
                            @media screen and (max-width:720px) {
                                .weekdays li, .days li {width: 13.1%;}
                            }

                            @media screen and (max-width: 420px) {
                                .weekdays li, .days li {width: 12.5%;}
                                .days li .active {padding: 2px;}
                            }

                            @media screen and (max-width: 290px) {
                                .weekdays li, .days li {width: 12.2%;}
                            }
</style>
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
                    <a class="navbar-brand" href="#">Home</a>
                </div>
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p><?php
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
          <section class="panel">
                                <header class="panel-heading">
                                    Calander
                                </header>
                                 <div class="panel-body">
                                            <div class="month">      
                                                      <ul style="list-style: none;">
                                                        <li class="prev"><</li>
                                                        <li class="next">></li>
                                                        <li style="text-align:center">
                                                          May<br>
                                                          <span style="font-size:18px">2017</span>
                                                        </li>
                                                      </ul>
                                            </div>

                                                    <ul class="weekdays">
                                                      <li>Mo</li>
                                                      <li>Tu</li>
                                                      <li>We</li>
                                                      <li>Th</li>
                                                      <li>Fr</li>
                                                      <li>Sa</li>
                                                      <li>Su</li>
                                                    </ul>

                                                    <ul class="days">  
                                                      <li>1</li>
                                                      <li><span class="active">2</span></li>
                                                      <li>3</li>
                                                      <li>4</li>
                                                      <li>5</li>
                                                      <li>6</li>
                                                      <li>7</li>
                                                      <li>8</li>
                                                      <li>9</li>
                                                      <li>10</li>
                                                      <li>11</li>
                                                      <li>12</li>
                                                      <li>13</li>
                                                      <li>14</li>
                                                      <li>15</li>
                                                      <li>16</li>
                                                      <li>17</li>
                                                      <li>18</li>
                                                      <li>19</li>
                                                      <li>20</li>
                                                      <li>21</li>
                                                      <li>22</li>
                                                      <li>23</li>
                                                      <li>24</li>
                                                      <li>25</li>
                                                      <li>26</li>
                                                      <li>27</li>
                                                      <li>28</li>
                                                      <li>29</li>
                                                      <li>30</li>
                                                      <li>31</li>
                                                    </ul>
                                                    </div>

                                                  
                                        </section>
                       
                      
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