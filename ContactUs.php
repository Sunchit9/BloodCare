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
                  window.location="ContactUs.php";
                
          });
      });
         });
        
        </script>

        <style>
            body{
                background-image: url(img/big-ben-wallpaper-pictures-51188-52884-hd-wallpapers.jpg);
            }
            #service{
                height: 50px;
                width: 1400px;
                background-color: aliceblue;
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
        <a class="nav-link" href="#">ContactUs</a>
      </li>
    </ul>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

  </div>
</nav>
        <div id="service">
        <center><h2>Contact Us </h2></center>
            <div class="container">
              <div class="jumbotron jumbotron-fluid">
    <center><h3 class="display-6">Telecom Details</h3></center>
                  <pre class="lead"><b><u> Call us at * 011-5567833</u></b></pre>
                  <pre class="lead"><b><u> Call us at * 9876543201</u></b></pre>
                  <pre class="lead"><b><u> Call us at * 8976543021</u></b></pre>
                  <p>*Toll free</p>
  </div>
                    <div class="jumbotron jumbotron-fluid">
    <center><h3 class="display-6">Social Media Handles</h3></center>
               <center>   <button type="button" class="btn btn-link"><img src="img/download.png" height="20px"  width="20px"> Facebook</button>
  <button type="button" class="btn btn-link"><img src="img/Capture.jpg" height="20px" width="20px"> Instagram</button>
  <button type="button" class="btn btn-link"><img src="img/twitter.jpg" height="20px" width="20px">    Twitter</button>
                   <button type="button" class="btn btn-link"><img src="img/github.png" height="20px" width="20px"> Github</button></center>
  </div>
            </div>
            
        </div>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.8835125095475!2d74.95000414954646!3d30.21187198173247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a4f014b8f7%3A0x7fa736d540603db!2sSun-Soft+Technologies+(+Android+Java+PHP+Angular+)!5e0!3m2!1sen!2sin!4v1532599844920" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F9gag%2F&tabs=timeline&width=400&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        
        
        </div>
    </body>
</html>