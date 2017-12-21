<?php
session_start();
 $email = $_SESSION["User"];
 $conn=new mysqli('localhost','root');
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
 {
	 $db1=mysqli_select_db($conn,'hotel_management');
	if(!$db1)
			{echo "error in connection with database";} 
 }
 
     $query="SELECT * FROM `rooms` WHERE email='".$email."'";
									  $res=$conn->query($query);
									  $i=0;
									  if($res->num_rows > 0)
									  {
										  while($row=mysqli_fetch_assoc($res))
									  {
										  $loc=$row["location"];
										  $i++;
										 
       
        $r=$row["class"];
		$cin=$row["chack_in"];
		$co=$row["check_out"];
		$lo=$row["location"];
		$p=$row["person"];
		
      echo $r;
									  }
									  }
									  
									?>