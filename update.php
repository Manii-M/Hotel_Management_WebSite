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

.hh{ text-color:white;
	padding: 18px 6% 60px 6%;
	background: darkslategray;
	margin-bottom:100px;
	border: 1px solid rgb(18,31,31);
	box-shadow:	
		0pt 2px 5px rgb(18,31,31);,	
		0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	border-radius: 4px;
}
/* end of footer */
</style>











<script>
function generateReport()
{
    window.location.href = '#bookings';
}
</script>



<script>
function myfunction() {
    alert("you have to log in first!");
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
                <li><a href="profile.php">Profile</a></li>
                <li><a href="contact.html" class="last">Contact</a></li>
            </ul> 
        </div>   
     
    </div> <!-- end of banner -->
<div id="container" >
	
	
	<div class="row" >
      <div  class="col-md-4" style="margin-left:10px; font-size:20; red">
	 
		 </div>
<div class="col-md-4 hh" style="width=500px;height=400px;  margin-top:10px;  margin-left: -16px;"  >
<form role="form" method="post" action="update1.php" >
<font color="white">
<center>
		
		<h2>Change Your Password</h2>
	</center>
<hr class="devider" style="height:0px; background-color:red;">
 
 <div class="form-group"> 
<label>New Password</label> <input type="password" name="npass" class="form-control" font face="italic" placeholder="New Password">
</div>
 <div class="form-group"> 
<label>Confirm Password</label>  <input type="password" name="cpass" class="form-control" font face="italic" placeholder="Confirm Password">
</div>

<br>
</font>
<center><button type="submit" class="btn btn-primary" value="submit">Confirm</button>
<button type="reset" class="btn btn-danger"> Reset   </button></center>
</form>
 </div>
</div>     
	</div>	
	
</div>
</body>
</html>