<html>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="signup.css">
  <header id="header">
    <nav class="navbar fixed-top ">
        <div class="container">
            <!-- brand or logo -->
          <a class="navbar-brand" href="#">Keep learning <span id="tamil">(தமிழ்)</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar">
                    <!-- scrollimg inside -->
                        <!-- offcanvas-header -->
            <div class="offcanvas-header">
              <h5 class="kl-tittle">keep learning  <span id="tamil2">(தமிழ்)</span></h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>
                        <!-- offcanvas-body -->
                            <div class="offcanvas-body align-items-start">
                                  <ul class="navbar-nav flex-grow-1 pe-3 ">
                                    <li><a id="sp" href="index.html">HOME</a></li>
                                    <hr>
                                    <li><a id="sp" href="course.html">COURSES</a></li>
                                    <hr>
                                    <li><a id="sp" href="about.html">ABOUT</a></li>
                                    <hr>
                                    <li><a id="sp" href="contact.html">CONTACT US</a></li>
                                    <hr>
                                  </ul>
                            </div>
                                    <!-- search button -->
                                    <form class="d-flex mt-auto" role="search">
                                      <input class="form-control me-2" type="search" placeholder="search">
                                      <button class="btn btn-success" type="submit">search</button>
                                    </form>
                                    <!-- end of search button -->
                        <!-- end of offcanvas body -->
        
                            <!-- end of header -->
     
          </div>
        </div>
      </nav>
     </header>
     <style>
      #body{
        margin-top: 8rem;
      }
     </style>
<body id="body"> 
      
<center>
<?php
$name=$_POST['name'];
$num = $_POST['number'];
$gender = $_POST['gender'];
$pic = $_POST['pic'];
$pass=$_POST['pass'];
if ($_POST['submit']) {
  $name = $_POST['name'];
  $num = $_POST['number'];
  $gender = $_POST['gender'];
  $pic = $_POST['pic'];
  $pass = $_POST['pass'];
  $conn = new mysqli("sql302.unaux.com", "unaux_33592205", "kumarkumar2003", "passenger");

  $query = "INSERT INTO registration VALUES ('$name','$num','$gender','$pic','$pass')";

  $rs = mysqli_query($conn, $query);
  if ($rs) {
    echo "succesfully created ...press login to continue"."</h1>";
    echo "<br>";
    echo '<a href="login.html">LOGIN</a>';
  } else 
  {
    echo ("ALREADY REGISTERED EMAIL OR PHONE NUMBER");
    echo "<br>";
    echo '<a href="signup.html">BACK</a>';
  }
}
?>
  </center>
  </body>
  <script src="./assets/js/jquery.min.js"></script> 
<script src="./assets/js/bootstrap.min.js"></script>
</html>
