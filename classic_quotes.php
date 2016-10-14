    <!doctype html>
<!--[if lt IE 8]>    <html lang="en-us" class="ie ie7 no-js"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="ie ie8 no-js"> <![endif]-->
<!--[if IE 9]>    <html lang="en-us" class="ie ie9 no-js"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
   <link href="homepage2.css" rel="stylesheet"/>
   <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >

           <meta name="viewport" content="width=device-width" />
   
  
   
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
   
   
   	<title>Apropos</title>
   	


      
<style>
   [data-ng-cloak] { display: none; }
</style>

<style type="text/css">

</style>

</head>

<body class="responsive">

   <div class="wrapper">
       <header id="navigation">
<div class="inside">
<h1><a href="apropos/indexexp2.php">Apropos</a></h1>
<nav>

<div id='cssmenu' class="mobile-nav-inner">

<ul class="clearfix">
<li id="nav-myc" class="main drop right ml">
                   <div data-ng-controller="MYCWUser" data-ng-include="'MYCWUser/nav_menu.html'" data-ng-cloak></div>
               </li>
<li id="linkz" class="main mobile-only  ml">
<a href="http://apropos/">Home</a>
</li>
<li id="linkz" class="main  ml">
<a  href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Register</a>
<div id="light" class="white_content">This is the lightbox content. 
    <a href = "javascript:void(0)" onclick = "document.getElementById('light').
    style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
    <div id="fade" class="black_overlay"></div>
</li>
<li id="linkz" class="main  ml">
<a  href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Login</a>
<div id="light" class="white_content">This is the lightbox content. 
    <a href = "javascript:void(0)" onclick = "document.getElementById('light').
    style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
    <div id="fade" class="black_overlay"></div>
</li>

                   </li>
<li id="linkz" class="main  ml">
<a href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html">Logout</a>
</li>


<li id="linkz" id="nav-bir" class="main drop  ml">

<a data-target="#" href="#">Book recommendations<span class="caret"></span></a>

<ul class="sub" id="mobile-nav">
           <li id="linkz" class="first nav-home "><a href="#">something</a></li>
           <li id="linkz" class="nav-stor "><a href="#"> something</a></li>
           <li id="linkz" class="nav-prof "><a href="#">all profiles</a></li>
           <li id="linkz" class="nav-star  last"><a href="#">something</a></li>
</ul>

</li>

<li id="linkz" class="main drop  ml">

<a data-target="#" href="#">About Us<span class="caret"></span></a>

<ul class="sub">
<li id="linkz" class="first"><a href="#">our mission</a></li>
<li id="linkz"><a href="#">something</a></li>
<li id="linkz"><a href="#">something</a></li>
<li  id="linkz" class="last"><a href="#">something</a></li>
</ul>

</li>
</ul>
</div>
</nav>
<a href="javascript:void(0)" class="cw-icon-reorder" id="mobile-ham" style="display: none;"></a>
</div>

<script>


</script>
</header>

       <div class="container" id="title">
           
           <a class="hero-area hero-wrapper cambodia" href="http://apropos">
               <h100>Apropos<img src="http://www.graphicsfuel.com/wp-content/uploads/2012/07/pencil-icon-512.png" alt="Klematis" width="110" height="90"></img></h100>
               <p class="button" id="cambodia-homepage-learn-more">Finding your next favorite quote</p>
           </a>
       <?php
    
    require_once("../includes/config.php"); 
    
    $rows = query("SELECT * FROM classic_quotes");
    echo $rows;
    var_dump($rows);

    ?>
           
           <section class="home-section hp-info-boxes">
           <div class="inner">
           	
               	<div id="related_quotes">
               	    <h2>Related Quotes</h2>
               	    <br>
               	    <div id="related_quotes">
#               	    <?php 
#                    $related_quotes = query("SELECT * FROM quotelist WHERE topic=? ORDER BY RAND() LIMIT 3", key($probs)); 
#               	    ?> 
#               	    <?php echo $related_quotes[0]["quote"]; ?>
#               	    <br>
#               	    <br>
#               	    <br>
#               	    <?php
#               	    echo $related_quotes[1]["quote"];
#               	    ?>
#               	    <br>
#               	    <br>
#               	    <br>
#               	    <?php
#               	    echo $related_quotes[2]["quote"];
#               	    ?>
               	    <br>
               	    <br> 
               	    <br>   
               	</div>
            </div>
           	<div class="main-callout-boxes cf">
           	 <div class="cover-image co-box box-1">
           	        <br>
               	    <br> 
               	    <br>
           	    What do you think of this quote?
           	    
           	    
           	</div>
           	
           </section>

           <section class="rating_area">
           </section>

           <section class="home-section hp-fundraise">
           	<div class="inner">
           	 <h2>Apropos will help you find the most fitting and appropriate quote</h2>
           	 <a id="ga--bottom-button-learn" class="btn blue-trans" href="#">Etymology</a>
           	 <a id="ga--bottom-button-start-campaign" class="btn blue" href="#">Something</a>
           	</div>
           </section>

       </div>

       <footer id="footer-main">
           <div class="inside">
           <ul class="col col1">
               <li class="title">get to know us</li>
               <li id="linkz"><a href="http://www.facebook.com/apropos" id="fb" target="_blank" data-link="Facebook"><span class="ss-facebook ss-social"></span>facebook</a></li>
               <li id="linkz"><a href="http://www.twitter.com/apropos" id="tw" target="_blank" data-link="Twitter"><span class="ss-twitter ss-social"></span>twitter</a></li>
           </ul>

           <ul class="col col2">
               <li class="title">favorite quotes</li>
               <li id="linkz"><a href="#" data-link="">quote rank</a></li>
               <li id="linkz"><a href="#" data-link="">rate quotes</a></li>
           </ul>

           <ul class="col col3">
               <li class="title">about Apropos</li>
               <li id="linkz"><a href="#">Mission</a></li>
               <li id="linkz"><a href="#" >Our favorite quotes</a></li>
               <li id="linkz"><a href="#">Book recommendations</a></li>
           </ul>

           <ul class="col col4">
               <li class="title">feedback</li>
               <li id="linkz"><a href="#">your opinion</a></li>
               <li id="linkz"><a href="#">rate us</a></li>
               <li id="linkz"><a href="#"></a></li>
           </ul>

           <ul class="col col5">
               <li class="title">join us</li>
               <li id="linkz"><a href="#" data-link="Fundraise">register</a></li>
               <li id="linkz"><a href="#" data-link="Donate">our emailing list</a></li>
               <li id="linkz"><a href="#" data-link="Volunteer"></a></li>
           </ul>
       <div class="footer-bottom">
           <span class="line no-bull">
               <a href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html">Apropos</a> 
               <i>&bull;</i>
           </span>
           <span class="line">
               <a href="http://privacy_policy/" data-link="Privacy">privacy policy</a>
               <i>&bull;</i>
               &copy;2013            
           </span>
           <span class="line no-bull">
               <i>&bull;</i>
               <a href="file:///home/jharvard/Downloads/dist/OurProject1/aboutus.html" target="" data-link="">about us</a>
           </span>
            <span class="line no-bull">
               <i>&bull;</i>
               <a class="green" href="file:///home/jharvard/Downloads/dist/OurProject1/help.html" data-link="">help</a>
           </span>
       </div>
   </div>
</footer>

   </div>

   <script src="#"></script>

  
   
</body>
</html>

<span class="heart">&nbsp;&#x2764;&nbsp;</span>

