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
              
              if(response=="Authorised"){
                window.location="Afterlogin.php";
              }
              else
                  window.location="developer.php";
                
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
                width: 1400px;
                background-color: aliceblue;
            }
            #text{
                float: right;
            }
            font{
                color: white;
                font-size: 20;
                font-family: sans-serif;
                
            }
        </style>
        
        </head>
    <body>
        <br>
        <br>
        <br>
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
        <div id="service">
        <center><h2>About Developer</h2></center>
        </div>
        <div class="card bg-dark text-white">
  <img class="card-img" src="img/copy.jpg" alt="Card image" height="100%">
  <div class="card-img-overlay">
    <h2 class="card-title">Sunchit Bansal</h2>
      <h6>B.Tech @NIT Jalandhar</h6>
      <br>
    <pre class="card-text"><font>This is a wider card with supporting
text below asa natural lead-in to additional content. 
This content is a little bit longer.
This is a wider card with supporting
text below asa natural lead-in to additional content. 
This content is a little bit longer.</font></pre>
    <p class="card-text">Last updated 3 mins ago</p>
  
        </div>
</div>
    </body>
</html>