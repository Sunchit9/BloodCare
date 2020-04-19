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
         function showphoto(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img').attr('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }

        }
            
            
             $(document).ready(function() {
			//--------------fetch record-------------->
			$("#Fetch").click(function(){
				alert("hello");
				$dID=$("#dID").val();
				$.getJSON('donor-fetch-process.php?dID=' + $dID,function(data){
					alert($dID);
					if(data.length==0){
						alert("Donor ID does not exist");
						return;
					}
					alert(JSON.stringify(data));
					$("#inputName").val(data[0].Name);
					$("#inputAge").val(data[0].Age);
					$("#inputBlood").val(data[0].BloodGroup);
					$("#inputAdd").val(data[0].Address);
					$("#inputCity").val(data[0].City);
					$("#inputMob").val(data[0].Mobile);
					$("#inputNOT").val(data[0].NoOfTimes);
					$("#inputMH").val(data[0].MedicalHistory);
					
					$("#img").attr('src','uploads/' + data[0].OrignalName);
				
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
        <div id="box">
            <div id="heaading"><center><h3>Donor Profile</h3></center></div>
    <form action="donorprofileprocess.php" method="post" enctype="multipart/form-data">
        <div id="inbox">
  <div class="form-group row">
      <label for="inputID" class="col-sm-2 col-form-label"><b>Donor ID</b></label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="dID" name="dID" placeholder="">
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
        <div class="form-group row">
            <label for="inputCity" class="col-sm-1 col-form-label"><b>Mobile</b></label>
    <div class="col-sm-4">
      <input type="" class="form-control" name="mob" id="inputMob" placeholder="">
    </div>
     </div>
         <br>
        <div class="form-group row">
            <label for="inputNOT" class="col-sm-2 col-form-label"><b>No of Times</b></label>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="NOT" id="inputNOT" placeholder="">
    </div>
     </div>
         <br>
        <div class="input-group">
  <div class="input-group-prepend">
      <span class="input-group-text"><b>Medical History</b></span>
  </div>
  <textarea class="form-control" name="MH" id="inputMH" aria-label="With textarea"></textarea>
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
    