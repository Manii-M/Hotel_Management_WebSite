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

#container{
	width: 960px;
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
	margin-top:-16px;
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
 
background-color: white;

width:940px;
    height: 530px;		

}

</style>


<head>
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
			
            <div id="slogan" >
	            The best service at the lowest price</div>
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_banner">
		
    	<div id="templatemo_menu" style="margin-bottom: 9px;">
            <ul style="background-color:black;">
                <li><a href="index1.php" class="current">Home</a></li>
                <li><a href="index1.php">Services</a></li>
                <li><a href="index1.php">Bookings</a></li>
                <li><a href="index1.php">Locations</a></li>
                <li><a href="index1.php">Gallery</a></li>
                <li><a href="contact.php" class="last">Contact</a></li>
            </ul> 
        </div>   
	                      <div id="rms">
								    <div class="panel-body pt0">
									<?php
									  $query="SELECT * FROM `registration` WHERE email='".$email."'";
									  $res=$conn->query($query);
									  if($res->num_rows > 0)
									  {
										  while($row=mysqli_fetch_assoc($res))
									  {
										  $fname=$row["first_Name"];
										  $lname=$row["last_Name"];
										  $email=$row["email"];
										  $mob=$row["mobile_No"];
										  $gen=$row["gender"];
									  }
									  }
									?>
                               <div class="timeline-panel">  
                                      <h2 style="margin-top: 10px;">Hello, <strong><?php echo $fname; echo " ";?></strong></h2>
									  
                                      <h4>
                                           Welcome In, Your Yolo Hotel Profile
                                      </h4>
                               </div>
								    <div class="about_data">
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold">
                                       <i class="fa fa-user fa-lg"></i>
                                        <label>ABOUT</label>
                                    </h3>
                                    <div class="roow">
                                      <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label about-color hidden-xs-3">User Name:</label>
                                          <div class="col-xs-7 controls"><?php echo $fname; echo $lname;?></div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label about-color">Email:</label>
                                          <div class="col-xs-7 controls"><?php echo $email;?></div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                      </div>
                                     
                                
                                     
                                      <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label about-color">Gender:</label>
                                          <div class="col-xs-7 controls"><?php echo $gen;?></div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                      </div>
                                     
                                      <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label about-color">Contact No:</label>
                                          <div class="col-xs-7 controls"><?php echo $mob;?>
										  </div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                      </div>
									        <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                          <label class="col-xs-5 control-label about-color">change Password:</label>
                                          <div class="col-xs-7 controls"><a href="update.php" > Click Here !</a>
										  </div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                      </div>

                                    </div>
                               </div>
                               <!--About data code end-->
                           </div>
			<div class="about_data" style="margin-left: 18px">
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold">
                                       <i class="fa fa-bed" aria-hidden="true"></i>
                                        <label>Your previous booking</label>
                                    </h3>
									 <table class="table table-striped">
    <thead>
      <tr>
	  
        <th>Sr.No</th>
        <th>Name</th>
        <th>Class</th>
		<th>CheckIn</th>
		<th>CheckOut</th>
		<th>Location</th>
		<th>Person</th>
		<th>cancel</th>	
      </tr>
    </thead>
    <tbody>
	<?php
									  $query="SELECT * FROM `rooms` WHERE email='".$email."'";
									  $res=$conn->query($query);
									  $i=0;
									  if($res->num_rows > 0)
									  {
										  while($row=mysqli_fetch_assoc($res))
									  {
										  $loc=$row["location"];
										  $i++;
										  echo"<tr>
        <td>".$i."</td>
        <td>".$fname."</td>
        <td>".$row["class"]."</td>
		<td>".$row["chack_in"]."</td>
		<td>".$row["check_out"]."</td>
		<td>".$row["location"]."</td>
		<td>".$row["person"]."</td>
		<td>Cancel</td>
	 </tr>";
									  }
									  }
									?>
      
    </tbody>
  </table>
									</div>
    </div> <!-- end of banner -->
</body>
	</html>