<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BC Stories</title>
    <link rel="stylesheet" href="css/bcstories.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
        <script src="http://www.brooklyn.cuny.edu/web/js/vendor/jquery.js"></script> <!-- jQuery -->
    <script src="http://www.brooklyn.cuny.edu/web/js/foundation/foundation.js"></script> <!-- Foundation -->
    <script src="http://www.brooklyn.cuny.edu/web/js/response-bcstories.js"></script> <!--// responsive content images//-->

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- GA -->
    <!-- FB -->
  </head>
  <body data-responsejs='{"create" : {"mode" : "src", "prefix" : "src"}}'>
  <div id="skipnav"><a href="#mainContent" ga-category="SkipNav" ga-action="Navigate" ga-label="SkipNav" tabindex="0">Skip to Main Content</a></div>

  <header>
    <section class="full-width">
      <nav class="desktop" aria-label="Main Navigation">
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">College Website</a></li>
        </ul>
      </nav>
      <section class="mobile-toggle">
      <script type="text/javascript">
        $(document).ready(function() {
          //turn on mobile menu
          $(".lines").click(function(e){
            $(".ex").removeClass("hidden");
            $(this).addClass("hidden");
            $(".mobile-white").removeClass("hidden");
          });
          //turn off mobile menu
          $(".ex").click(function(e){
            $(".lines").removeClass("hidden");
            $(this).addClass("hidden");
            $(".mobile-white").addClass("hidden");
          });
        });
      </script>
      <div class="lines" role="button" aria-pressed="false" tabindex="0"></div>
      <div class="ex hidden" role="button" aria-pressed="true" tabindex="0"></div>
      </section>
    </section>
    <section class="mobile-white hidden">
      <div class="logo"><a href="#"></a></div>
      <nav class="mobile" aria-label="Main Navigation">
          <ul>
            <li><a href="#">Story Archive</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">College Website</a></li>
          </ul>
        </nav>
    </section>

    <!--<section class="">
      
    </section>-->
    <section class="brand">
    <div class="logo"><a href="#"></a></div>
      <!--<img src="http://www.brooklyn.cuny.edu/web/adm_2013marketing/trans.gif" 
      alt="Brooklyn College Stories" title="Brooklyn College Stories"
      data-src0="images/logo_162x47.png"
      data-src834="images/logo_162x47.png"
      data-src928="images/logo_228x66.png"/>-->
    </section>
  </header>

  <article>
    <h1 id="mainContent" role="main" tabindex="0">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Non, dolorum!</h1>
    <div class="featureImage"><img src="http://www.brooklyn.cuny.edu/web/adm_2013marketing/trans.gif" 
      alt="Content Image" title="Content Image"
      data-src0="images/content_500x282.png"
      data-src500="images/content_888x500.png"
      data-src928="images/content_888x500.png"/>
    </div>
    <section class="share">
      <div class="icon email"><a href="#"></a></div><div class="icon twitter"><a href="#"></a></div><div class="icon facebook"><a href="#"></a></div>
    </section>
    <section class="byline">
      <p>By <span class="name">Robert Jones</span> &#8226; April 9, 2018 &#8226; In <a href="#">Alumni News</a></p>
    </section>
    <section class="subheader">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
    </section>
    <section class="update">
      <span class="timestamp"><span class="bolded"><span class="upper">Updated</span>: April 12 1 p.m.</span> - </span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="updateImage"><img src="http://www.brooklyn.cuny.edu/web/adm_2013marketing/trans.gif" 
        alt="Content Image" title="Content Image"
        data-src0="images/content_500x282.png"
        data-src500="images/content_888x500.png"
        data-src928="images/content_888x500.png"/>
      </div>
    </section>
    <section class="update">
      <span class="timestamp"><span class="bolded"><span class="upper">Updated</span>: April 11 1 p.m.</span> - </span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
    <section class="floatImage">
      <img src="http://www.brooklyn.cuny.edu/web/adm_2013marketing/trans.gif" 
          alt="Content Image" title="Content Image"
          data-src0="images/content_500x282.png"
          data-src500="images/content_500x282.png"
          data-src928="images/content_500x282.png"/>
      <p class="caption"> Labore et dolore magna aliqua. Ut enim ad minim veniam, and so on and so on. Labore et dolore magna aliqua. Ut enim ad minim veniam, and so on and so on.</p>
      <p class="photoCredit">Photo Credit: Albert Einstein</p>
    </section>
    <section class="copy">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h2>Lorem ipsum dolor sit amet</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
    <!--<section class="video">
        <iframe src="https://www.youtube.com/embed/q-wq-yqdytg?rel=0&amp;start=0" frameborder="0" allowfullscreen></iframe>
    </section>-->
    <section class="articleImage">
      <img src="http://www.brooklyn.cuny.edu/web/adm_2013marketing/trans.gif" 
        alt="Content Image" title="Content Image"
        data-src0="images/content_500x282.png"
        data-src500="images/content_888x500.png"
        data-src928="images/content_888x500.png"/>
      <p class="caption"></p>
    </section>
    <section class="copy">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
    <section class="quote">
      <div class="doubleQuotes"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </section>
    <section class="copy">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
  </article>

  <section class="closing">
    <section class="line">
      <section class="share">
          <div class="icon email"><a href="#"></a></div><div class="icon twitter"><a href="#"></a></div><div class="icon facebook"><a href="#"></a></div>
      </section>
      <section class="tags">
        <a href="#">Climate Change</a><a href="#">Diversity</a><a href="#">Sociology</a>
      </section>
    </section>
  </section>

  <!--<section class="articleList">
    <section class="articleItem">
      <h1>Title</h1>
      <img>
      <p>copy</p>
    </section>
    <section class="articleItem">
      <h1>Title</h1>
      <img>
      <p>copy</p>
    </section>
    <section class="articleItem">
      <h1>Title</h1>
      <img>
      <p>copy</p>
    </section>
  </section>-->

  <footer>
    <section class="navigation full-width">
    <nav>
      <ul>
        <li><a href="#">College Website</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Policies</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    </section>
    <section class="bottom full-width">
      <section class="elements">
        <section class="social">
          <div class="icon instagram"><a href="#"></a></div><div class="icon twitter"><a href="#"></a></div><div class="icon facebook"><a href="#"></a></div>
        </section>
        <section class="copyright">
          <div class="cuny"><a href="#"></a></div>
          <div class="copy"><p>&copy; <?php print(date("Y")); ?> All Rights Reserved Brooklyn College</p></div>
        </section>
      </section>
    </section>
  </footer>


    <!--<script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>-->
    <!--<script src="js/app.js"></script>-->

    <script>
      $(document).foundation();
    </script>

  </body>
</html>