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
		
   <!----------------------------------image--browse--script--------------------------->
      <script type="text/javascript">
        function showpreview(file) {

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
			
	$.getJSON('Blood-Process.php',function(jsonArray){
		/*alert(jsonArray);*/
					$("#fillBlood").append("<option>Select Blood</option>");
					for(i=0;i<jsonArray[i].length;i++)
						alert("hello");
						$("#fillBlood").append("<option>"+jsonArray[i].BloodGroup+"</option>");
		});
			
			/*------------------------------>*/
			$("#fillBlood").change(function(){
				
				var Blood=$("#fillBlood").val();
			$.getJSON('City-Process.php?Blood='+Blood,function(jsonArray){
					/*alert(jsonArray);*/
					$("#fillCity").append("<option>Select City</option>");
					for(i=0;i<jsonArray[i].length;i++)
						alert("hello");
						$("#fillCity").append("<option>"+jsonArray[i].City+"</option>");
		});
			});
            
        });
            
            function loadAll(){	
                alert("hello");
				var fillBlood=$("#fillBlood").val();
                
				$.getJSON('table-process.php?fillBlood='+fillBlood,function(jsonAry){
					$("#table").empty();
				
					alert(JSON.stringify(jsonAry));
                    
					if(jsonAry.data=="not found")
						alert("No Record Found");
						else{
						$("#table").append("<tr><th>DonorID<th>Name<th>Age<th>Mobile<th>Photo<th>City");
						for(i=0;i<jsonAry.length;i++){
							var row=$('<tr>');
					
							row.append("<th>"+jsonAry[i].DonorID);
							row.append("<th>"+jsonAry[i].Name);
							row.append("<th>"+jsonAry[i].Age);
							row.append("<th>"+jsonAry[i].Mobile);
							row.append("<th>"+jsonAry[i].City);
							
							row.append("<center><img src='uploads/"+jsonAry[i].OrignalName+"'height='50px' width='60px;'></center>");
		
									$("#table").append(row);
								}
				         }

			        });
				}
            
            
            
		
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
            height:300px;
            width: 400px;
            margin-left: 400px;
            border: 1px black solid;
            border-radius: 20px;
        }
        #tabledes{
            width: 500px;
            height: 300px;
            float: left;
            margin-left: 450px;
            
        }
    </style>

</head>

<body >
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
     <div class="Container">
         <div id="box">
    <form class="form">
      <center>  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label></center>
        <label>Choose Blood-Groups</label>
  <select id="fillBlood" class="custom-select my-1 mr-sm-2">
    <option selected>Choose...</option>
  </select>
         <label>Choose City</label>
        <select id="fillCity" class="custom-select my-1 mr-sm-2">
    <option selected>Choose...</option>
  </select>
        <br>
        <br>
        <center><button type="button" class="btn btn-primary my-1" onclick="loadAll();">Search</button></center>
</form>
   <!------------------------------------------------------->
    </div>
         <br>
         <br>
         
         
         <div id="tabledes">
	<table border="2" class="table table-responsive-md table-striped" id="table" border="1" height="250px" width="500px">
	</table>
		</div>
    </div>
</body>

</html>
