<html>
    <head>
         <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
            $(document).ready(function(){
                $("#signupbtn").click(function(){
                    $("#uID").val()=="";
                    $("#pwd").val()=="";
                    $("#mob").val()=="";
                });
            $("#uID").focusout(function(){
			var uID=$("#uID").val();
			var url="uID-process-chk.php?uID="+uID;
			$.get(url, function(response,status){
			alert(response);	
			})
		})
                
                $("#signupbtn").click(function(){
                    alert();
				var allData=$("#signupform").serialize();
                    alert(allData);
				var url="Signup-process.php?"+allData;
                    alert(url);
				$.get(url, function(response){
					alert(response);
					})
                })
            });
        
         </script>

        <style>
            body{
                background-image: url(img/light1.jpg);
                background-repeat: no-repeat;
                background-size: cover;
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
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputMobile">Mobile</label>
      <input type="text" name="logmob" class="form-control" id="logmob">
    </div>
  </div>
  <button type="submit" name="btn" class="btn btn-primary">Sign in</button>
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
        <a class="nav-link" href=ContactUs.php>ContactUs</a>
      </li>
    </ul>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

  </div>
</nav>
        <!-------------------------signup form--------------------------->
        <div id="service">
        <center><h2>SignUp <span class="badge badge-secondary">Now</span></h2></center>
        </div>
        <br>
        <div class="container">
        <form id="signupform"  >
        <div id="inbox">
  <div class="form-group row">
      <label for="uID" class="col-sm-2 col-form-label"><b>User Name</b></label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="uID" name="uID" placeholder="">
    </div>
        </div>
            <div class="form-group row">
      <label for="pwd" class="col-sm-2 col-form-label"><b>Password</b></label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="">
    </div>
        </div> 
       <div class="form-group row">
      <label for="mob" class="col-sm-2 col-form-label"><b>Mobile</b></label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="mob" name="mob" placeholder="">
    </div>
        </div>
        <br>
 <center><button type="button" name="signupbtn" id="signupbtn" class="btn btn-primary" value="signup">SignUp</button>
     </center>
            </div>
</form>
            </div>
    </body>
</html>