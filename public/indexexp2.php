
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
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    
    
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
		<h1><a href="#">Apropos</a></h1>
		<nav>
			<div class="mobile-nav-inner">
				<ul class="clearfix">
					<li id="nav-myc" class="main drop right ml">
	                    <div data-ng-controller="MYCWUser" data-ng-include="'MYCWUser/nav_menu.html'" data-ng-cloak></div>
	                </li>
					<li id="linkz" class="main mobile-only  ml">
						<a href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html">Home</a>
					</li>
					<li id="linkz" id="nav-sto" class="main  ml">
						<a href="file:///home/jharvard/Downloads/dist/OurProject1/register.html">Register</a>
					</li>
					<li id="linkz" id="nav-why" class="main  ml">
						<a href="file:///home/jharvard/Downloads/dist/OurProject1/login.html">Login</a>
					</li>

                    </li>
					<li id="linkz" id="nav-why" class="main  ml">
						<a href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html">Logout</a>
					</li>

					<li id="linkz" id="nav-bir" class="main drop  ml">
						<div class="dropdown">
						<a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">Book recommendations<span class="caret"></span></a>
						<div class="subnav">
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" class="sub" id="mobile-nav">
					            <li class="first nav-home "><a href="#">something</a></li>
					            <li class="nav-stor "><a href="#"> something</a></li>
					            <li class="nav-prof "><a href="#">all profiles</a></li>
					            <li class="nav-star  last"><a href="#">something</a></li>
							</ul>
						</div>
					</li>
					<li id="linkz" id="nav-abo" class="main drop ml last">
						<div class="dropdown">
						<a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">About Us<span class="caret"></span></a>
						<div class="subnav">
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" class="sub">
								<li class="first"><a href="#">our mission</a></li>
								<li><a href="#">something</a></li>
								<li><a href="#">something</a></li>
								<li class="last"><a href="#">something</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<a href="javascript:void(0)" class="cw-icon-reorder" id="mobile-ham" style="display: none;"></a>
	</div>
	
	<script>

$(function() {
        $('header').hide();
        var bar = $('header');
        var top = bar.css('top');
        $(window).scroll(function() {
            if($(this).scrollTop() > 50) {
                bar.stop().animate({'top' : '0px'}, 200);
                $('header').slideDown('slow',function(){

                    $('header').slideUp('slow');});
            } else {
                bar.stop().animate({'top' : '20px'}, 200);
                    $('header').slideDown('slow');
                    $('header').slideUp('slow');
            }
        });
    });
</script>
</header>

        <div class="container" id="title">
            
            <a class="hero-area hero-wrapper cambodia" href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html">
                <h100>Apropos<img src="http://www.graphicsfuel.com/wp-content/uploads/2012/07/pencil-icon-512.png" alt="Klematis" width="110" height="90"></img></h100>
                <p class="button" id="cambodia-homepage-learn-more">Finding your next favorite quote</p>
            </a>
            
            <div id="tfheader">
            
		        <form id="tfnewsearch" method="get" action="gettopic.php">
		            <a id="quote">Your quote:
		            <!--<?= $topic ?>-->
		             </a>
		             <input type="text" class="tftextinput" name="phrase" size="21" maxlength="120"><input type="submit" value="quote" class="tfbutton">
		        </form>
	            <div class="tfclear"></div>
	        </div>
            
            <section class="home-section hp-info-boxes">
            	<div class="inner">
	            	<div id="quote1">
	            	    <h2>"A quotation in a speech, article or book is like a rifle in the hands of an infantryman. It speaks with authority" ~Brendan Francis</h2>
                    </div>
	            	<div class="main-callout-boxes cf">
	            		<div class="cover-image co-box box-1">
	            			<a id="ga--sponsor-water-project" class="sponsor" href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html"><span class="inside-text">Deciding on a quote for a writing assignmnet or project?</span></a>
	            			<p>Odds are, you're at the right place. We have compiled a large collection of quotes from a wide variety of disciplines. The best quote will be here at Apropos.</p>
	            		</div>

                        <div class="cover-image co-box box-2">
                            <a id="ga--top-block-start-campaign" class="learn" href="#"><span class="inside-text">Want to know what your friends rate as their favorite quotes?</span></a>
                            <p>If you want to rate a quote or look at other people's ratings of quotes, click <a href="#">here</a> to find out.</p>
                        </div>
            	</div>
            </section>

            <section class="home-section hp-org-info">
            	<div class="inner">
	            	<h2>Click <a href="#">here</a> to find some of the most well-known quotes by inspirational people.</h2>

	            	<div class="secondary-callout-boxes cf">
	            		<div class="co-box">
	            			<img src="http://womenonlybootcamp.files.wordpress.com/2012/09/mahatma-gandhi-quote-be-the-change-you-want-to-see-in-the-world.jpg" />
	            			<h3>Mohandas Gandhi</h3>
	            			<p>Mohandas Karamchand Gandhi was the preeminent leader and freedom fighter of Indian nationalism in British-ruled India.</p>
	            		</div>

	            		<div class="co-box">
	            			<img src="http://www.asksotiris.com/wp-content/uploads/2012/07/Albert-Einstein-Quotes-2.jpg" />
	            			<h3>Albert Einstein</h3>
	            			<p>Albert Einstein was a German-born theoretical physicist who developed the general theory of relativity, one of the two pillars of modern physics.</p>
	            		</div>

	            		<div class="co-box last">
	            			<img src="http://www.entrepreneur.com/dbimages/slideshow/elanor-roosevelt-1.jpg" />
	            			<h3>Eleanor Roosevelt</h3>
	            			<p>Anna Eleanor Roosevelt was a humanitarian, writer, and the longest-serving First Lady of the United States.</p>
	            		</div>
	            	</div>
            	</div>
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
                <li id="linkz"><a href="#" data-link="Annual Report">Mission</a></li>
                <li id="linkz"><a href="#" data-link="In-Kind Donors" >Our favorite quotes</a></li>
                <li id="linkz"><a href="#" data-link="Press">Book recommendations</a></li>
            </ul>

            <ul class="col col4">
                <li class="title">feedback</li>
                <li id="linkz"><a href="#" data-link="Assets">your opinion</a></li>
                <li id="linkz"><a href="#" data-link="Speaker">rate us</a></li>
                <li id="linkz"><a href="#" data-link="Toolkit"></a></li>
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
                <a href="file:///home/jharvard/Downloads/dist/OurProject1/privacypolicy.html" data-link="Privacy">privacy policy</a>
                <i>&bull;</i>
                &copy;2013            </span>
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


<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>

<span class="heart">&nbsp;&#x2764;&nbsp;</span>



