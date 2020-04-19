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
$nID=$_POST["nID"];
$name=$_POST["name"];
$age=$_POST["age"];
$blood=$_POST["blood"];
$IDn=$_POST["IDn"];
$mob=$_POST["mob"];
$add=$_POST["add"];
$city=$_POST["city"];
$MH=$_POST["MH"];
$orgname=$_FILES["profile"]["name"];
$tmpname=$_FILES["profile"]["tmp_name"];
move_uploaded_file($tmpname,"uploads/".$orgname);
$query="insert into info values('$nID','$name',$age,'$blood','$IDn','$mob','$add','$city','$MH','$orgname')";
mysqli_query($dbcon,$query);

	if(mysqli_error($dbcon)=="")	
		echo "Record Submitted";
	else
		echo mysqli_error($dbcon);
    }
function doupdate($dbcon)
{
$nID=$_POST["nID"];
$name=$_POST["name"];
$age=$_POST["age"];
$blood=$_POST["blood"];
$IDn=$_POST["IDn"];
$mob=$_POST["mob"];
$add=$_POST["add"];
$city=$_POST["city"];
$MH=$_POST["MH"];
$orgname=$_FILES["profile"]["name"];
$query="update info set Name='$name',Age='$age',BloodGroup='$blood',IDnumber='$IDn',Mobile='$mob',Address='$add',City='$city',MedicalHistory='$MH',OrignalName='$orgname' where NeedyID=$nID";
		
	 mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        if(mysqli_affected_rows($dbcon)!=0)
        echo "Record Updated....";
        else
        echo "Invalid Needy ID";
    }
    else
        echo mysqli_error($dbcon);

}
function dodelete($dbcon)
{
	$nID=$_POST["nID"];

$query="delete from info where NeedyID='$nID'";
		
	 mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        if(mysqli_affected_rows($dbcon)!=0)
        echo "Record Deleted....";
        else
        echo "Invalid Needy ID";
    }
    else
        echo mysqli_error($dbcon);

}



?>