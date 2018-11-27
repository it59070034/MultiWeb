<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TOKUNI</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Maitree" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      maxDate: "+1m"
    });
  } );
  </script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <div><img src="img\about\logo.jpg" id="logo" ></div>​
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sushi.html">SUSHI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="dongburi.html">DONGBURI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="chef.html">ABOUT CHEF</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="reserve.php">RESERVATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "TOKUNI";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $concon = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }else {
    echo "connect successfully";
  }

  session_start();
  $revDate = $_SESSION["revDate"];
  ?>

  <!-- Reservation Zone -->
  <section class="bg-light" id="team">
    <div id="reservation">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
            <div class="space-right">
              <div class="innerpage-heading ">
                <h1 id="textdef">Reservation on <?php echo $revDate; ?> </h1>
              </div><!-- end innerpage-heading -->
              <form action="" method="POST">
                <div class="row">
                  <div class="innerpage-heading" style="padding: 1.7em;">
                    <h2 id="textdef">Please fill the information below</h2>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <div class="form-group">
                      <input type="text" name="cname" class="form-control" placeholder="Name" required/>
                    </div>
                  </div><!-- end columns -->

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" name="cemail" class="form-control" placeholder="Email" required/>

                    </div>
                  </div><!-- end columns -->

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" name="cphone" class="form-control" placeholder="Phone Number" required/>

                    </div>
                  </div><!-- end columns -->

                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                      <select name="seatnum" class="form-control">
                        <option value="1" selected>1 Seat</option>
                        <option value="2">2 Seat</option>
                        <option value="3">3 Seat</option>
                        <option value="4">4 Seat</option>
                        <option value="5">5 Seat</option>
                        <option value="6">6 Seat</option>
                        <option value="7">7 Seat</option>
                        <option value="8">8 Seat</option>
                        <option value="9">9 Seat</option>
                      </select>
                    </div>
                  </div><!-- end columns -->

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <input type="text" name="cmssg" class="form-control" rows="5" placeholder="Enter Message.."/>
                      <!-- <textarea class="form-control" name="cmssg" rows="5" placeholder="Enter Message.."></textarea> -->
                    </div>
                  </div><!-- end columns -->

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn-secondary" name="btn-reserve">Reserve Now</button>
                  </div><!-- end columns -->




                </div><!-- end row -->
              </form>
              <?php
              if(isset($_POST['btn-reserve']))
              {

                $name = $_POST["cname"];
                $mail = $_POST["cemail"];
                $phone = $_POST["cphone"];
                $seat = $_POST["seatnum"];
                $mssg = $_POST["cmssg"];
                $SQL = "INSERT INTO reservation (CUS_name, CUS_phone, REV_date, SEAT, CUS_email, CUS_mssg)
                VALUES ('$name', '$phone', '$revDate', $seat, '$mail', '$mssg')";
                $result = mysqli_query($concon,$SQL);

                if (!$result) {
                  die('Invalid query: ' . mysqli_error($concon));
                }
                else {
                  ?>
                  <script language="javascript">
                  alert("Reservation complete");
                  top.location.href = "home.html";
                </script>

                <?php
              }
            }

            ?>

          </div><!-- end space-right -->
        </div><!-- end columns -->


      </div><!-- end row -->
    </div><!-- end container -->





  </div><!-- end reservation -->

</div>
</section>




<!-- Bootstrap core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>

</body>

</html>
