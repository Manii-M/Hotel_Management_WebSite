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
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $email = $_POST["email"];
  $pass = $_POST["password"];
  $mob = $_POST["number"];
  $gender = $_POST["gender"];
}
$var = "INSERT INTO `registration`(`first_Name`, `last_Name`, `email`, `password`, `mobile_No`, `gender`) VALUES ('".$fname."','".$lname."','".$email."','".$pass."','".$mob."','".$gender."')";
if ($conn->query($var) === TRUE) {
echo '<script language="javascript">';
echo 'alert("You Have Signed Up Succefully Please Log In!")';
echo '</script>';

header( "refresh:0;url=index.php" );
} else {
    echo "Error: " . $conn->error;
}
}
?>
