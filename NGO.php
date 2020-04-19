<html>
    <head>
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            
            $(document).ready(function() {
			//--------------fetch record-------------->
			$("#Fetch").click(function(){
				alert("hello");
				$email=$("#email").val();
				$.getJSON('JSON-Fetch-Fill-Process.php?email=' + $email,function(data){
					alert($email);
					if(data.length==0){
						alert("email does not exist");
						return;
					}
					alert(JSON.stringify(data));
					$("#pwd").val(data[0].pwd);
					
					$("#img").attr('src','uploads/' + data[0].pic);
				
				});
			});
		});
            
            
        </script>
        <style>
            
            font{
                color:black
            }
            body{
                background-image: url(img/light1.jpg);
                background-size: cover;
            background-repeat: no-repeat;
                
            }
        #box{
            background-color: aliceblue;
            background-repeat: no-repeat;
            height:900px;
            width: 700px;
            margin-left: 340px;
            border: 1px black solid;
            border-radius: 20px;
        }
        #inbox{
            margin-left: 10px;
        }
            #heading{
                width=700px;
                height=40px;
                background-color: coral;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark fixed-top">
           <span class="navbar-brand mb-0 h1">Blood Care</span>    
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SignOut</button>
</nav>
        <br>
        <br>
        <br>
        <hr>
        
        <div id="box">
            <div id="heaading"><center><h3><font>NGO Registration</font></h3></center></div>
    <form action="NGOprocess.php" method="post" enctype="multipart/form-data">
        <div id="inbox">
  <div class="form-group row">
      <label for="inputRegNo" class="col-sm-3 col-form-label"><font>Registration No</font></label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputRegno" name="RegNo" placeholder="">
    </div>
        </div>
        <br>
  <div class="form-row">
    <div class="col">
        <label><font>Name</font></label>
      <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
      </div>
  </div>
         <br>
        <div class="input-group">
  <div class="input-group-prepend">
      <span class="input-group-text"><b>Address</b></span>
  </div>
  <textarea class="form-control" name="add" aria-label="With textarea"></textarea>
</div>
   <br>
        <div class="form-group row">
            <label for="inputCity" class="col-sm-1 col-form-label"><font>City</font></label>
    <div class="col-sm-5">
      <input type="text" name="city" class="form-control" id="inputCity" placeholder="">
    </div>
     </div>
            <div class="form-group row">
                <label for="inputContact" class="col-sm-1 col-form-label"><font>Contact</font></label>
    <div class="col-sm-5">
      <input type="text" name="contact" class="form-control" id="inputContact" placeholder="">
    </div>
     </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-1 col-form-label"><font>Email</font></label>
    <div class="col-sm-5">
      <input type="email" name="email" class="form-control" id="inputEmail" placeholder="xyz@abc.com">
    </div>
     </div>
         <br>
             <div class="form-row">
    <div class="col">
        <label><font>President</font></label>
      <input type="text" class="form-control" name="president" id="inputpresident" placeholder="">
      </div>
  </div>
            <br>
        <div class="form-group row">
            <label for="inputPM" class="col-sm-1 col-form-label"><font>President's Mobile</font></label>
    <div class="col-sm-4">
      <input type="" class="form-control" name="POM" id="inputPM" placeholder="">
    </div>
     </div>
    <div class="form-row">
    <div class="col">
        <label><font>Established Year</font></label>
      <input type="text" class="form-control" name="year" id="inputYear" placeholder="">
      </div>
  </div>
         <br>
        <div class="form-group row">
            <label for="inputNOM" class="col-sm-2 col-form-label"><font>No of Members</font></label>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="NOM" id="inputNOM" placeholder="">
    </div>
     </div>
         <br>
        <div class="input-group">
  <div class="input-group-prepend">
      <span class="input-group-text"><b>Other Information</b></span>
  </div>
  <textarea class="form-control" name="OI" aria-label="With textarea"></textarea>
</div>
        <br>
 <center><button type="submit" name="btn" class="btn btn-primary" value="SAVE">SAVE</button>
     <button type="submit" name="btn" class="btn btn-primary" value="Update">Update</button>
     <button type="submit" name="btn" class="btn btn-primary" value="Delete">Delete</button>
     </center>
            </div>
</form>
        </div>
    </body>
</html>
    