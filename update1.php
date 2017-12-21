<?php
session_start();
if(!isset($_SESSION["User"]))
 {
	header("location:index.php");
 }
 else
 {
	 $email = $_SESSION["User"];
 }
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
  
  $pass = $_POST["npass"];
  $cpass=$_POST["cpass"];
  if($pass != $cpass)
  {echo '<script language="javascript">';
echo 'alert("Password Do Not Match Try Again")';
echo '</script>';

header( "refresh:0;url=update.php" );
  }
  else
  {
	  $var="UPDATE `registration` SET `password`='".$pass."' WHERE email='".$email."'";
	  echo $var;
if ($conn->query($var) === TRUE) {

echo '<script language="javascript">';
echo 'alert("Password Changed Succefully !")';
echo '</script>';

header( "refresh:0;url=profile.php" );
} else {
    echo "Error: " . $conn->error;
}
  }
}

}
?>
