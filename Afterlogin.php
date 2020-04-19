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
            
        </style>
    </head>
    <body>
       <nav class="navbar navbar-dark bg-dark">
           <span class="navbar-brand mb-0 h1">Blood Care</span>  
           <br>
           <span><?php echo $_SESSION["uid"]; ?></span>
           <form action="logout.php">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SignOut</button>
           </form>
</nav>
        <br>
        <br>
        <br>
        <div class="container">
        
        <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/donate.png" alt="Card image cap" height="60%">
    <div class="card-body">
        <h5 class="card-title"><a href="donorprofile.php">Be a Donor.</a></h5>
      <p class="card-text">Make your Donor Profile so that we can send you to save a life.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/need.png" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><a href="NeedyContents.php">Need Blood?</a></h5>
      <p class="card-text">Make your profile, fill in your requirements and search for the donors.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
        
        </div>
    </body>
</html>
    