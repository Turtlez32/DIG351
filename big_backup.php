<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  p.small { font-size: 12px;}

  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #3897D9; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #59BCFB; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #F2F1EF; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #64D98A; /* Black Gray */
      color: #fff;
  }
  .bg-5 {
      background-color: #5ECA7F;
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .gi-2x{font-size: 2em;}
  .gi-3x{font-size: 3em;}
  .gi-4x{font-size: 4em;}
  .gi-5x{font-size: 5em;}
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
      font-size: 1;
  }
  .navbar-brand { font-size: 1em; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Uni Share Car Rental</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav ">
        <li><a href="#">Home</a></li>
        <li><a href="#">Locate Car</a></li>
        <li><a href="#">Book Car</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <center><img src="USC-Logo-colour.png" class="img-responsive margin" style="width:60%" alt="Image"></center>
  <h2> book, drive and<h3>save</h3></h2>
  <h6>Smart care rental for uni students</h6>
  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">How It Works</h3>
   <div class="row">
    <div class="col-md-10">
      <div class="media">
        <div class="media-left">
          <span class="glyphicon glyphicon-edit gi-3x" aria-hidden="true">
        </div> <!-- Media Left -->
        <div class="media-body">
          <h2>Register for an Account.<h2>
          <p> Registering for an account is easy, and pain free. Never miss a lecture with this service. </p>
        </div> <!-- Media Body --> 
      </div> <!-- Media -->
      <div class="media">
        <div class="media-left">
          <span class="glyphicon glyphicon-calendar gi-3x" aria-hidden="true">
        </div> <!-- Media Left -->
        <div class="media-body">
          <h2>Book a vehicle from those available<h2>
          <p> Search for an available car and book it. </p>
        </div> <!-- Media Body --> 
      </div> <!-- Media -->
      <div class="media">
        <div class="media-left">
          <span class="glyphicon glyphicon-transfer gi-3x" aria-hidden="true">
        </div> <!-- Media Left -->
        <div class="media-body">
          <h2>Tag on with your SmartCard and Drive<h2>
          <p> Onced tagged on drive to your location. </p>
        </div> <!-- Media Body --> 
      </div> <!-- Media -->
      <div class="media">
        <div class="media-left">
          <span class="glyphicon glyphicon-circle-arrow-right gi-3x" aria-hidden="true">
        </div> <!-- Media Left -->
        <div class="media-body">
          <h2>Return care to any pod location<h2>
          <p> When you are returing the car you can park at any pod location on campus </p>
        </div> <!-- Media Body --> 
      </div> <!-- Media -->
    </div> <!-- col-md-10 -->
  </div> <!-- Row -->
</div> <!-- Container -->

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Membership rates</h3><br>
  <div class="row">
    <div class="col-md-12">
      <div class= "col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"> <h3>Basic</h3> </div> <!-- Panel Heading -->
          <div class="panel-body">
            <p> $40 per year <br>$0 Joining fee </p>
            <hr>
            <p> Rates: </p>
            <div class="col-sm-12">
              <div class="col-sm-6">
                <p class="small"> Economy <p>
                <p class="small"> $9.50 per hour </p>
                <p class="small"> + $0.20 per km </p>
              </div> <!-- col-sm-6 -->
              <div class="col-sm-6">
                <p class="small"> Suv / Luxury / People Mover <p>
                <p class="small"> $16.50 per hour </p>
                <p class="small"> + $0.20 per km </p>
              </div> <!-- col-sm-6 -->
            </div> <!-- col-sm-12 -->
          </div> <!-- panel body -->
          <div class="panel-footer"> 
            <p class="small">Best for trips now and then </p>
            <p class="small">1 driver allowed </p>
          </div> <!-- panel footer -->
        </div> <!-- panel-default -->
      </div> <!-- col-md-3 -->
      <div class= "col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"> <h3>Casual</h3> </div> <!-- Panel Heading -->
          <div class="panel-body">
            <p> $120 per year <br>$20 Joining fee </p>
            <hr>
            <p> Rates: </p>
            <div class="col-sm-12">
              <div class="col-sm-6">
                <p class="small"> Economy <p>
                <p class="small"> $6.50 per hour </p>
                <p class="small"> + $0.20 per km </p>
              </div> <!-- col-sm-6 -->
              <div class="col-sm-6">
                <p class="small"> Suv / Luxury / People Mover <p>
                <p class="small"> $12.50 per hour </p>
                <p class="small"> + $0.20 per km </p>
              </div> <!-- col-sm-6 -->
            </div> <!-- col-sm-12 -->
          </div> <!-- panel body -->
          <div class="panel-footer"> 
            <p class="small">Best for 2-4 trips a month </p>
            <p class="small">2 drivers allowed </p>
          </div> <!-- panel footer -->
        </div> <!-- panel-default -->
      </div> <!-- col-md-3 -->
      <div class= "col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"> <h3>Pro</h3> </div> <!-- Panel Heading -->
          <div class="panel-body">
            <p> $280 per year <br>$20 Joining fee </p>
            <hr>
            <p> Rates: </p>
            <div class="col-sm-12">
              <div class="col-sm-6">
                <p class="small"> Economy <p>
                <p class="small"> $4.00 per hour </p>
                <p class="small"> + $0.20 per km </p>
              </div> <!-- col-sm-6 -->
              <div class="col-sm-6">
                <p class="small"> Suv / Luxury / People Mover </p>
                <p class="small"> $9.00 per hour </p>
                <p class="small">+ $0.20 per km </p>
              </div> <!-- col-sm-6 -->
            </div> <!-- col-sm-12 -->
          </div> <!-- panel body -->
          <div class="panel-footer"> 
            <p class="small">Best for 4+ trips a month </p>
            <p class="small">3 drivers allowed </p>
          </div> <!-- panel footer -->
        </div> <!-- panel-default -->
      </div> <!-- col-md-3 -->
    </div> <!-- Col-md-12 -->   
  </div> <!-- Row -->
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <div class="btn-group">
  <button type="button" class="btn btn-default">
    <div class="col-md-12">
      <div class="col-md-1">
        <span class="glyphicon glyphicon-circle-arrow-right gi-3x" aria-hidden="true">
      </div> <!-- col-md-2 -->
      <div class= " col-md-11">
        <p>Register for an account today<p>
        <p class="small"> create your account now, select a plan, drive away to your destination in minutes </p>
      </div> <!-- col-md-10 -->
    </div> <!-- col-md-12 -->
  </button>
  </div> <!-- button group -->
</footer>

</body>
</html>
