<?php
$conn=new mysqli('localhost','root');
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
 {
	 $db1=mysqli_select_db($conn,'hotel_management');
	if(!$db1)
			{echo "error in connection with database";} 

if(($_SERVER["REQUEST_METHOD"] == "POST"))
	 {
		 $email = $_POST["email"];
		  $los = $_POST["los"];
	 $chin = $_POST["chin"];
	 $chout = $_POST["chout"];
	 $per = $_POST["per"];
	 $rms = $_POST["rms"];
	 $cs = $_POST["cls"];
	 $pr = $_POST["pri"];
	 $sql = "INSERT INTO `rooms`(`email`,`location`, `chack_in`, `check_out`, `person`, `room`, `class`,`price`) VALUES ('".$email."','".$los."','".$chin."','".$chout."','".$per."','".$rms."','".$cs."','".$pr."')";
 if ($conn->query($sql) === TRUE) {
echo '<script language="javascript">';
echo 'alert("Your booking with us is succesfully you can view in your profile!")';
echo '</script>';
header( "refresh:0;url=profile.php" );
} else {
    echo "Error: " . $conn->error;
}
	 }
}
?>