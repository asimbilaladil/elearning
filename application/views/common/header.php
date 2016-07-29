<!DOCTYPE html>
<html lang="en-US" class="wf-opensans-n4-active wf-opensans-i4-active wf-opensans-n6-active wf-active">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academy</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css") ?>" type="text/css" media="all">
    <link rel="stylesheet" id="general-css" href="<?php echo base_url("assets/css/site.css") ?>" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css") ?>" type="text/css" media="all">
    <script id="facebook-jssdk" src="<?php echo base_url("assets/js/all.js") ?>"></script>
    <script id="twitter-wjs" src="<?php echo base_url("assets/js/widgets.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/webfont.js") ?>" type="text/javascript" async=""></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-migrate.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/comment-reply.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.placeholder.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.jplayer.min.js") ?>"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.themexSlider.js") ?>"></script>
    <script type="text/javascript">
      /* <![CDATA[ */
      var options = {"templateDirectory":"http:\/\/themextemplates.com\/demo\/academy\/wp-content\/themes\/academy\/"};
      /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.raty.min.js") ?>"></script>
    <script type="text/javascript">
      /* <![CDATA[ */
      var options = {"templateDirectory":"http:\/\/themextemplates.com\/demo\/academy\/wp-content\/themes\/academy\/"};
      /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/general.js") ?>"></script>
    <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.ico") ?>">
    <script type="text/javascript">
      WebFontConfig = {google: { families: [ "Open Sans:400,400italic,600" ] } };
      (function() {
          var wf = document.createElement("script");
          wf.src = ("https:" == document.location.protocol ? "https" : "http") + "://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
          wf.type = "text/javascript";
          wf.async = "true";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(wf, s);
      })();
    </script>
    <!-- WooCommerce Version -->
    <meta name="generator" content="WooCommerce 2.0.20">
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
          $('.widget_recent_tweets').each(function() {
              var number=$(this).find('input.twitter-number').val();
              var ID=$(this).find('input.twitter-id').val();
              twitterFetcher.fetch(ID, 'widget-tweets', number, true, false, false);
          });
      });
    </script>
    <link rel="stylesheet" href="images/css" media="all">
    <script type="text/javascript" charset="utf-8" async="" src="js/button.552a34de542f2646ca0c08da6760c341.js"></script>
  </head>
  <body class="home page page-id-2 page-template-default logged-in">
    <div class="site-wrap">
    <!-- header -->
    <div class="header-wrap">
      <header class="site-header">
        <div class="row">
          <div class="site-logo left">
            <a href="index.html" rel="home">
            <img src="<?php echo base_url("assets/images/logo.png") ?>" alt="Academy – Learning Management Theme">                       </a>                    
          </div>
          <!-- /logo -->
          <div class="header-options right clearfix">
          <?php if (isset( $_SESSION )) {?>
            <div class="login-options right">
              <div class="button-wrap left">
                <a href="#" class="button dark">
                <span class="button-icon logout"></span>Sign Out</a>                            
              </div>
     
              <!-- /Sign in form -->
              <div class="button-wrap left">
                <a href="#" class="button">
                <span class="button-icon register"></span>My Profile</a>                            
              </div>
              <?php } else { ?>
              <div class="button-wrap left">
                <a href="<?php echo site_url('Register/'); ?>" class="button">
                <span class="button-icon register"></span>Register                              </a>
              </div>
            </div>
            <?php } ?>
            <!-- /login options -->                                     

    
          </div>
          <!-- /header options -->
          <div class="mobile-search-form">
            <form role="search" method="GET" action="#">
              <input type="text" value="" name="s">
            </form>
          </div>
          <!-- /mobile search form -->
          <nav class="header-navigation right">
            <div class="menu">
              <ul id="menu-main-menu" class="menu">
                <li id="menu-item-187" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-187">
                  <a href="<?php echo site_url('Home') ?>">Home</a>
                

                </li>
                <li id="menu-item-238" class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-238"><a href="#">Career Centre</a></li>
                <li id="menu-item-2114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2114"><a href="#">Certified Consultants</a></li>
                <li id="menu-item-189" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-189"><a href="News">Industry Issues</a></li>
                <li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a href="#">About</a></li>
                <li id="menu-item-603" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-603"><a href="#">Support</a></li>
              </ul>
            </div>
            <div class="select-menu">
              <span>Stretched Slider</span>
              <select style="opacity: 0;">
                <option value="#" selected="selected">Home</option>
                <option value="#">Stretched Slider</option>
                <option value="#">Boxed Slider</option>
                <option value="#">Dropdowns</option>
                <option value="#">Sample One</option>
                <option value="#">Sample Two</option>
                <option value="#">Sample Three</option>
                <option value="#">Courses</option>
                <option value="#">Plans</option>
                <option value="#">News</option>
                <option value="#">About</option>
                <option value="#">Support</option>
              </select>
            </div>
            <!--/ select menu-->
          </nav>
          <!-- /navigation -->                        
        </div>
      </header>
    </div>
    <!-- /header -->