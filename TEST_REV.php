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

  ?>

  <!-- Reservation Zone -->
  <section class="bg-light" id="team">
    <div id="reservation">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8">
            <div class="space-right">
              <div class="innerpage-heading ">
                <h1 id="textdef">Reservation</h1>
                <h2>Check for available date</h2>
                <br>

                <form method="post" action="TEST_REV.php">
                  <p>Date:
                    <input type="date" id="datepicker" name="revDate"></p>
                    <input class="btn btn-secondary" type="submit" value="Check"/><br><br>

                    <?php

                    if(isset($_POST['revDate'])){
                      $revDate = $_POST['revDate'];

                      session_start();

                      $_SESSION['revDate'] = $revDate;

                      $query = mysqli_query($concon, "SELECT * FROM reservation WHERE REV_date ='$revDate'");
                      if(mysqli_num_rows($query) > 0 ) { //check if there is already an entry for that username
                        echo "Sorry, we arn't available on this date";
                      }else{

                        header("Location: reservation.php");
                        ?>

                      </form>



                      </div><!-- end row -->
                    </form>
                  </div><!-- end space-right -->
                </div><!-- end columns -->


              </div><!-- end row -->
            </div><!-- end container -->
            <?php

          }

        }
        ?>





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
