<?php
    $citizenname=$_POST['citizenname'];
    $emailid=$_POST['emailid'];
    $mobileno=$_POST['mobileno'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $dateofbirth=$_POST['dateofbirth'];
    $sex=$_POST['sex'];
    $municipality=$_POST['municipality'];
    $pincode=$_POST['pincode'];
    $area=$_POST['area'];
    $locality=$_POST['locality'];
    $street=$_POST['street'];
    $buildingname=$_POST['buildingname'];
    $doorno=$_POST['doorno'];
    
    $conn = new mysqli('localhost','root','','watermeter');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(citizenname,email,mobileno,password,confirmpassword,DOB,sex,municipality,pincode,area,locality,street,buildingname,doorno) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssssssssss", $citizenname,$emailid,$mobileno,$password,$confirmpassword,$dateofbirth,$sex,$municipality,$pincode,$area,$locality,$street,$buildingname,$doorno);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>