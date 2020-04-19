<?php
session_start();
if(isset($_SESSION["uid"])==true){
    header("Location:Afterlogin.php");
}
?>
<html>
    <head>
        <script src="js/jquery-1.8.2.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
         $(document).ready(function() {
      $("#login").click(function(){
          alert("Welcome");
          var url="login-process.php?logemail="+$("#logemail").val()+"&logpwd="+$("#logpwd").val();
          $.get(url,function(response){
              alert(response);
              if(response=="Authorised"){
                window.location="Afterlogin.php";
              }
              else
                  window.location="front.php";
                
          });
      });
         });
        
        </script>
        <style>
            body{
                background-image: url(img/light1.jpg);
            }
            #service{
                height: 50px;
                width: 1110px;
                background-color: aliceblue;
            }
            b{
                font-size: 25;
                font-family: cursive;
                font-style: oblique;
            }
             #copyright{
                height: 40px;
                width: 1400px;
                background-color:dimgrey;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Blood Care</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Log In
          </button></li>
        <li class="nav-item">
        <a class="nav-link" href="front.php">Home</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="developer.php">AboutUs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">ContactUs</a>
      </li>
    </ul>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

  </div>
</nav>
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="get">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="logemail" class="form-control" id="logemail" placeholder="Email">
    </div>
            </div>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="logpwd" class="form-control" id="logpwd" placeholder="Password">
    </div>
  </div>
  <button type="button" name="btn" id="login" class="btn btn-primary">Sign in</button>
            <br>
            <br>
            <p>Don't have an account?</p>
            <input type="button" name="btn"><a href="Signup.php">Click Here to Signup</a>
</form>
        </div></div></div></div>

        <br>
        <br>
        <br>
       <div class="container"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/c1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/c2.jpg" alt="Second slide" height="70%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/c3.jpg" alt="Third slide" height="70%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <br>
        <div id="service">
        <center><h2><span class="badge badge-secondary">Services</span></h2></center>
        </div>
        <br>
        <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/icon1.png" alt="Card image cap" height="45%">
    <div class="card-body">
      <h5 class="card-title">Donate Blood</h5>
      <p class="card-text">Why to hesitate for doing *A Good Work* ,so never ever hesitate to donate blood, give it a try you will feel good.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/icon2.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Find Donors</h5>
      <p class="card-text">Try to find out more and more donors. Go ask your relatives,cousins and friends. Approach them so that no one faces lack of blood.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
         <br>
           <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h3 class="display-6">Blood Donation</h3>
      <p class="lead"><b>Why to donate blood? It's Advantages</b></p>
  </div>
    <div class="card">
  <div class="card-body">
       <pre>
      While donated blood is beneficial for people in need, some medical professionals maintain that donating blood also benefits
      the donor.
      <b>Reduces iron levels</b>
      Iron is a mineral that the body needs to produce red blood cells. However, too much iron can be harmful to a person's health.
      It can deposit into different organs of the body, such as the liver and heart, and affect the way those organs function.
      <b>Identifies adverse health effects</b>
      Each person who donates blood completes a simply physical examination and short blood test before giving blood.As a result,
      it is possible that a person could identify unknown health concerns as a part of the blood donation process.These health
      issues could include blood pressure concerns or low blood counts.A person should never use donating blood to find out if
      they have any blood-borne diseases, such as hepatitis B, hepatitis C,or HIV. Instead, they should always go to their doctor
      with any concerns they have.Although low blood counts would stop a person from donating, discovering this information could
      help them pursue more information about their health.
      
      <b>Helps people feel good about themselves</b>
       Donating blood has the power to impact up to three people who need the blood to survive.
       Knowing that they have made a difference to the lives of others can relieve a person's stress and make them feel mentally
       well or better about themselves than they did before.

       <b>Burns calories</b>
       Donating blood burns up to 650 calories per donation, according to the St. Mary's Medical Center, Blue Springs, MO. While giving 
       blood should not be an alternative to exercise, the calories burned might be seen as of occasional benefit by some.
       In the right person,
       blood donation offers many health benefits with few risks. Blood banks usually take every precaution possible to help a blood 
       donor give their blood safely.</pre>
  </div>
</div>
</div>
        </div>
          <div id="copyright"><hr color="white">
      <p><center><font color="lightgrey" size="3px"><i> © 2018-2022 SUNCHIT BANSAL ALL RIGHTS RESERVED.</i></font></center></p>
        </div>
        
    </body>
</html>
    