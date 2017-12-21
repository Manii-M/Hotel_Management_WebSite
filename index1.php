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
 
?>
<!DOCTYPE html>
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

.rc_btn_01 a{
	float: center;
	clear: both;
	display: block;
	width: 200px;
	padding: 30px 0 30px 0;
	text-align: center;
	background: url(images/check-availability-button.jpg) no-repeat;
	
}

.rc_btn_02 a{
	
	clear: both;
	display: block;
	width: 200px;
	height:74px;
	padding: 20px 0 15px 0;
	text-align: left;
	background: url(images/more-button_Ink_LI1.jpg) no-repeat;
	color: #ffff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}

#containr{
	width: 960px;
	margin: 0 auto;
	padding: 0 10px;
} 

#header {
	width: 940px;
	height: 190px;
	margin: 0px;
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
	    margin-top: -18px;
}

/* banner */
#templatemo_banner {
	clear: both;
	width: 1000px;
	height: 300px;
	margin: 0px;
	padding: 0px;
	
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

#templatemo_content {
	clear: both;
	position: relative;
	width: 940px;
	margin: 0px;
	padding: 0px;
	background: #3c3936;
}

#content_bottom {
	position: absolute;
	border: 0;
	left: 0;
	width: 940px;
	height: 20px;
	background: url(images/content_bottom.jpg) no-repeat;
}

#templatemo_content #content_left{
	float: left;
	width: 345px;
	margin: 0px;
	padding:  30px 0 0 0;
	background: #2f2c29 url(images/left_column_top.jpg) top repeat-x;
}

#content_left .content_title_01 {
	font-size: 22px;
	color: #eceb81;
	padding-bottom: 10px;
	margin-bottom: 20px;
	background: url(images/horizontal_divider_01.jpg) bottom repeat-x;	
}

#templatemo_content #content_right{
	float: right;
	width: 595px;
	margin: 0px;
	padding:  30px 0 0 30px;
	height:758px;
	/*background: url(images/content_top.jpg) top repeat-x;*/
	background-color: darkslategray;
}

#content_right .content_title_01 {
	font-size: 22px;
	color: #eceb81;
	padding-bottom: 10px;
	margin-bottom: 20px;
	background: url(images/horizontal_divider_02.jpg) bottom repeat-x;	
}

#content_left .content_left_section {
	padding: 0 30px;

	    margin-top: -18px;
		}

.content_left_section p{
	text-align: justify;
}

.content_left_section .news_title {
	font-size: 14px;
	font-weight: bold;
	color: #eceb81;
}

.content_left_section form {
	margin: 19px;
	padding: 0px;
	text-align: left;
}

.content_left_section form select {
	margin-right: 11px;	
}

.content_left_section form label {
	display: inline-block;
	
	margin-left: -2px;
}

.content_left_section form .form_row{
	margin-bottom: 40px;
}

.content_left_section .inputfield {
	color: #000;
	font-variant: normal;
	height: 16px;
	padding: 2px;
}
#content_right .content_right_section {
	margin: 0 30px 0 0;
}

/*
#content_right .content_right_section {
	padding: 0 0 15px 0;
	margin: 0 30px 15px 0;
	background: url(images/templatemo_horizontal_divider.jpg) bottom repeat-x;
}
*/
#right_section_img{
	float: left;
	border: 5px solid #2f2c29;
	margin: 3px 20px 0 0;
	width: 186px;
	height:186px;
}

.content_right_section p{
	text-align: justify;
	padding-bottom: 10px;
}

#content_right .content_right_2column_box {
	float: left;
	width: 250px;
	margin-right: 30px;
}

#content_right .gallery_box {
	float: left;
	width: 250px;
	padding: 5px;
	
	text-align: center;
	margin-right: 24px;
}



.gallery_box a {
	color: #FFF;
	text-decoration: none;
}

.gallery_box a:hover {
	text-decoration: underline;	
}

.gallery_box img{
	/*margin: 0 0 8px 0;*/
	border: none;
	width:250px;
	height:150px;
}

/* footer */
#templatemo_footer {
	clear: both;
	width: 940px;
	margin-bottom: 10px;
	padding: 15px 0 10px 0;
	text-align: center;
	color: #b0af54;
	
	background: #221f1d url(images/content_bottom.jpg) bottom no-repeat;
}

#templatemo_footer a{
	color: #b0af54;
	text-decoration: underline;
	font-weight: normal;
}
#slogan{
text-color:black;
}
#my{
background-color:darkslategray;

}
/* end of footer */
</style>
<script>
function generateReport()
{
    window.location.href = '#bookings';
}
</script>
<head>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





</head>
<body>
<div id="containr">
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
		
    	<div id="templatemo_menu">
            <ul style="background-color:black;">
                <li><a href="index1.php" class="current">Home</a></li>
				
				<li><a href="index1.php" onClick="generateReport();">Bookings</a></li>
                
				<li><a href="index1.php">Services</a></li>
               
                <li><a href="index1.php">Locations</a></li>
                <li><a href="contact.php">Contact</a></li>
                
				<li><a href="profile.php" class="last">Profile</a></li>
            </ul> 
        </div>   
     <div>
			<img src="images/yol.gif" style="height: 250px; width: 940px;">
		</div>		
    </div> <!-- end of banner -->
    
    <div id="templatemo_content">
    
    	<div id="content_left">
        	<div class="content_left_section">
            	 <form action="booing.php" method="post">
            	<div class="content_title_01">Booking</div>
					<div class="form_row" style="margin-bottom:20px;">
					<label style="color:white; font-size:15px;">Location:</label>
					<select  required name="Locations" style="margin-left: 22px; >
							<option value="Location">Location</option>
							<option value="Delhi">Delhi</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Calicut">Calicut</option>
							<option value="Gwalior">Gwalior</option>
					</select>
					</div>
					<div class="form_row" style="margin-bottom:0px;">
					
           <label style="color:white; font-size:15px;">Check in:</label>
			 <input type="date" id="datepicker" name="check-in" value="check-in" style="margin-left: 22px;/>
			 /*<span class="glyphicon glyphicon-calendar" style="">
             </span>
							</div>
                    
                      <div class="form_row" style="margin-bottom:10px;">
                            <label style="color:white; font-size:15px;">Check out:</label>
                    <input type="date" name="check-out" value="check-in" style="margin-left:12px;margin-top: 17px;">
                           
                      </div>
                        
                        <div class="form_row"  >
                            <label style="color:white; font-size:15px;">Persons:</label>
							<select name="No"style="width: 30px;margin-left: 25px; ">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="more options">more options..</option>
							</select>
                            
                        	
                             <label style="color:white; font-size:15px;">Rooms:</label>
                           <select name="rooms"style="width: 30px;margin-left: 13px; ">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="more options">more options..</option>
							</select>
                            
                        </div>
                        
                        <div class="rc_btn_" style="margin-left:20px;">
						<input type="submit" class="btn btn-success" value="check Availability">&nbsp;
						<a type="button" class="btn btn-primary" style="color:white; "href="logout.php">Logout</a>
						</form>
						
  
  <font color="white">
  <!-- Trigger the modal with a button -->
 <!-- <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Log In</button>

  <!-- Modal -->
  <form role="form" method="post" action="login.php">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content"id="my" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Register Here</h4></center>
        </div>
        <div class="modal-body">
        <img src="C:\xampp\htdocs\nitc project\hotel_609\images\YOLO-TRAVEL-LOGO.png"   style="height: 50px;
   
    margin-left: 242px;
    margin-bottom: -28px;">
		  <div id="contaner">
	
	
	<div class="row">
      <div  class="col-md-4" style="margin-left:10px; font-size:20; red">
	 
		 </div>
<div class="col-md-4" width="500px" style="    width: 60.333333%;
    margin-left: 124px;" >


<hr class="devider" style="    height: 6px;
    background-color:firebrick;margin-top: 40px;
    margin-bottom: 17px;order: 0;
    border-top: 0px solid #eee;">
 
 
 <div class="form-group"> 
<label>Email</label>  <input type="email" name="email" class="form-control" font face="italic" placeholder="Enter  Email">
</div>
<div class="form-group"> 
<label>Password </label><input type="password" name="password" class="form-control" font face="italic" placeholder="Enter Password">
</div>
</font> 

<div class="form-group"> 

<br>
<center><button type="submit" class="btn btn-primary" value="submit">Log In  </button>
<button type="button" class="btn btn-danger"> Sign Up  </button></center>

 </div>
</div>     
	</div>	
	
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </form>
</div>
						                        
                    </form>
                <div class="cleaner">&nbsp;</div>
            </div> <!-- end of booking -->
            
            <div class="cleaner_h30">&nbsp;</div>
            <div class="cleaner_horizontal_divider_01">&nbsp;</div>
            <div class="cleaner_h30">&nbsp;</div>
             
            <div class="content_left_section">
            <div class="content_title_01">Latest News</div>
                
                <div class="news_title">Rooms at best Price</div>
                    <font style="color:white;"> <p>In our Website, we guarantee for the best price.you will get best deals here....<br> <a href="#">read more</a></p>
					</font>
                <div class="cleaner_h30">&nbsp;</div>

                <div class="news_title">Make changes to your bookings anytime</div>
                    <font style="color:white;"> <p>Now you can make relevent changes to your bookings(change or cancel) Anytime.....<br><a href="#">read more</a></p></font>
                  <div class="cleaner_h20">&nbsp;</div>
                    <div > <div ><button type="button" class="btn btn-warning">View More</button></div>   </div>         
                </div>   <!-- end of news section -->
                <div class="cleaner_h30">&nbsp;</div>

            
        </div> <!-- end of content left -->
        
        <div id="content_right">
        
        	<div class="content_right_section">
        	
                <div class="content_title_01">Welcome to  hotel &amp; travel</div>
            <img src="images/right_content_img.jpg" alt="image" id="right_section_img" />
               <font style="color:white;"> <p>This is a Online Room Booking website where you can book rooms in selected hotels in selected city. We ensure you a best Room service at best prices. On our website you can get various Discount offers.</p>
                
              <p>There are various packages available for rooms with different services, different Quality at different Rates. You can select any package according to your budget or comfort.  </p>
              <p>By our site, you get an original view of the rooms and locations so that you can select rooms of your choice. No fake pictures.....</p>
			  </font>
       	  </div>
            
            
			<div class="cleaner_h40">&nbsp;</div>
            
            <div class="content_right_2column_box">
            	<div class="content_title_01">Offers Available</div>
                <font style="color:white;"> <p>For the surity of our customer satisfaction we provide some offers..</p>
                <ul>
                	<li>20% Discount on super delux rooms</li>
                    <li>Free meals for 1 day on couple package</li>
                    <li>Up to 40% discounts on Family packages</li>
                    <li>No extra charges for booking </li>
                    <li>20% discount on Spa and massage services</li>
                </ul> 
				</font>
                <div class="cleaner_h10">&nbsp;</div>
                <div ><button type="button" class="btn btn-warning">View More</button></div>          
            </div>

            <div class="content_right_2column_box">
            	<div class="content_title_01">Services</div> 
 <font style="color:white;">				
                <p>We want to provide our customer with the best deals and best quality... </p>           
                <ul>
                	<li>Tour guides Available at our hotels</li>
                    <li>Transport Facilities </li>
                    <li>Fastest room services</li>
                    <li>100% Cashback in case of cancelation of booking</li>
                </ul>
				</font>
				<br>
				<br>
				<br>
                <div class="cleaner_h10">&nbsp;</div>
                <div > <div ><button type="button" class="btn btn-warning">View More</button></div>   </div>          
            </div>    
            
            <div class="cleaner_h40">&nbsp;</div>
            
            
                 
        	<div class="cleaner_h20">&nbsp;</div>
        </div> <!-- end of content right -->
        
        <div class="cleaner">&nbsp;</div>
    </div>
	
	<div class="row" style="background-color:grey; opacity:0.8; border-radius:.8em; width:1278px;margin-left:-175px;">
     <div  class="col-md-1">
     </div>	 
<div  class="col-md-8">
<table>
<tr> 
<td><img src="images/h1.jpg" alt="image" border="5" style="width:300px; height:200px;border-radius:0.3em;padding:10px;margin-left:-80px;"></td>
<td><img src="images/h2.jpg" alt="image"  style="width:300px; height:200px;border-radius:0.3em;padding:10px;"></td>
<td><img src="images/h3.jpg" alt="image"  style="width:300px; height:200px;border-radius:0.3em;padding:10px;"></td>
<td><img src="images/h5.jpg" alt="image" style="width:300px; height:200px;border-radius:0.3em;padding:10px;"></td>
</tr>
<tr style="color:gold;">
<td style="text-align:center;">Normal Rooms(without AC)</td>
<td style="text-align:center;">Deluxe Rooms for couples(AC)</td>
<td style="text-align:center;">Super Deluxe room(AC,TV)</td>
<td style="text-align:center;">Deluxe Rooms for families</td>
</tr>
</table>
 </div> 
<div  class="col-md-1">
     </div>	   
	</div>	
   
    <div id="templatemo_footer">
    Copyright © 2048 <a href="#"><strong>manish&Rahul</strong></a> | <a href="http://mani/#" target="_parent">nitc project</a> by <a href="http://nitc.ac.in" target="_parent">Manish&Rahul</a>
        <div style="clear: both; margin-top: 10px;">                
            <a href="http://yoloicon/#"><img style="border:0;width:120px;height:50px" src="images/btm_img_01.jpg" alt="yolo img icon" width="88" height="31" vspace="8" border="0" /></a>
            <a href="http://yoloiconimg2/#2"><img style="border:0;width:120px;height:50px"  src="images/btm_img_02.jpg" alt="yolo icon 2!" vspace="8" border="0" /></a>
        </div> 
	</div> <!-- end of footer -->
</div> <!-- end of container -->
<!-- Free Website Templates @ TemplateMo.com -->
<div align=center>All Rights are Reserved for this website<a href='http://mani/$'> © Manish ® Rahul </a></div></body>
</html>