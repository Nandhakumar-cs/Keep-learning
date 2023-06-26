<html>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="login2.css">
    <style>
        .navbar{
    background-color: grey;
}
#tamil2{
    color: cyan;
}
#tamil{
    color:yellow;

}
.navbar-brand{
    color: white;
}
#sp{
    text-decoration: none;
    color: white;
}
    </style>

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
<div class="container">
<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$date = date("d-m-y");
$conn = new mysqli("sql302.unaux.com","unaux_33592205","kumarkumar2003","passenger");
if($conn->connect_error){
    die("failed to connect....!" . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("SELECT * FROM registration where pic =?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['pass']==$pass)
            {
                $name=$data['name'];
            $query= "INSERT INTO loginform values('$email','$date')";
            $rs = mysqli_query($conn, $query);
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo ("<h>WELCOME "."-------->".$name);
            echo ("<br>");
            echo "login succesfully ";
            echo "<br>";
            echo "click course nutton to view course list";
            echo "<br>";
            echo '<a href="course.html">course</>';
            }
        else
            {
            echo "invalid password or email";
            echo "<br>";
        echo '<a href="first.html">GO BACK</a>';
             }
    }
    else{
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "invalid email or  pass";
        echo "<br>";
        echo '<a href="first.html">GO BACK</a>';
    }
}
?>
</div>
<script src="./assets/js/jquery.min.js"></script> 
<script src="./assets/js/bootstrap.min.js"></script>
</html>