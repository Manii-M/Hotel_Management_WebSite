<?php
session_start();
 $email = $_SESSION["User"];
 echo $email;
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
  
  $los = $_POST["Locations"];
  $chin = $_POST["check-in"]; 
  $chout = $_POST["check-out"]; 
  $per = $_POST["No"];
  $rms = $_POST["rooms"];
 /*$sql = "INSERT INTO `rooms`(`location`, `chack_in`, `check_out`, `person`, `room`) VALUES ('".$los."','".$chin."','".$chout."','".$per."','".$rms."')";
 $res=$conn->query($sql);
 if ($conn->query($res) === TRUE) {

   header("location:login.html");
} else {
    echo "Error: " . $conn->error;
}
}
 */
}
}
?>
<html>

<style>

body {
	margin: 0;
	padding: 0;
	line-height: 1.5em;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: white;
	background:url(h4.jpg);
}

a:link, a:visited { color: #ff5400; text-decoration: none; font-weight: normal;} 
a:active, a:hover { color: #ff5400; text-decoration: underline;}

.cleaner {
	clear: both;
	width: 100%;
	height: 1px;
	font-size: 1px;	
}
	



p {
	margin: 0px;
	padding: 0px;
	color:white;
}

img {
	margin: 0px;
	padding: 0px;
	border: none;
}

.cleaner_w10 {
	float: left;
	width: 10px;
	height: 100%;
	font-size: 1px;	
}

.cleaner_h10 {
	clear: both;
	width: 100%;
	height: 10px;
	font-size: 1px;	
}

.cleaner_h20 {
	clear: both;
	width: 100%;
	height: 20px;
	font-size: 1px;	
}

.cleaner_h30 {
	clear: both;
	width: 100%;
	height: 30px;
	font-size: 1px;	
}

.cleaner_h40 {
	clear: both;
	width: 100%;
	height: 40px;
	font-size: 1px;	
}

.cleaner_horizontal_divider_01 {
	clear: both;
	width: 100%;
	height: 2px;
	font-size: 1px;	
	background: url(images/horizontal_divider_01.jpg) repeat-x;
}

.

.container{
	width: 0px;
	margin: 0 auto;
	padding: 0 10px;
} 

#header {
	    margin-left: 195px;

	width: 940px;
	height: 190px;
	
	padding: 0px;
	font-family: "Times New Roman", Times, serif;
	background: url(images/header_b.jpg) no-repeat;
}

#header #website_title {
	width: 360px;
	margin-left: 290px;
	padding: 45px 0 0 0;
	text-align: center;
	

	}


#website_title #title {
	font-size: 40px;
	color: black;
	margin-bottom: 10px;
	
}

#website_title #slogan {
	clear: both;
	font-size: 20px;
	color:black;
}

/* banner */
#templatemo_banner {
	clear: both;
	width: 1000px;
	height: 300px;
	margin: 0px;
	padding: 0px;
	    margin-left: 220px;

}

#templatemo_banner #templatemo_menu{
	float: left;
	width: 940px;
	height: 50px;
	background-color:black;
	/* background: url(images/menu_bg.png) no-repeat; */
}

#templatemo_menu ul {
	width: 580px;
	margin: 15px 0 0 180px;
	padding: 0px;
	list-style: none;
	
}

#templatemo_menu ul li{
	display: inline;
}

#templatemo_menu ul li a{
	float: left;
	padding: 0 20px;
	font-size: 14px;
	text-align: center;
	text-decoration: none;
	background: url(images/templatemo_menu_divider.gif) top right repeat-y;
	color: #FFF;
	font-weight: bold;
	outline: none;
}

#templatemo_menu li a:hover, #templatemo_menu li .current{
	color: #eceb81;
}
/* end of menu*/
/* end of banner */

/* content */


#slogan{
text-color:black;
}
/* end of footer */
#rms{
 
background-color:white;
font-style:justify;
width:940px;
height:400px;		
margin-bottom: 20px;
}
p{

color:black;


}

</style>


<head>
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>YOLO HOTELS</title>







</head>
<body>
<div id="container">
	<!-- header starts from here---->
    <div id="header">
	
        <div id="website_title">
            <div id="title" >
			
	         <img src="images/yoloiconimg.gif" style="height:55px;"><br>
			 YOLO  HOTELS
			 
            </div>
			
            <div id="slogan" style="margin-top: -16px;">
	            The best service at the lowest price</div>
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_banner">
		
    	<div id="templatemo_menu">
            <ul style="background-color:black;">
                <li><a href="index1.php" class="current">Home</a></li>
                <li><a href="http://services/#">Services</a></li>
                <li><a href="http://bookings/#">Bookings</a></li>
                <li><a href="http://locations/#">Locations</a></li>
                <li><a href="profile.htm">Profile</a></li>
                <li><a href="contact.html#" class="last">Contact</a></li>
            </ul> 
        </div>   
	
	<div id="rms">
	<div class="col-md-6" style="margin-top:10px;">
				<img src="images/r4.jpg" style="width: 492px;margin-top: 14px; margin-left: 10px;">
		</div>
		<div class="col-md-5" style="margin-top:10px;">
	<b><h2 style="margin-left:50px;">First Class</h2></b>
		<h4 style="margin-left:60px;">The best quality rooms are availableat very genuin price and they are so comfortable.In these rooms AC, LED tv ,3 double beds, a  sofa set and a dining table is provided. </h4>
		<b><h3 style="margin-left:90px;">Price:- 2400/-  </h3> </b>
		<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left:50px; margin-top:50px">Hotel Policy</button>
  <form method="post" action="rooms.php"> 
  
  
  <input type="text" value="<?php echo $email;?>" style="display:none;" name="email">
  <input type="text" value="<?php echo $los;?>" style="display:none;" name="los">
  <input type="text" value="<?php echo $chin;?>" style="display:none;" name="chin">
  <input type="text" value="<?php echo $chout;?>" style="display:none;" name="chout">
  <input type="text" value="<?php echo $per;?>" style="display:none;" name="per">
  <input type="text" value="<?php echo $rms;?>" style="display:none;" name="rms">
  <input type="text" value="first class" style="display:none;" name="cls">
  <input type="text" value="2400 RS/-" style="display:none;" name="pri">
<input type="submit" class="btn btn-success btn-lg" value="Book" style="margin-left: 190px;
margin-top: -47px;">
</form>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register Here</h4>
        </div>
        <div class="modal-body">
        
		  <b><h4 style="margin-left:40px;">Hotel Facilities</h4></b>
		<ul style="margin-left:20px;">
  <li>According to government regulations, a valid Photo ID has to be carried by every person above the age of 18 staying at the hotel. The identification proofs accepted are Drivers License, Voters Card, Passport, Ration Card. Without valid ID the guest will not be allowed to check in.</li>
  <li>The primary guest checking in to the hotel must be at least 18 years of age. Children accompanying adults must be between 1-12 years.</li>
  <li>The inclusion of extra bed with a booking is facilitated with a folding cot or a mattress as an extra bed.</li>
  <li>Early check-in or late check-out is subject to availability and may be chargeable by the hotel. The standard check-in time is 2 PM and the standard check-out time is 12 PM. After booking you will be sent an email confirmation with hotel phone number. You can contact the hotel directly for early check-in or late check-out.</li>
<li>The room tariff includes all taxes. The amount paid for the room does not include charges for optional services and facilities (such as room service, mini bar, snacks or telephone calls). These will be charged at the time of check-out.</li>
  
  </ul>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
		 
		 
		</div>
	</div>
	
		<div id="rms">
	<div class="col-md-6" style="margin-top:10px;">
				<img src="images/r5.jpg" style="width: 492px;margin-top: 14px; margin-left: 10px;">
		</div>
		<div class="col-md-5" style="margin-top:10px;">
	<b><h2 style="margin-left:50px;">Second Class</h2></b>
		<h4 style="margin-left:60px;">Second Class rooms provides a LED tv,dining table,4 chairs, 2 double beds & 1 single bed.Quality is good and according to cost and Rules&Regulations.</h4>
		<b><h3 style="margin-left:90px;">Price:- 1800/-  </h3> </b>
		<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left:50px; margin-top:50px">Hotel Policy</button>
  <form method="post" action="rooms.php"> 
  
  
   <input type="text" value="<?php echo $email;?>" style="display:none;" name="email">
  <input type="text" value="<?php echo $los;?>" style="display:none;" name="los">
  <input type="text" value="<?php echo $chin;?>" style="display:none;" name="chin">
  <input type="text" value="<?php echo $chout;?>" style="display:none;" name="chout">
  <input type="text" value="<?php echo $per;?>" style="display:none;" name="per">
  <input type="text" value="<?php echo $rms;?>" style="display:none;" name="rms">
  <input type="text" value="second class" style="display:none;" name="cls">
  <input type="text" value="1800 RS/-" style="display:none;" name="pri">
<input type="submit" class="btn btn-success btn-lg" value="Book" style="margin-left: 190px;
margin-top: -47px;">
</form>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register Here</h4>
        </div>
        <div class="modal-body">
        
		  <b><h4 style="margin-left:40px;">Hotel Facilities</h4></b>
		<ul style="margin-left:20px;">
  <li>According to government regulations, a valid Photo ID has to be carried by every person above the age of 18 staying at the hotel. The identification proofs accepted are Drivers License, Voters Card, Passport, Ration Card. Without valid ID the guest will not be allowed to check in.</li>
  <li>The primary guest checking in to the hotel must be at least 18 years of age. Children accompanying adults must be between 1-12 years.</li>
  <li>The inclusion of extra bed with a booking is facilitated with a folding cot or a mattress as an extra bed.</li>
  <li>Early check-in or late check-out is subject to availability and may be chargeable by the hotel. The standard check-in time is 2 PM and the standard check-out time is 12 PM. After booking you will be sent an email confirmation with hotel phone number. You can contact the hotel directly for early check-in or late check-out.</li>
<li>The room tariff includes all taxes. The amount paid for the room does not include charges for optional services and facilities (such as room service, mini bar, snacks or telephone calls). These will be charged at the time of check-out.</li>
  
  </ul>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
		 
		 
		</div>
	</div>
	
			
	<div id="rms">
	<div class="col-md-6" style="margin-top:10px;">
				<img src="images/r4.jpg" style="width: 492px;margin-top: 14px; margin-left: 10px;">
		</div>
		<div class="col-md-5" style="margin-top:10px;">
	<b><h2 style="margin-left:50px;">Third Class</h2></b>
		<h4 style="margin-left:60px;">Third Class rooms provides a LED tv,dining table,4 chairs, 2 double beds & 1 single bed.Quality is good and according to cost and Rules&Regulations.</h4>
		<b><h3 style="margin-left:90px;">Price:- 1100/-  </h3> </b>
		<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left:50px; margin-top:50px">Hotel Policy</button>
  <form method="post" action="rooms.php"> 
  
  
  <input type="text" value="<?php echo $email;?>" style="display:none;" name="email">
  <input type="text" value="<?php echo $los;?>" style="display:none;" name="los">
  <input type="text" value="<?php echo $chin;?>" style="display:none;" name="chin">
  <input type="text" value="<?php echo $chout;?>" style="display:none;" name="chout">
  <input type="text" value="<?php echo $per;?>" style="display:none;" name="per">
  <input type="text" value="<?php echo $rms;?>" style="display:none;" name="rms">
  <input type="text" value="third class" style="display:none;" name="cls">
  <input type="text" value="1100 RS/-" style="display:none;" name="pri">
<input type="submit" class="btn btn-success btn-lg" value="Book" style="margin-left: 190px;
margin-top: -47px;">
</form>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register Here</h4>
        </div>
        <div class="modal-body">
        
		  <b><h4 style="margin-left:40px;">Hotel Facilities</h4></b>
		<ul style="margin-left:20px;">
  <li>According to government regulations, a valid Photo ID has to be carried by every person above the age of 18 staying at the hotel. The identification proofs accepted are Drivers License, Voters Card, Passport, Ration Card. Without valid ID the guest will not be allowed to check in.</li>
  <li>The primary guest checking in to the hotel must be at least 18 years of age. Children accompanying adults must be between 1-12 years.</li>
  <li>The inclusion of extra bed with a booking is facilitated with a folding cot or a mattress as an extra bed.</li>
  <li>Early check-in or late check-out is subject to availability and may be chargeable by the hotel. The standard check-in time is 2 PM and the standard check-out time is 12 PM. After booking you will be sent an email confirmation with hotel phone number. You can contact the hotel directly for early check-in or late check-out.</li>
<li>The room tariff includes all taxes. The amount paid for the room does not include charges for optional services and facilities (such as room service, mini bar, snacks or telephone calls). These will be charged at the time of check-out.</li>
  
  </ul>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
		 
		 
		</div>
	</div>
	
			
	<div id="rms">
	<div class="col-md-6" style="margin-top:10px;">
				<img src="images/r9.jpg" style="width: 492px;margin-top: 14px; margin-left: 10px;">
		</div>
		<div class="col-md-5" style="margin-top:10px;">
	<b><h2 style="margin-left:50px;">Fourth Class</h2></b>
		<h4 style="margin-left:60px;">Fourth Class rooms provides a LED tv,dining table,4 chairs, 2 double beds & 1 single bed.Quality is good and according to cost and Rules&Regulations.</h4>
		<b><h3 style="margin-left:90px;">Price:- 800/-  </h3> </b>
		<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left:50px; margin-top:50px">Hotel Policy</button>
  <form method="post" action="rooms.php"> 
  
  
  <input type="text" value="<?php echo $email;?>" style="display:none;" name="email">
  <input type="text" value="<?php echo $los;?>" style="display:none;" name="los">
  <input type="text" value="<?php echo $chin;?>" style="display:none;" name="chin">
  <input type="text" value="<?php echo $chout;?>" style="display:none;" name="chout">
  <input type="text" value="<?php echo $per;?>" style="display:none;" name="per">
  <input type="text" value="<?php echo $rms;?>" style="display:none;" name="rms">
  <input type="text" value="fourth class" style="display:none;" name="cls">
  <input type="text" value="800 RS/-" style="display:none;" name="pri">
<input type="submit" class="btn btn-success btn-lg" value="Book" style="margin-left: 190px;
margin-top: -47px;">
</form>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register Here</h4>
        </div>
        <div class="modal-body">
        
		  <b><h4 style="margin-left:40px;">Hotel Facilities</h4></b>
		<ul style="margin-left:20px;">
  <li>According to government regulations, a valid Photo ID has to be carried by every person above the age of 18 staying at the hotel. The identification proofs accepted are Drivers License, Voters Card, Passport, Ration Card. Without valid ID the guest will not be allowed to check in.</li>
  <li>The primary guest checking in to the hotel must be at least 18 years of age. Children accompanying adults must be between 1-12 years.</li>
  <li>The inclusion of extra bed with a booking is facilitated with a folding cot or a mattress as an extra bed.</li>
  <li>Early check-in or late check-out is subject to availability and may be chargeable by the hotel. The standard check-in time is 2 PM and the standard check-out time is 12 PM. After booking you will be sent an email confirmation with hotel phone number. You can contact the hotel directly for early check-in or late check-out.</li>
<li>The room tariff includes all taxes. The amount paid for the room does not include charges for optional services and facilities (such as room service, mini bar, snacks or telephone calls). These will be charged at the time of check-out.</li>
  
  </ul>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
		 
		 
		</div>
	</div>
	
			
		
	
			
			
    </div> <!-- end of banner -->
	
	
	
	
	</div>
	
	<!-- header starts from here---->
	
	
	
	
	
	
	
	
	
</body>
	</html>