<?php

include_once("connection.php");
$fillBlood=$_GET["fillBlood"];

	
	$query="select * from profile where BloodGroup='$fillBlood'";
	
	$records=mysqli_query($dbcon,$query);
	
	$err=mysqli_error($dbcon);
	
	$ary=array();
	if($err=="")
		{
			if(mysqli_num_rows($records)>0)
				{
					while($row=mysqli_fetch_array($records))
						{
							$ary[]=$row;			
						}
						echo json_encode($ary);
				}
				else
				{
					$ary = array("data"=>"not found");
					echo json_encode($ary);
				}
					
		}
		else
	echo $err;
		
	

?>