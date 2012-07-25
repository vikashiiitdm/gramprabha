<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>E-CHOUPAL LOGIN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />



<!--for gallery-->


<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',6000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '45px'},500 );
	
	//Display the content
	$('#gallery .content').html(caption);
	
	
}

</script>
<style type="text/css">
body{
	font-family:arial
}

.clear {
	clear:both
}

#gallery {
	position:relative;
	height:242px
}
	#gallery a {
		float:left;
		position:absolute;
	}
	
	#gallery a img {
		border: 2px solid #ccc;
		
	}
	
	#gallery a.show {
		z-index:500
	}

	#gallery .caption {
		z-index:600; 
		background-color:#000; 
		color:#ffffff; 
		height:45px; 
		width:100%; 
		position:absolute;
		bottom:0;
		margin-left: 2px;
	}

	#gallery .caption .content {
		margin:5px
	}
	
	#gallery .caption .content h3 {
		margin:0;
		padding:0;
		color:#1DCCEF;
	}
	

</style>


<!--For left menu-->
 <!--background color in #menuu A 006633 and F0A848-->

<STYLE type=text/css media=screen>
#menuu {
	BACKGROUND: #ffffff; WIDTH: 15em;  
}
#menuu UL {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 4px 0 0 0; PADDING-TOP: 0px; list-style-type: none;
}
#menuu A {
	BORDER-RIGHT: #888 3px solid; PADDING-RIGHT: 0px; BORDER-TOP: #ccc 1px solid; DISPLAY: block; PADDING-LEFT: 5px; PADDING-BOTTOM: 7px;  MARGIN: 0px; FONT: bold 12px/18px arial, helvetica, sans-serif; BORDER-LEFT: #bbb 1px solid; PADDING-TOP: 7px; BORDER-BOTTOM: #555 4px solid;
}
#menuu A {
	BACKGROUND: #999  url(images/headerbg.jpg) top center repeat-x; COLOR: #fff; TEXT-DECORATION: none; 
	position: relative;
    z-index: 5000;
    
}
#menuu A:hover {
	BACKGROUND: #fff url(images/headerbg11.png) top center repeat-x;; 
	COLOR: #000;
}
#menuu LI {
	POSITION: relative; PADDING-BOTTOM: 1px;
	
}
#menuu LI LI {
	PADDING-BOTTOM: 0px;
}

#menuu UL UL UL {
	LEFT: 100%; WIDTH: 100%; POSITION: absolute; TOP: 0px; 
}
DIV#menuu UL UL UL {
	DISPLAY: none
}
DIV#menuu UL UL LI:hover UL UL {
	DISPLAY: block
}
DIV#menuu UL UL LI:hover UL {
	DISPLAY: block
}
DIV#menuu UL UL UL LI:hover UL {
	DISPLAY: block
}
</STYLE>

</head>
<body bgcolor="#00CC00">
<div id="wrap">

<div id="header">

		
		<form method="get" action="http://www.google.com/search">

<div style="border:0px solid black;padding:1px;width:100%;">

<table width="100%" border="0" cellpadding="0">
  <tr> 
        <td width="1%"></td>
	<td width="73%">

	 <table>
		<tr> 
			<td>  <img src="images/3 - Copy.jpg" height="86" ></td><td></td>
	 		<td><h3><font color ="BLUE" ><I>GRAMPRABHA <br>AN INITIATIVE TOWARDS E-CONNECTING THE FARMERS OF INDIA </I></font> </h3></td>
	        </tr>
	</table>
     </td>
     <td width="25%" align="right" style="font-size:95%">

		<input type="text"   name="q" size="20" maxlength="255" value="" />
		<input type="submit" value=" Search " /><br><br>
		<input type="checkbox"  name="sitesearch" value="www.gramsabha.co.in" checked />
		 <font color="BLUE" size="2">only search E-choupal</font>
     </td>
      <td width="1%"></td>
  </tr>
</table>
</div>

</form>

</div>

<div id="menu">
<ul>
<li><a href="index.html">HOME</a></li> 
<li><a href="temp.php">REGISTER</a></li> 
<li><a href="auth.php">LOGIN</a></li> 
<li><a href="info.php">INFO</a></li>
<li><a href="http://agricoop.nic.in/">Minstry OF Agriculture</a></li> 
<li><a href="feedback.html">Your Suggestions</a></li>
<li><a href="address.html">CONTACT Us</a></li>

</ul>
</div>

<div id="content">

<MARQUEE scrollAmount=3 direction=left> <b>GramPrabha's Initiative :-> Government Announces to sell seeds at </b> <a href="#"><b>subsidised price</b></a>. </MARQUEE>



<div id="right">
<div class="contentright">

<div class="contentrightbox">



<DIV id=menuu>

<UL>
  <LI>
  
  <UL>
    <LI><A title="" href="#">GramPrabha </A> 
    <UL>
      <LI><A title="" href="#">About GramPrabha</A> </LI>
      <LI><A title="" href="#">Vision</A> </LI>
      <LI><A title="" href="#">Administration</A></LI>
		<LI><A title="" href="#">Infrastructure</A></LI>
		<LI><A title="" href="#">Collaborators</A></LI>
		
		<LI><A title="" href="#">How to Apply</A></LI>
      </UL></LI></UL>
	</LI>
	
	
	<LI>
  
  <UL>
    <LI><A title="" href="#">JOBS </A> 
    <UL>
      <LI><A title="" href="#">SANCHALAK</A> </LI>
      <LI><A title="" href="#">INFOMASTER</A> </LI>
      <LI><A title="" href="#">SERVER_ADMIN</A></LI>
	  <LI><A title="" href="#">JAN_LOKAYUKT</A></li>
		
  </UL></LI></UL>
	</LI>
	
	
	<LI>
  
  <UL>
    <LI><A title="" href="#">STUDY </A> 
    <UL>
      <LI><A title="" href="#">Programme</A> </LI>
      <LI><A title="" href="#">Counselling</A> </LI>
	 <LI><A title="" href="#">Research & Development</A> </LI>
	 <LI><A title="" href="#">Facilities</A> </LI>
			<LI><A title="" href="#">Hindi Calendar</A>
      </LI></UL></LI></UL>
	</LI>
	
	
	<LI>
  
  <UL>
    <LI><A title="" href="#">PEOPLE </A> 
    <UL>
      <LI><A title="" href="faculty.html">Farmers</A> </LI>
      <LI><A title="" href="#">Sanchalaks</A> </LI>
      <LI><A title="" href="#">Office Administration</A></LI>
		<LI><A title="" href="#">Traders</A></LI>
			<LI><A title="" href="#">Other Staff</A>
      </LI></UL></LI></UL>
	</LI>
	
	
	<LI>
  
  <UL>
    <LI><A title="" href="#">LIFE </A> 
    <UL>
      <LI><A title="" href="#">Villages of India</A> </LI>
      <LI><A title="" href="#">Farmer's's Life</A> </LI>
      <LI><A title="" href="#">Achievements</A></LI>
		<LI><A title="" href="#">Local Fests</A></LI>
			<LI><A title="" href="#">Comparison</A></LI>
      </UL></LI></UL>
	</LI>
	
	
	<LI>
	  
  <li>
<ul> 
	
	
	  <LI><A title="" href="#">QUICK LINKS</A></li>
	
	  </ul></li>
	  </li>
  
 
	
	
</UL>
</DIV>





</div>
</div>




</div>

<div id="left">
<h2><p align="center">Notices&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p> </h2>
<div class="box">
<MARQUEE scrollAmount=2 direction=up >
<ul>
<li><b>1)</b> National Project on Management of soil health and fertility <a href="#"><b>[Read More]</b></a></li> 
<li><b>2)</b> Operational guidelines of National Food Security Mission <a href="#"><b>[Read More]</b></a></li> 
<li><b>3)</b> Macro Management Guidelines 2011 <a href="#"><b>[Read More]</b></a></li> 
<li><b>4)</b> Plant Protection and Quarantine <a href="#"><b>[Read More]</b></a></li> 
<li><b>5)</b>Administrative Approval of Modified National Agriculture Insurance Scheme (MNAIS) :2010-11  <a href="#"><b>[Read More]</b></a></li> 
<li><b>6)</b> Proceedings of orientation-cum-review workshop on modified ATMA schemeheld on August 3-4,2010 <a href="#"><b>[Read More]</b></a></li> 
<li><b>7)</b> opening of the call for proposals 2010 :Benefits Sharing Fund <a href="#"><b>[Read More]</b></a></li> 
<li><b>8)</b> Results Framework Document (RFD) for department of agriculture and cooperation (2010-11) <a href="#"><b>[Read More]</b></a></li> 
<li><b>9)</b>  Operational guidelines of Revised ATMA scheme<a href="#"><b>[Read More]</b></a></li> 
</ul>
</MARQUEE>
</div>







<h2><p align="center">News and Events&nbsp;&nbsp;&nbsp;</p> </h2>
<div class="box">
<ul>
<li><b>1)</b>  Sonalika Launches New tractors, plans to sell first 100 on 30% discount <a href="#"><b> [New]</b></a></li> 
<li><b>2)</b> Colloquium by Dr. APJ Abdul Kalam <a href="#"><b> [New]</b></a></li> 
<li><b>3)</b> Government Distributes Subsidised seeds<a href="#"><b>[New]</b></a></li> 



</ul>
</div>



 









</div>



<div class="contentleft">
<div class="contentleftbox">
<p><h3>GramSabha's Success </h3></p>
		
<div id="gallery">

	<a href="#" class="show">
		<img src="images/agriculture hand.jpg" alt="#" width="550" height="240" title="" alt="" rel="<h3>GramSabha</h3>Born to revolutionazie agriculture. "/>
	</a>
	
	<a href="#">
		<img src="images/agriculture.jpg" alt="#" width="550" height="240" title="" alt="" rel="<h3>GramSabha</h3>for the betterment of farmers "/>
	</a>
	
	<a href="#">
		<img src="images/agriculture2.jpg" alt="#" width="550" height="240" title="" alt="" rel="<h3>GramSabha</h3>In Action"/>
	</a>

	<div class="caption"><div class="content"></div></div>
</div>

<h3>LOGIN</h3>
<?php
$db=mysql_connect("localhost","root","")or die("error");
mysql_select_db('my_db',$db)or die("error");
$name=$_POST['username'];
$pass=md5($_POST['password']);
$query="select username,password from user where  username='$name' and password='$pass'";
$result=mysql_query($query,$db)or die(mysql_error($db));
 /*While($row=mysql_fetch_array($result)){
	 foreach($row as $values){
		 echo $value.' ';
		 }*/
		 //echo '</br>';
		 //}
$rowCheck = mysql_num_rows($result);
if($rowCheck>0){
					
header('Refresh:1;URL=gramprabha.html?redirect='.$SERVER['PHP_SELF']);
session_start();
$_SESSION['logged']=0;
}
else
{
echo "'error' username or password is wrong<br>";
header('Refresh:0;URL=echoupal_login.php?redirect='.$SERVER['PHP_SELF']);
}
?>
</div>
</div>




</div>








<div id="bottom">
<div class="contentbottom">
<h2>
  <p align="center"> President's Message&nbsp;&nbsp;</p></h2>
<div class="contentbottombox">
<table><tr><td><img src="abdulkalam.jpg" width="85"></td><td>&nbsp;</td>
<td><p>
Here is some message from the President of<strong> e-choupal</strong> administration.. Here is some more lines from the director. </p></td></tr></table>
</div>
</div>

<div class="contentbottom">
<h2><p align="center">Documentation&nbsp;&nbsp;</p></h2>
<div class="contentbottombox">
<table><tr><td><p>
<b>Please click on the documentation type </b><br />
<b><big><p align="center"><a href="#">SRS</a>&nbsp; <a href="#">User Manual</a>&nbsp; <a href="#">Design Data</a>&nbsp; <a href="#">Testing Data</a>&nbsp; <a href="#">Acknowledgements</a>&nbsp;&nbsp; </p></big></b>
</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p></td></tr></table>

</div>
</div>

<div class="contentbottom">
<h2><p align="center">Hindi Calendar&nbsp;&nbsp;</p></h2>
<div class="contentbottombox">
<table><tr><td><img src="calendar.gif" style="border:1px solid #000" width="200px" height="110px"></td><td>&nbsp;</td>
</tr></table>

</div>
</div>

<SPAN style="FLOAT: left; POSITION: relative; left: +1px; top: -13px">
<div id="left">
<h2><p align="center">Archive&nbsp;&nbsp;&nbsp;&nbsp; </p> </h2>
<div class="box">
<ul>
<li><b>1)</b> Distinguished Lectures By Prof. Vikash Varanwal  <a href="#"><b>[New]</b></a></li> 
<li><b>2)</b> IIITDMJ gets Contract for Weather Manipulating Machine<a href="#"><b>[New]</b></a></li> 
<li><b>3)</b> Farmer's Achievements <a href="#"><b>[New]</b></a></li> 


</ul>
</div></div></span>

</div>




<div style="clear: both;"> </div>

<div id="footer">
&copy; Copyright 2010 IIITDM Jabalpur<a href="#"></a> | Design by <a href="#">Vikash Kumar Varanwal</a>
</div>

</div>
</body>
</html>