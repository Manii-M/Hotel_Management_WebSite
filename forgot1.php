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
  $email = $_POST["email"];
  }
 $query="SELECT * FROM `registration` WHERE email='".$email."'";
									  $res=$conn->query($query);
									  if($res->num_rows > 0)
									  {
										  while($row=mysqli_fetch_assoc($res))
									  {
										  $pass=$row["password"];
										  
									  }
									  if(!empty($pass)){
									  
echo '<script language="javascript">';
echo 'alert("Your Password is '.$pass.'")';
echo '</script>';

header( "refresh:0;url=index.php" );

}
								  }
}
?>
