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

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
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
                                    <p>Date: <input type="date" id="datepicker"></p>
                                    <button type="button" class="btn btn-secondary">Check</button>
                                </div><!-- end innerpage-heading -->

                                <?php
                                  function conn(){

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "TOKUNI";


                                    $conn = new mysqli($servername, $username, $password, $dbname);


                                    if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                    }
                                    return $conn;
                                  }


                                $conn = conn();
                                $sql = "SELECT * FROM guitarwars";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                  echo '<table>';
                                  while($row = $result->fetch_assoc()) {
                                    //display the score date
                                    echo '<tr><td class="scoreinfo">';
                                    echo '<span class="score">' . $row['score'] . '</span><br />';
                                    echo '<strong>Name:</strong> ' . $row['name'] . '<br />';
                                    echo '<strong>Date:</strong> ' . $row['date'] . '</td></tr>';
                                  }
                                  echo '</table>';
                                } else {
                                  echo "0 results";
                                }

                                ?>


                                <form>
                                    <div class="row">
                                    <div class="innerpage-heading" style="padding: 1.7em;">
                                      <h2 id="textdef">Plese fill the information below</h2>
                                    </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name" required/>

                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name" required/>

                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" required/>

                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number" required/>

                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control dpd1" placeholder="Date" required/>
                                            </div>
                                        </div><!-- end columns -->

                                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <select class="form-control">
                                                <option selected>Seat</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                </select>
                                            </div>
                                        </div><!-- end columns -->

                                                                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" placeholder="Enter Message"></textarea>
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <button type="button" class="btn btn-secondary">Reserve Now</button>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end space-right -->
                        </div><!-- end columns -->


                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end reservation -->

      </div>
    </section>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
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
