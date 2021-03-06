<?php 
include_once("scripts/check_user.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Backburnr Social Network Engineering Training Course</title>
<link rel="stylesheet" href="style/style.css"/>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style type="text/css">
.banner{
	margin: 0px auto;
	width:78%;
	color:#333;
	text-shadow: 0px -1px #000000;
}
.topHeaderimg1{
	background:url(images/code.png) no-repeat;
	background-size:100%;
	width:28%;
	height:200px;
	min-height:480px;
	float: left;
	text-align:center;
	margin-left:24px;
}
.topHeaderimg2{
	clear:right;
	background:url(images/video.png) no-repeat;
	background-size:100%;
	width:28%;
	height:200px;
	min-height:480px;
	float: left;
	text-align:center;
	margin-left:24px;
}
.topHeaderText{
	width:58%;
	float:left;
}
.topContent{
	width:44%;
	min-height:480px;
	float: left;
	text-align:center;
	margin-left:24px;
	box-shadow: 1px 1px 6px #333;
	color:333;
	word-break:break-strict;
	background-color:#F8F8F8;
}
.contentTop p a:link{
	color: #287315;
	text-decoration: none;
}
.contentTop p a:hover, a:active, a:focus{
	color: #287315;
	text-decoration: underline;
}
.topContent p{
	color:333;
	text-align:left;
}
.topContent li{
	text-align:left;
	color:333;
}
.topContent img{
	max-width:80%;
}
.content-bottom{
	width:90%;
	margin:24px auto;
}
.topsection{
	float:left;
	width:58%; 
	box-shadow: 1px 1px 6px #333 inset;
	border-radius:6px;
	-moz-border-radius:6px;
	padding-top:12px;
	background:#F8F8F8;
}
</style>
<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } 
ul.nav a { zoom: 1; }
</style>
<![endif]-->
</head>
<body>
<?php include_once("header_template.php"); ?>
<div class="container">
  
  <?php include_once("sidebar_template.php") ?>
  <div class="content">
  <div class="banner">
  <h2 style="text-align:center; color:#333;">Social Netork Engineering Training Course and Most Raw In Your Face Social Experience On The Interweb</h2>
  </div>
  <!---------------------->
  <div style="width:100%;">
    <div style="float:left; width:28%;padding-left:12px;"><img src="images/code.png" alt="p1" style="width:100%;"></div>
    <div class="topsection"><p>All code for the training course is available on <a href="https://github.com/IsaacNeal/backburnr" target="_blank">github</a> and is updated frequently. Don't forget to check out <a href="http://www.worldofwebcraft.com" target="_blank">World Of Webcraft</a> for code help and advice, and to learn how to become a contributor to the project. Check back often for new updates!</p></div>
    </div>
    <div style="width:100%; clear:both; padding-top:36px;">
    <div style="float:left; width:28%;padding-left:12px;"><img src="images/video.png" alt="p1" style="width:100%;"></div>
    <div class="topsection"><p>Catch in depth video tutorials and learn to program your own custom social community website from scratch. Video lessons will cover a wide range of programming techniques and logic. The system will be built using open source technologies like PHP, MySQL, JavaScript, HTML, and CSS. Don't forget to <a href="http://www.youtube.com/user/iPriceProductions">subscribe</a> to get alerts when new videos are released!</p></div>
    </div>
    <!---------------------->
    <!--<div class="topContent">
    <h2 style="text-align:center;">Get The Code</h2>
    	<img src="images/bracketts.png" alt="source files"/>
        <ul>
        <li>Get the source files</li>
        <li>Build your site</li>
        <li>Fork Us On Github</li>
        <li>Become a contributor</li>
        </ul>
        <p>
        All code for the training course is available on <a href="https://github.com/IsaacNeal/backburbr" target="_blank">github</a> and is updated frequently. Don't forget to check out <a href="http://www.worldofwebcraft.com" target="_blank">World Of Webcraft</a> for code help and advice, and to learn how to become a contributor to the project. Check back often for new updates!
        </p>
    </div>
    <div class="topContent">
    <h2 style="text-align:center">Watch The Videos</h2>
    	<img src="images/videosbtn.png" alt="videos" />
        <ul>
        <li style="list-style-type:none; text-align:center;">Learn To Code &darr;</li>
        <li>Registration and Login Systems</li>
        <li>Custom User Profiles</li>
        <li>Conversation systems</li>
        <li>Messaging systems</li>
        <li>Much Much More...</li>
        </ul>
        <p>Catch in depth video tutorials and learn to  program your own custom social community website from scratch. Don't forget to <a href="http://www.youtube.com/user/iPriceProductions">subscribe!</a></p>
    </div> -->
  
  <!--<div class="clearfloat"></div> -->
    <!-- -->
    <div class="clearfloat"></div>
    <div class="content-bottom">
      <h2 style="color:#285C01; text-align:center;">Section 1 In Progress: Registration and Log In</h2>
    	<p>
        	The backburnr social engineering training course will be released in sections. Each section will contain multiple video lessons, each specific to the section. This system is intended to be educational, and is offered <b>as is</b> with no warranty in the hopes that it will be useful. Check back for updates often as code will be updated daily. 
        </p>
    </div>
    <!-- end .content --></div>
    <div class="clearfloat"></div>
  <!-- end .container --></div>
<?php include_once("footer_template.php") ?>
</body>
</html>