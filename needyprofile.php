<?php
session_start();
if(isset($_SESSION["uid"])==false){
    header("Location:front.php");
}
?>
<html lang="en">

<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    
   <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/animate.min.css">
	<script src="js/animation-js/wow.min.js" type="application/javascript"></script>
   <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
        
            
             $(document).ready(function() {
			//--------------fetch record-------------->
			$("#Fetch").click(function(){
				alert("hello");
				$nID=$("#nID").val();
				$.getJSON('needy-fetch-process.php?nID=' + $nID,function(data){
					alert($nID);
					if(data.length==0){
						alert("Needy ID does not exist");
						return;
					}
					alert(JSON.stringify(data));
					$("#inputName").val(data[0].Name);
					$("#inputAge").val(data[0].Age);
					$("#inputBlood").val(data[0].BloodGroup);
                    $("#inputIDP").val(data[0].IDnumber);
                    $("#inputMob").val(data[0].Mobile);
					$("#inputAdd").val(data[0].Address);
					$("#inputCity").val(data[0].City);
					$("#inputMH").val(data[0].MedicalHistory);
				
				});
			});
		});
            
        </script>
        <style>
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
     <span><?php echo $_SESSION["uid"]; ?></span>
           <form action="logout.php">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SignOut</button>
           </form>
</nav>
        <br>
        <br>
        <br>
        <br>
        <div id="box">
            <div id="heaading"><center><h3><b>Needy Profile</b></h3></center></div>
    <form action="needyprofileprocess.php" method="post" enctype="multipart/form-data">
        <div id="inbox">
  <div class="form-group row">
      <label for="inputID" class="col-sm-2 col-form-label"><b>Needy ID</b></label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="nID" name="nID" placeholder="">
    </div>
      <div class="col-sm-3">
          <button type="button" class="btn btn-primary" id="Fetch">Fetch</button>
      </div>
        </div>
        <br>
  <div class="form-row">
    <div class="col">
        <label><b>Name</b></label>
      <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
    </div>
    <div class="col">
        
    <input type="file" name="profile" id="profile" onChange="showphoto(this);">
    </div>
  </div>
         <br>
        <div class="form-group row">
            <label for="inputAge" class="col-sm-1 col-form-label"><b>Age</b></label>
    <div class="col-md-5">
      <input type="text" class="form-control" name="age" id="inputAge" placeholder="">
    </div>
            <div class="col-md-5">
            <img src="" id="img" height="90px" width="90px">
            </div>
     </div>
        <div class="form-group col-md-4">
            <label for="inputBlood"><b>Blood Group</b></label>
      <select id="inputBlood" name="blood" class="form-control">
        <option selected>Choose...</option>
        <option>O_neg</option>
        <option>O_pos</option>
        <option>A_neg</option>
        <option>A_pos</option>
        <option>B_neg</option>
        <option>B_pos</option>
        <option>AB_neg</option>
        <option>AB_pos</option>
      </select>
    </div>
            <br>
            <div class="form-row">
            <div class="col-md-2">
        <label><b>Identity Proof</b></label>
            </div>
            <div class="col-sm-6">
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
  <label class="form-check-label" for="gridRadios1">Aadhaar</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
  <label class="form-check-label" for="gridRadios2">Driving Liscence</label>
</div>
            <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
  <label class="form-check-label" for="gridRadios3">PAN Card</label>
</div>
                </div>
    <div class="col-sm-3">
      <input type="" class="form-control" name="IDn" id="inputIDP" placeholder="ID Number">
    </div>
            
            </div>
            <br>
        <div class="form-group row">
            <label for="inputCity" class="col-sm-1 col-form-label"><b>Mobile</b></label>
    <div class="col-sm-4">
      <input type="" class="form-control" name="mob" id="inputMob" placeholder="">
    </div>
            </div>
               <br>
        <div class="input-group">
  <div class="input-group-prepend">
      <span class="input-group-text"><b>Address</b></span>
  </div>
  <textarea class="form-control" name="add" id="inputAdd" aria-label="With textarea"></textarea>
</div>
   <br>
        <div class="form-group row">
            <label for="inputCity" class="col-sm-1 col-form-label"><b>City</b></label>
    <div class="col-sm-3">
      <input type="text" name="city" class="form-control" id="inputCity" placeholder="">
    </div>
     </div>
         <br>
        <div class="input-group">
  <div class="input-group-prepend">
      <span class="input-group-text"><b>Medical History</b></span>
  </div>
  <textarea class="form-control" name="MH" id="inputMH" aria-label="With textarea" placeholder="If any"></textarea>
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
    