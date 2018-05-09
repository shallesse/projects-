<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page

 // select loggedin users detail

?>



<!DOCTYPE html>
<html class="no-js" lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<!-- head -->
<head>



<?php 
$classicb=0;
$classicqty=0;
$total=0;
$Swiss=0;
$Blue=0;
$Gouda=0;
$Slices=0;
$Feta=0;
$Mozzarella=0;
$Ketchup=0;
$Mayo=0;
$Ranch=0;
$Peri=0;
$Spicy=0;
$Basil=0;
$Cream=0;
$Fruit=0;
$Tabasco=0;
$Sweet=0;
$Onion=0;
$Tomato=0;
$Chillies=0;
$Pepper=0;
$Sweetb=0;
$Hashbrown=0;
$Creamy=0;
$Gerk=0;
$Spicys=0;
$drinks=0;
$drinksqty=0;
$sfr=0;
$sfrp=18;
$cfr=0;
$cfrp=25;
$spfr=0;
$spfrp=27;
$wings=0;
$patty=0;
$patty_err=0;
$buns=0;
$buns_err=0;
            if(isset($_POST["submit"]))
			{
			 
            if(isset($_POST['patty']))
            $patty=$_POST["patty"];
            else
            $patty_err=1;

            if(isset($_POST['buns']))
            $buns=$_POST["buns"];
            else
            $buns_err=1;

	       $classicb=$_POST["classicb"];
	       $classicqty=$_POST["classicqty"];
		   $sfr=$_POST["sfr"];
	       $cfr=$_POST["cfr"];
		   $spfr=$_POST["spfr"];
	       $wings=$_POST["wings"];
	       $drinks=$_POST["drinks"];
	       $drinksqty=$_POST["drinksqty"];

           if(isset($_POST["Swiss"]))
	       $Swiss=$_POST["Swiss"];
	
	       if(isset($_POST["Blue"]))
	       $Blue=$_POST["Blue"];
				
	       if(isset($_POST["Gouda"]))
	       $Gouda=$_POST["Gouda"];
	
	       if(isset($_POST["Slices"]))
	       $Slices=$_POST["Slices"];
	
	       if(isset($_POST["Feta"]))
	       $Feta=$_POST["Feta"];
	
	       if(isset($_POST["Mozzarella"]))
	       $Mozzarella=$_POST["Mozzarella"];
	
	       if(isset($_POST["Ketchup"]))
	       $Ketchup=$_POST["Ketchup"];
	
           if(isset($_POST["Mayo"]))
	       $Mayo=$_POST["Mayo"];
	
	       if(isset($_POST["Ranch"]))
	       $Ranch=$_POST["Ranch"];
	
	       if(isset($_POST["Peri"]))
	       $Peri=$_POST["Peri"];
	
	       if(isset($_POST["Spicy"]))
	       $Spicy=$_POST["Spicy"];
	
	       if(isset($_POST["Basil"]))
	       $Basil=$_POST["Basil"];
	
	       if(isset($_POST["Cream"]))
	       $Cream=$_POST["Cream"];
	
	       if(isset($_POST["Fruit"]))
	       $Fruit=$_POST["Fruit"];
	
	       if(isset($_POST["Tabasco"]))
	       $Tabasco=$_POST["Tabasco"];
	
	       if(isset($_POST["Sweet"]))
	       $Sweet=$_POST["Sweet"];
	
	       if(isset($_POST["Onion"]))
	       $Onion=$_POST["Onion"];
	
	       if(isset($_POST["Tomato"]))
	       $Tomato=$_POST["Tomato"];
	
	       if(isset($_POST["Chillies"]))
	       $Chillies=$_POST["Chillies"];
	
	       if(isset($_POST["Pepper"]))
	       $Pepper=$_POST["Pepper"];
	
	       if(isset($_POST["Sweetb"]))
	       $Sweetb=$_POST["Sweetb"];
	
	       if(isset($_POST["Hashbrown"]))
	       $Hashbrown=$_POST["Hashbrown"];
	
	       if(isset($_POST["Creamy"]))
	       $Creamy=$_POST["Creamy"];
	
	       if(isset($_POST["Gerk"]))
	       $Gerk=$_POST["Gerk"];
	
	       if(isset($_POST["Spicys"]))
	       $Spicys=$_POST["Spicys"];
	   
	       $total=(($classicb * $classicqty) + ($sfr * $sfrp) + ($cfr * $cfrp) + ($spfr * $spfrp) + ($drinks * $drinksqty) + $Swiss +
	       $Blue + $Gouda + $Slices + $Feta + $Mozzarella + $Ketchup + $Mayo + $Ranch + $Peri + $Spicy + $Basil + $Cream + $Fruit + 
	       $Tabasco + $Sweet + $Onion + $Tomato +      $Chillies + $Pepper + $Sweetb + $Hashbrown + $Creamy + $Gerk + $Spicys);

           } 

?>
<form action="MenuUpdated1.php" method="post">


<!-- meta -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title itemprop="name">MENU</title>

<meta name="description" content="Custom Build your Ultimate BURGER!!" />
	
<style>
#ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
   }

 #li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>

</script>

		<script type="text/javascript">
		    window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/", "ext": ".png", "source": { "concatemoji": "http:\/\/bnbjoint.com\/wp-includes\/js\/wp-emoji-release.min.js" } };
		    !function (a, b, c) { function d(a) { var c, d, e, f = b.createElement("canvas"), g = f.getContext && f.getContext("2d"), h = String.fromCharCode; return g && g.fillText ? (g.textBaseline = "top", g.font = "600 32px Arial", "flag" === a ? (g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3) : "diversity" === a ? (g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e) : ("simple" === a ? g.fillText(h(55357, 56835), 0, 0) : g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0])) : !1 } function e(a) { var c = b.createElement("script"); c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c) } var f, g; c.supports = { simple: d("simple"), flag: d("flag"), unicode8: d("unicode8"), diversity: d("diversity") }, c.DOMReady = !1, c.readyCallback = function () { c.DOMReady = !0 }, c.supports.simple && c.supports.flag && c.supports.unicode8 && c.supports.diversity || (g = function () { c.readyCallback() }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () { "complete" === b.readyState && c.readyCallback() })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji))) }(window, document, window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji 
{
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: black !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='http://bnbjoint.com/wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://bnbjoint.com/wp-content/plugins/social-media-button/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='http://bnbjoint.com/wp-content/themes/betheme-child/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-base-css'  href='http://bnbjoint.com/wp-content/themes/betheme/css/base.css' type='text/css' media='all' />

<link rel='stylesheet' id='mfn-icons-css'  href='http://bnbjoint.com/wp-content/themes/betheme/fonts/mfn-icons.css' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-grid-css'  href='http://bnbjoint.com/wp-content/themes/betheme/css/grid.css' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-layout-css'  href='http://bnbjoint.com/wp-content/themes/betheme/css/layout.css' type='text/css' media='all' />
<link rel='stylesheet' id='mfn-shortcodes-css'  href='http://bnbjoint.com/wp-content/themes/betheme/css/shortcodes.css' type='text/css' media='all' />



<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/jquery/jquery-migrate.min.js'></script>
 
<meta name="generator" content="WordPress 4.4.10" />
<link rel="canonical" href="http://bnbjoint.com/build-your-own/" />
<link rel='shortlink' href='http://bnbjoint.com/?p=2373' />
<link rel="alternate" type="application/json+oembed" href="http://bnbjoint.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fbnbjoint.com%2Fbuild-your-own%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://bnbjoint.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fbnbjoint.com%2Fbuild-your-own%2F&#038;format=xml" />
<script>var ms_grabbing_curosr = 'http://bnbjoint.com/wp-content/plugins/master-slider/public/assets/css/common/grabbing.cur', ms_grab_curosr = 'http://bnbjoint.com/wp-content/plugins/master-slider/public/assets/css/common/grab.cur';</script>
<meta name="generator" content="MasterSlider 2.7.1 - Responsive Touch Image Slider | www.avt.li/msf" />
<style>

   <p><rt><input type="reset" value="CANCEL ORDER"/></rt>
   <rt><input type="submit" name="submit" value="SUBMIT ORDER"/></rt>
   <rt><button type="button" onclick="history.back();">BACK</button></rt></p>
@font-face {font-family: "Chunkfive";src: url("");src: url("#iefix") format("embedded-opentype"),url("") format("woff"),url("http://bnbjoint.com/wp-content/uploads/2015/05/chunkfive.regular.ttf") format("truetype"),url("#Chunkfive") format("svg");font-weight: normal;font-style: normal;}
</style>
	

<style>
.award {
    padding-top: 95px;
}

.header-menu-right.header-stack #Top_bar .menu_wrapper{
margin-right:0px !important;
}

.header-menu-right #Top_bar .menu_wrapper {
    float: left !important;
    margin-left: 40px !important;
}

.header-stack.header-center #Top_bar .logo {
    text-align: left;
}


#menu > ul > li > a{
letter-spacing: 1px !important;
}

body.header-stack:not(.template-slider) #Header{
min-height: 175px;
}

.logoText{
display:none;
}

h2, h3 { font-weight: 700; }
h5, h6 { font-weight: 400; }

h1, h2, h3, h4, h5, h6{text-transform: uppercase;}

.heading-with-border { color: whitesmoke; display: inline-block; padding: 10px; margin-bottom: 25px;}

.type-post .post-nav, .type-post .post-meta .category, .type-post .single-photo-wrapper
{
display: none;
}

ul.customList
{
margin: 25px 0 0;
padding: 0;
list-style: none;
}

ul.customList li
{
list-style: none;
float: left;
margin-right: 5px;
}

body:not(.template-slider) #Header
{

min-height: 0;

}


/* Menu */

#Top_bar .logo
{
margin: 0 5px 0 0;
}

#Top_bar #logo {
    height: 80px;
    padding: 5px 0;
}
dy
{
   
    color:red;
    font-size:x-large;
    font-family:'Felix Titling';
}
de
{
    background-color:black;
    color:white;
}


/* Footer */
#Footer {font-size: 18px;background-size: 100% auto;}
#Footer .footer_copy { border: 0; }
#Footer .footer_copy .one { padding-top: 0; }
#Footer .footer_copy a#back_to_top { display: none; } 
#Footer .widget_nav_menu {padding: 0;}
#menu-footer-menu {list-style: none; padding: 0; margin: 0; text-align: center;}
#menu-footer-menu li {display: inline-block; width: auto;}
#menu-footer-menu li::after {border: 0}


/* Table menu */
table th, table td { border-width: 0 0 1px; }
table tr:first-child td { background: none; }
table tr:hover td { background: none; color: black; }
.table_menu td.c1 { text-align: left; width: 60%; }
.table_menu td.c2 { width: 20%; }
.table_menu td.c3 { width: 20%; }


#Footer .widget_nav_menu
{
padding: 0 !important;
}

#Footer .widgets_wrapper
{
padding-bottom: 0 !important;
}

#Footer
{
font-family: "Tiza",Arial,Tahoma,sans-serif;
font-size: 12px !important;
}

#Footer a
{
color: black!important;
text-decoration: underline;
}

#Footer a:hover
{
color: black !important;
}




/*********** form cssend ***********/

.displayNone{
display:none;
}

h1
{
color:white;
font-size:xx-large;
font-weight:bold;
font-family:'Felix Titling';
}
h2, h3{
color:white;
font-size:x-large;
font-weight:bold;
font-family:'Felix Titling';
}

ul{
    font-size:xx-large;
    font-weight:bold;
    
}

h6
{

	color:white;
}

rt
{
    font-size:x-large;
    color:black;
}

li{
    color:white;
}
hr
{
	color:white;
}

.infobox h3 {
color: black !important;
}

/*slider arrows*/
.ms-nav-prev, .ms-nav-next {
visibility: hidden;
}
	


#iframeCookieSet,#iframeCookieGet,#iframeCookieSetb,#iframeCookieGetb,#iframeCookieSetp,#iframeCookieGetp,#iframeCookieSetc,#iframeCookieGetc {
border:none;
}




    }


</style>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<!-- body -->
<body class="page page-id-2373 page-template-default _masterslider _ms_version_2.7.1  color-custom layout-full-width header-stack header-left sticky-header sticky-white subheader-both-center header-menu-right menu-highlight footer-copy-center";>

<!-- #Content -->
<ul id="ul">
  <li id="li"><a class="active" href="../index.php">Home</a></li>

  <li id="li"><a href="Contact.php"><span</span>&nbsp;Contact</a></li>
  <li id="li"><a href="register.php">About</a></li>
   <li id="li"><a href="register.php">Login</a></li>
   <?php
if (isset($_SESSION['user'])!="" ) 
{
    ?> <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li> <?php
}
?>
        
</ul>

<div id="Content">
	<div class="content_wrapper clearfix">
                                  
		<!-- .sections_group -->
		<div class="sections_group">
		
			<div class="entry-content" itemprop="mainContentOfPage">
				<div class="section    "  style="padding-top:100px; padding-bottom:0px; background-color:black; background-image:url(11.jpg)">;<div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column "><div class="column_attr  align_center" ><h6 class="heading-with-border"><li><b><span><h1>_________________________Classic Burgers_______________________</h1></span></b></li></br><li>
<p><u><h2>CHILLY CHEESE BOMB_____R50</u> </h2></br>
                    (chilly and chedder cheese burger filled with a single beef patty, onions, tomato and lettuce)</br>
</br></br></p>
                    <p><u><h2>BACON & CHEESE BURGER________R60</u></h2></br>
                    (two strips of bacon and chedder cheese filled with a double beef patty,guacomole and topped with salsa)</br>
</br></br></p>
<p><u><h2>BURGER JOINT BURGER__________R45</u></h2></br>
                    (BBQ grilled beef burger with a single patty, topped with onion, tomato and a hashbrown)</br>
</br></br</p>
<p><u><h2>VEGAN BURGER___________R50</u></h2></br>
                    (Vegan burger with a single soya patty, vegan cream cheese, spice salsa and classic mayonnaise)</br>
</br></br></p>
<p><u><h2>MUSHROOM BURGER__________R55</u></h2></br>
                    (Creamy Mushroom double stacked burger with cream cheese, cheddar cheese, gerkins, fried onions, roasted chillies and a classic sweet and sour sauce)</br>
</br></br></p>
<p><u><h2>MEGA BURGER__________R65</u></h2></br>
                    (Double thick grilled Chicken fillet patty with classic mayo and 3 cheeses with a side of fries and a shake)</br>
</br></br></p>
<p align="center">SELECT A CLASSIC BURGER OF YOUR CHOICE:
</br></br><select name="classicb">
                    <option>SELECT A CLASSIC BURGER</option>
                    <option value="50">CHILLY CHEESE BOMB</option>
                    <option value="60">BACON & CHEESE BURGER</option>
                    <optionvalue="45">BURGER JOINT BURGER</option>
                    <option value="50">VEGAN BURGER</option>
                    <option value="55">MUSHROOM BURGER</option>
                    <option value="65">MEGA BURGER</option>
	                </select></p>
<p align="center">Quantity  :
</br></br> <select name="classicqty">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
	                </select>

</li></div></div>

<div class="column one column_column "><div class="column_attr  align_center" ><h4 class="heading-with-border" style="margin: 0;"><h1>___________________________BUILD-A-BURGER_________________________</h1></h4></div></div><div class="column one column_divider ">
</div><div class="column one-second column_column "><div class="column_attr " ><ul class="buildYourOwnContent">
<li><dy><span>Pick-A-Patty</span></dy></li> 
<li>
<input type="radio" name="patty" value="20" <?php if($patty==20) echo "checked";?>/>Sweet Basted Beef Patty___[R20]</br>
<input type="radio" name="patty" value="20" <?php if($patty==20) echo "checked";?>/>Chilli Chicken Patty___[R20]</br>
<input type="radio" name="patty" value="30" <?php if($patty==30) echo "checked";?>/>Creamy Tuna Patty___[R30]</br>
<input type="radio" name="patty" value="15" <?php if($patty==15) echo "checked";?>/>Veggie Patty___[R15]</br>
<input type="radio" name="patty" value="35" <?php if($patty==35) echo "checked";?>/>Spicy Jalepeno Chicken Patty___[R35]</br>
<input type="radio" name="patty" value="15" <?php if($patty==15) echo "checked";?>/>Baked Soya Patty___[R15]</br></br>
<p><?php if($patty_err==1) echo "<dy>PLEASE SELECT A PATTY</dy>";?></p>
</li>

<li><dy>BUNS</dy></li>
<li>
<input type="radio" name="buns" value="6" <?php if($buns==6) echo "checked";?>/>Portuguese Buns___[R6]</br>
<input type="radio" name="buns" value="5" <?php if($buns==5) echo "checked";?>/>Whole Wheat___[R5]</br>
<input type="radio" name="buns" value="8" <?php if($buns==8) echo "checked";?>/>Honey Seeded Bun___[R8]</br>
<input type="radio" name="buns" value="7" <?php if($buns==7) echo "checked";?>/>Sesame Bun___[R7]</br>
<input type="radio" name="buns" value="8" <?php if($buns==8) echo "checked";?>/>Gluten Free___[R8]</br></br>
<p><?php if($buns_err==1) echo"<dy>PLEASE SELECT A BUN</dy>";?></p>
</li>


    <li><dy>SIDES</dy></li>
<li>
<h6>Skinny Fries (Qty)___R18</h6>
<select name="sfr">
		<?php
		for($i=0;$i<=5;$i++)
		echo "<option value='$i'>$i</option>";
		?>
		</select>

<h6>Cheesy Fries (Qty)___R25</h6>
<select name="cfr">
		<?php
		for($i=0;$i<=5;$i++)
		echo "<option value='$i'>$i</option>";
		?>
		</select>
<h6>Spicy Fries (Qty)_____R27</h6>
<select name="spfr">
		<?php
		for($i=0;$i<=5;$i++)
		echo "<option value='$i'>$i</option>";
		?>
		</select>

<h6>Hot Wings:</h6>
 <select name="wings">
           <option>PLEASE SELECT A PORTION</option>
           <option value="25">HALF - (R25)</option>
           <option value ="40">FULL - (R40)</option>
           </select><br/>
 
</li>


<li><dy>COST OF ORDER</dy></li>
<li>

<?php
         if(isset($_POST["submit"]))
         {
         if( !isset($_SESSION['user']))
           {
           header("Location: index.php");
           }
		else
		{
		if($patty_err==0 && $buns_err==0) 
		$total=(($classicb * $classicqty) + ($sfr * $sfrp) + ($cfr * $cfrp) + ($spfr * $spfrp) + ($drinks * $drinksqty) +$patty+$buns+ $Swiss + 
		$Blue + $Gouda + $Slices + $Feta + $Mozzarella + $Ketchup + $Mayo + $Ranch + $Peri + $Spicy + $Basil + $Cream + $Fruit + 
		$Tabasco + $Sweet + $Onion + $Tomato + $Chillies + $Pepper + $Sweetb + $Hashbrown + $Creamy + $Gerk + $Spicys);
		 
		 echo "<h3>The Total Cost Of Your Order Is: R$total.</h3></br>";
		 echo "<h3>Our Aim Is To Satisty Your Cravings.</h3></br>";
		 echo "<h3>We Sure Hope To Hear From You Soon.</h3>";
		 }
			
		
		}
	

?>

</li>

</ul></div>

</div><div class="column one-second column_column "><div class="column_attr " ><ul class="buildYourOwnContent">
<li><dy>Add Some Cheese??</dy></li>
<li>
<input type="Checkbox" name="Swiss" value="7" />Swiss Cheese___[R7]</br>
<input type="Checkbox" name="Blue" value="8" />Blue Cheese___[R8]</br>
<input type="Checkbox" name="Gouda" value="3" />Grated Gouda___[R3]</br>
<input type="Checkbox" name="Slices" value="7" />American Sliced Gouda___[R7]</br>
<input type="Checkbox" name="Feta" value="8" />Feta___[R8]</br>
<input type="Checkbox" name="Mozarella" value="7" />Mozzarella___[R7]</br>

</li>

<li><dy>Sauces</dy></li>
<li>
<input type="Checkbox" name="Ketchup" value="3" />Original Ketchup___[R3]</br>
<input type="Checkbox" name="Mayo" value="4" />Classic Mayonnaise___[R4]</br>
<input type="Checkbox" name="Ranch" value="5" />Ranch Sauce___[R5]</br>
<input type="Checkbox" name="Peri" value="5" />Peri-Peri___[R5]</br>
<input type="Checkbox" name="Spicy" value="5" />Spicy Mayonnaise___[R5]</br>
<input type="Checkbox" name="Basil" value="6" />Italian Chilli & Basil___[R6]</br>
<input type="Checkbox" name="Cream" value="6" />Cream Cheese sauce___[R6]</br>
<input type="Checkbox" name="Fruit" value="4" />Fruit Chutney___[R4]</br>
<input type="Checkbox" name="Tabasco" value="5" />Hot Tabasco___[R5]</br>
<input type="Checkbox" name="Sweet" value="5" />Sweet & Spicy Honey & Pepper Sauce___[R5]</br>
</li>
<li><dy>Added Flavour</dy></li>
<li>
<input type="Checkbox" name="Onion" value="8" />Grilled Onions___[R8]</br>
<input type="Checkbox" name="Tomato" value="9" />Sliced Tomatoes___[R9]</br>
<input type="Checkbox" name="Chillies" value="7" />Fried Chillies___[R7]</br>
<input type="Checkbox" name="Pepper" value="9" />Grilled Pepper___[R9]</br>
<input type="Checkbox" name="Sweetb" value="7" />Sweet Bacon___[R7]</br>
<input type="Checkbox" name="Hashbrown" value="7" />Hashbrown___[R7]</br>
<input type="Checkbox" name="Creamy" value="2" />Creamy Spinach Paste___[R2]</br>
<input type="Checkbox" name="Gerk" value="5" />Sliced Gerkins___[R5]</br>
<input type="Checkbox" name="Spicys" value="8" />Spicy Steak Slices___[R8]</br>
</li>


<li><dy>DRINKS</dy></li>
<li>
<h6>Please Select A Drink Of Your Choice</h6>
<select name="drinks">
                    <option>SELECT A DRINK</option>
                    <option value="25">MILKSHAKES - (ASSORTED R25)</option>
                    <option value="15">SOFT DRINKS - (ASSORTED R15)</option>
                    <option value="18">FRUIT JUICES - (ASSORTED R18)</option>
                    <option value="17">LEMONADE - (17)</option>
                    <option value="16">COLA TONIC - (R16)</option>
	                </select><br/>

	<h6>Quantity:</h6><select name="drinksqty">
		<?php
		for($i=0;$i<=5;$i++)
		echo "<option value='$i'>$i</option>";
		?>
		</select>	
</li>
		
   <p><rt><input type="reset" value="CANCEL ORDER"/></rt>
   <rt><input type="submit" name="submit" value="SUBMIT ORDER"/></rt>
   <rt><button type="button" onclick="history.back();">BACK</button></rt></p>
</ul></div></div></div></div></div><div class="section the_content no_content"><div class="section_wrapper"><div class="the_content_wrapper"></div></div></div>			</div>
    	
		</div>
		
		<!-- .four-columns - sidebar -->
		
	</div>
    

<!-- mfn_hook_content_after --><!-- mfn_hook_content_after -->
<!-- #Footer -->		
<footer id="Footer" class="clearfix ">	
	
	<div class="widgets_wrapper"><div class="container"><div class="column one"></div></div></div>	
		<div class="footer_copy">
		<div class="container">
			<div class="column one">
				<a id="back_to_top" href="" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
				
				<!-- Copyrights -->
				<div class="copyright">
					© 2017 The Burger Joint. All Rights Reserved. Website by <a href="http://www.cdkcdbncfj" target="_blank"> </a>The Burger Joint Team.				</div>
				
				<ul class="social"></ul>						
			</div>
		</div>
	</div>
		
</footer>

</div><!-- #Wrapper -->


<!-- mfn_hook_bottom --><!-- mfn_hook_bottom -->	
<!-- wp_footer() -->
		<style>
		

		
			.widget_sm_buttons_widget .widget-content {margin: 20px 0;}
			.widget_sm_buttons_widget a {background: ;border-radius: 50px;padding: 10px;}
			.widget_sm_buttons_widget a.facebook {padding: 10px 15px;}
			.widget_sm_buttons_widget a:hover {background: ;-webkit-transition: all 1s;transition: all 1s;}
			.widget_sm_buttons_widget a:hover i {color: ;-webkit-transition: all 1s;transition: all 1s;}
			.widget_sm_buttons_widget i {color: ;font-size: 20px;line-height: 50px;vertical-align: middle;}
		</style>
		<script type='text/javascript' src='http://bnbjoint.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = { "loaderUrl": "http:\/\/bnbjoint.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif", "recaptchaEmpty": "Please verify that you are not a robot.", "sending": "Sending ..." };
    /* ]]> */
</script>
<script type='text/javascript' src='http://bnbjoint.com/wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/jquery/ui/core.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/jquery/ui/widget.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/jquery/ui/mouse.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/jquery/ui/sortable.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/jquery/ui/tabs.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/jquery/ui/accordion.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-content/themes/betheme/js/animations/animations.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-content/themes/betheme/js/jquery.jplayer.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-content/themes/betheme/js/colorpicker/js/colorpicker.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-content/themes/betheme/js/jquery.plugins.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-content/themes/betheme/js/mfn.menu.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-content/themes/betheme/js/scripts.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/comment-reply.min.js'></script>
<script type='text/javascript' src='http://bnbjoint.com/wp-includes/js/wp-embed.min.js'></script>

<script>

    jQuery(document).ready(function () {
        if (jQuery('#Footer').hasClass('without-center-image')) {
            jQuery('#SubheaderWrap').addClass('without-center-imageWrapper');
        } else if (jQuery('#Footer').hasClass('with-center-image')) {
            jQuery('#SubheaderWrap').addClass('with-center-imageWrapper');
        }
    });

</script>
</form>


</body>
</html>
<?php ob_end_flush(); ?>