<?php
session_start(); 
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
  
  $email = $_POST["email"];
  $pass = $_POST["password"];
 $sql = "SELECT * FROM registration WHERE email = '$email' and password = '$pass'";
 $res=$conn->query($sql);
 if($res->num_rows > 0)
 {
	$_SESSION["User"]=$email;
	
	echo"<script>";
    echo"location.href='index1.php'";
	echo"</script>";
 }
 else
 {

echo '<script language="javascript">';
echo 'alert("invalid login id or password!")';
echo '</script>';

header( "refresh:0;url=index.php" );



 }
}
}
?>
