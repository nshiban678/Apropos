<!doctype html>
<!--[if lt IE 8]>    <html lang="en-us" class="ie ie7 no-js"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="ie ie8 no-js"> <![endif]-->
<!--[if IE 9]>    <html lang="en-us" class="ie ie9 no-js"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
   <link href="homepage2.css" rel="stylesheet"/>
   <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
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

    <script>
  $(function() {
    var name = $( "#name" ),
      email = $( "#email" ),
      password = $( "#password" ),
      allFields = $( [] ).add( name ).add( email ).add( password ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 600,
      width: 450,
      modal: true,
      buttons: {
        "Back": function() {
          var bValid = true;
          allFields.removeClass( "ui-state-error" );
 
          // bValid = bValid && checkLength( name, "username", 3, 20 );
          // bValid = bValid && checkLength( email, "email", 6, 80 );
          // bValid = bValid && checkLength( password, "password", 5, 16 );
 
          // bValid = bValid && checkRegexp( name, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
          // From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
          // bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
          // bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
 
          if ( bValid ) {
            $( "#users tbody" ).append( "<tr>" +
              "<td>" + name.val() + "</td>" +
              "<td>" + email.val() + "</td>" +
              "<td>" + password.val() + "</td>" +
            "</tr>" );
            $( this ).dialog( "close" );
          }
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
      }
    });
 
    $( "#create-user" )
      .button()
      .click(function() {
        $( "#dialog-form" ).dialog( "open" );
      });
  });
  </script>


 <script>
  $(function() {
    var name = $( "#name" ),
      password = $( "#password" ),
      allFields = $( [] ).add( name ).add( password ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    $( "#dialogz-form" ).dialog({
      autoOpen: false,
      height: 400,
      width: 450,
      modal: true,
      buttons: {
        "Back": function() {
          var bValid = true;
          allFields.removeClass( "ui-state-error" );
 
          /*bValid = bValid && checkLength( name, "username", 3, 16 );
          bValid = bValid && checkLength( password, "password", 5, 16 );
 
          bValid = bValid && checkRegexp( name, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
          // From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
          bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );*/
 
          if ( bValid ) {
            $( "#users tbody" ).append( "<tr>" +
              "<td>" + name.val() + "</td>" +
              "<td>" + password.val() + "</td>" +
            "</tr>" );
            $( this ).dialog( "close" );
          }
        },
        Cancel: function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
      }
    });
 
    $( "#login-user" )
      .button()
      .click(function() {
        $( "#dialogz-form" ).dialog( "open" );
      });
  });
  </script>

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
<a href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html">Home</a>
</li>

                   
                   
<li id="linkz" class="main  ml">
<a href="http://apropos.com">Logout</a>
</li>


<li id="linkz" id="nav-bir" class="main drop  ml">

<a data-target="#" href="#">Book recommendations<span class="caret"></span></a>

<ul class="sub" id="mobile-nav">
           <li id="linkz" class="first nav-home "><a href="http://www.barnesandnoble.com/u/Books-We-Recommend/379003220/">Barnes and Boble</a></li>
           <li id="linkz" class="nav-stor "><a href="http://whatshouldireadnext.com/">whatshouldireadnext.com</a></li>

</ul>


</li>

<li id="linkz" class="main drop  ml">

<a data-target="#" href="#">About Us<span class="caret"></span></a>

<ul class="sub">
<li id="linkz" class="first"><a href="http://www.lowdensitylifestyle.com/media/uploads/2009/07/happy-dog.jpg">our mission</a></li>
<li  id="linkz" class="last"><a href="http://www.fethullah-gulen.org/wp-content/uploads/2013/11/happiness.jpg">something</a></li>
</ul>

</li>

<li id="linkz" class="main  ml">
   
    <a id="login-user">Login</a>
        <div id="dialogz-form" title="Login Form">
          <p class="validateTips">All form fields are required.</p>
         
          <form method="post" action="login.php">
          <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
            <button type="submit" class="btn">Log In</button>
          </fieldset>
          </form>
        </div>
     
        
</li>

    <li id="linkz" class="main  ml">
        
        <a id="create-user">Register</a>
        <div id="dialog-form" title="Create new user">
          <p class="validateTips">All form fields are required.</p>
         
          <form method="post" action="register.php">
          <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
            <label for="quote">Quote</label>
            <input type="text" name="quote" id="quote" value="" class="text ui-widget-content ui-corner-all">
            
            <button type="submit" class="btn">Register</button>
            
          </fieldset>
          </form>
        </div>
           
        
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
           
           <a class="hero-area hero-wrapper cambodia" href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html">
               <h100>Apropos<img src="http://www.graphicsfuel.com/wp-content/uploads/2012/07/pencil-icon-512.png" alt="Klematis" width="110" height="90"></img></h100>
               <p class="button" id="cambodia-homepage-learn-more">Finding your next favorite quote</p>
           </a>
       <div id="tfheader">    
        
        <a id="quote"><p id="quotestyle"></p>
           <form id="tfnewsearch" method="post" action="guess_topic.php">
                <input type="text" size="40" maxlength="200" name="phrase" name="user" class="tftextinput">
                <input type="submit" value="Get quote" class="tfbutton">
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
           	 <a id="ga--sponsor-water-project" class="sponsor" href="file:///home/jharvard/Downloads/dist/OurProject1/indexexp2.html"><span class="inside-text">Deciding on a quote for a writing assignment or project?</span></a>
           	 <p>Odds are, you're at the right place. We have compiled a large collection of quotes from a wide variety of disciplines. The best quote will be here at Apropos.</p>
           	 </div>

                       <div class="cover-image co-box box-2">
                           <a id="ga--top-block-start-campaign" class="learn" href="#"><span class="inside-text">Want to know what your friends rate as their favorite quotes?</span></a>
                           <p>If you want to rate a quote or look at other people's ratings of quotes, click <a href="#">here</a> to find out.</p>
                       </div>
           	</div>
           </section>

           <section class="home-section hp-org-info">
           <div id="qotd"></div>
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
           	 <a id="ga--bottom-button-learn" class="btn blue-trans" href="http://lexicide.com/apropos/">Etymology</a>
           	 <a id="ga--bottom-button-start-campaign" class="btn blue" href="http://www.lowdensitylifestyle.com/media/uploads/2009/07/happy-dog.jpg">Purpose</a>
           	</div>
           </section>

       </div>

       <footer id="footer-main">
           <div class="inside">
           <ul class="col col1">
               <li class="title">get to know us</li>
               <li id="linkz"><a href="https://www.facebook.com/pages/Apropos/628285423894296?skip_nax_wizard=true" id="fb" target="_blank" data-link="Facebook"><span class="ss-facebook ss-social"></span>facebook</a></li>
              
           </ul>

           <ul class="col col2">
               <li class="title">favorite quotes</li>
               <li id="linkz"><a href="#" data-link="http://apropos.com/guess_topic.php">rate quotes</a></li>
           </ul>
           
           <ul class="col col3">
               <li class="title">about Apropos</li>
               <li id="linkz"><a href="http://www.lowdensitylifestyle.com/media/uploads/2009/07/happy-dog.jpg">Mission</a></li>
               <li id="linkz"><a href="http://www.barnesandnoble.com/u/Books-We-Recommend/379003220/">Book recommendations</a></li>
           </ul>

           <ul class="col col4">
               <li class="title">feedback</li>
               <li id="linkz"><a href="https://www.facebook.com/pages/Apropos/628285423894296?skip_nax_wizard=true">like us</a></li>
               <li id="linkz"><a href="#"></a></li>
           </ul>

           <ul class="col col5">
               <li class="title">join us</li>
               <li id="linkz"><a href="#" >register</a></li>
           </ul>
       <div class="footer-bottom">
           <span class="line no-bull">
               <a href="http://apropos.com">Apropos</a> 
               <i>&bull;</i>
           </span>
           <span class="line">
               <a href="http://apropos/privacy_policy.php" data-link="Privacy">privacy policy</a>
               <i>&bull;</i>
               &copy;2013            
           </span>
           <span class="line no-bull">
               <i>&bull;</i>
               <a href="" target="" data-link="https://www.facebook.com/pages/Apropos/628285423894296?skip_nax_wizard=true">about us</a>
           </span>
            <span class="line no-bull">
               <i>&bull;</i>
               <a class="green" href="http://artsites.ucsc.edu/GDead/agdl/help.html" data-link="">help</a>
           </span>
       </div>
   </div>
</footer>

   </div>

   <script src="#"></script>

  
   
</body>
</html>

<span class="heart">&nbsp;&#x2764;&nbsp;</span>

