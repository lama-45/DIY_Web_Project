<?php
$conn = mysqli_connect('localhost','root','','finalproject');
$fName=  "";
$lName=  "";
$Country=  "";
$city=  "";
$street1=  "";
$email=  "";
$phone=  "";
$Source=  "";
$recommend=  "";
$liked= "";
$feedback= "";

if(isset($_POST['feedback'])){
	$fName= $_POST['fName'];
	$lName= $_POST['lName'];
	$Country= $_POST['Country'];
	$city= $_POST['city'];
	$street1= $_POST['street1'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$Source= $_POST['Source'];
	$recommend= $_POST['recommend'];
	$likeness= $_POST['liked'];
	$feedback= $_POST['feedback'];

	$sql_e="SELECT * FROM feedback WHERE email='$email'";
	$res_e=mysqli_query($conn,$sql_e) or die(mysqli_error($conn));

	if(mysqli_num_rows($res_e) > 0){



	header("Location: ../pages/feedback.php?email=used");
exit();
	}
	else{
		$query ="INSERT INTO feedback (fName, lName, Country, city, street1, email, phone, Source, recommend, liked, feedback)
						VALUES ('$fName', '$lName', '$Country', '$city', '$street1', '$email', '$phone','$Source', '$recommend', '$liked', '$feedback')";
						$result=mysqli_query($conn,$query) or die(mysqli_error($conn));

						header("Location: ../pages/feedback.php?form=saved");
					exit();


	}
}


?>
