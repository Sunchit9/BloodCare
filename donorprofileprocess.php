<?php
include_once("connection.php");
$btn=$_POST["btn"];
if($btn=="SAVE")
	dosave($dbcon);
else if($btn=="Update")
	doupdate($dbcon);
else
	dodelete($dbcon);
function dosave($dbcon)
{
$dID=$_POST["dID"];
$name=$_POST["name"];
$age=$_POST["age"];
$blood=$_POST["blood"];
$add=$_POST["add"];
$city=$_POST["city"];
$mob=$_POST["mob"];
$NOT=$_POST["NOT"];
$MH=$_POST["MH"];
$orgname=$_FILES["profile"]["name"];
$tmpname=$_FILES["profile"]["tmp_name"];
move_uploaded_file($tmpname,"uploads/".$orgname);
$query="insert into profile values('$dID','$name','$age','$blood','$add','$city','$mob','$NOT','$MH','$orgname')";
mysqli_query($dbcon,$query);

	if(mysqli_error($dbcon)=="")	
		echo "Record Submitted";
	else
		echo mysqli_error($dbcon);
    }
function doupdate($dbcon)
{
$dID=$_POST["dID"];
$name=$_POST["name"];
$age=$_POST["age"];
$blood=$_POST["blood"];
$add=$_POST["add"];
$city=$_POST["city"];
$mob=$_POST["mob"];
$NOT=$_POST["NOT"];
$MH=$_POST["MH"];
$orgname=$_FILES["myfile"]["name"];
$query="update profile set Name='$name',Age=$age,BloodGroup='$blood',Address='$add',City='$city',Mobile=$mob,NoOfTimes=$NOT,MedicalHistory='$MH',OrignalName='$orgname' where DonorID='$dID'";
		
	 mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        if(mysqli_affected_rows($dbcon)!=0)
        echo "Record Updated....";
        else
        echo "Invalid Donor ID";
    }
    else
        echo mysqli_error($dbcon);

}
function dodelete($dbcon)
{
	$dID=$_POST["dID"];

$query="delete from profile where DonorID='$dID'";
		
	 mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        if(mysqli_affected_rows($dbcon)!=0)
        echo "Record Deleted....";
        else
        echo "Invalid DonorID";
    }
    else
        echo mysqli_error($dbcon);

}



?>