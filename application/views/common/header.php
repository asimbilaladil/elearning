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
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.hoverIntent.min.js") ?>"></script> 
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.placeholder.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.jplayer.min.js") ?>"></script> 
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
            <div class="login-options right">
              <div class="button-wrap left">
                <a href="#" class="button dark">
                <span class="button-icon logout"></span>Sign Out</a>                            
              </div>
              <!-- Sign in form -->       
              <div class="button-wrap left tooltip login-button">
                <a href="#" class="button dark"><span class="button-icon login"></span>Sign In</a>
                <div class="tooltip-wrap" style="display: none;">
                  <div class="tooltip-text">
                    <form action="http://themextemplates.com/demo/academy/wp-admin/admin-ajax.php" class="ajax-form popup-form" method="POST">
                      <div class="message"></div>
                      <div class="field-wrap">
                        <input type="text" name="user_login" value="Demo">
                      </div>
                      <div class="field-wrap">
                        <input type="password" name="user_password" value="Demo">
                      </div>
                      <div class="button-wrap left nomargin">
                        <a href="#" class="button submit-button">Sign In</a>
                      </div>
                      <div class="button-wrap switch-button left">
                        <a href="#" class="button dark" title="Password Recovery">
                        <span class="button-icon help"></span>
                        </a>
                      </div>
                      <input type="hidden" name="user_action" value="login_user">
                      <input type="hidden" name="user_redirect" value="">
                      <input type="hidden" name="nonce" class="nonce" value="b1f7c541dc">
                      <input type="hidden" name="action" class="action" value="themex_update_user">
                    </form>
                  </div>
                </div>
                <div class="tooltip-wrap password-form" style="display: none;">
                  <div class="tooltip-text">
                    <form action="http://themextemplates.com/demo/academy/wp-admin/admin-ajax.php" class="ajax-form popup-form" method="POST">
                      <div class="message"></div>
                      <div class="field-wrap">
                        <input type="text" name="user_email" value="Email">
                      </div>
                      <div class="button-wrap left nomargin">
                        <a href="#" class="button submit-button">Reset Password</a>
                      </div>
                      <input type="hidden" name="user_action" value="reset_password">
                      <input type="hidden" name="nonce" class="nonce" value="b1f7c541dc">
                      <input type="hidden" name="action" class="action" value="themex_update_user">
                    </form>
                  </div>
                </div>
              </div>
              <!-- /Sign in form -->
              <div class="button-wrap left">
                <a href="#" class="button">
                <span class="button-icon register"></span>My Profile</a>                            
              </div>
              <div class="button-wrap left">
                <a href="<?php echo site_url('Register/'); ?>" class="button">
                <span class="button-icon register"></span>Register                              </a>
              </div>
            </div>
            <!-- /login options -->                                     
            <div class="search-form right">
              <form role="search" method="GET" action="#">
                <input type="text" value="" name="s">
              </form>
            </div>
            <!-- /search form -->
            <div class="button-wrap share-button tooltip right">
              <a href="#" class="button dark"><span class="button-icon plus nomargin"></span></a>
              <div class="tooltip-wrap">
                <div class="corner"></div>
                <div class="tooltip-text">
                  <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px;" title="Twitter Tweet Button" src="images/tweet_button.b41e99df00581dc95d7fdd63f3283511.en.html"></iframe>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                  <div id="fb-root" class=" fb_reset">
                    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                      <div></div>
                    </div>
                    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                      <div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="images2/xd_arbiter.html" style="border: none;"></iframe>
                        <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="images/xd_arbiter(1).html" style="border: none;"></iframe>
                      </div>
                    </div>
                  </div>
                  <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=257149217676807";
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                  </script>
                  <div class="fb-like fb_iframe_widget" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=257149217676807&amp;container_width=36&amp;href=http%3A%2F%2Fthemextemplates.com%2Fdemo%2Facademy%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=60"><span style="vertical-align: bottom; width: 81px; height: 20px;"><iframe name="f3b9124a99b8714" width="60px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="images/like.html" style="border: none; visibility: visible; width: 81px; height: 20px;" class=""></iframe></span></div>
                </div>
              </div>
            </div>
            <!-- /share button -->
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
                  <a href="index.html">Home</a>
                  <ul class="sub-menu">
                    <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-773"><a href="#">Stretched Slider</a></li>
                    <li id="menu-item-772" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-772"><a href="#">Boxed Slider</a></li>
                    <li id="menu-item-774" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-774">
                      <a href="#">Dropdowns</a>
                      <ul class="sub-menu">
                        <li id="menu-item-775" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-775"><a href="#">Sample One</a></li>
                        <li id="menu-item-776" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-776"><a href="#">Sample Two</a></li>
                        <li id="menu-item-777" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-777"><a href="#">Sample Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="menu-item-238" class="menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-238"><a href="#">Courses</a></li>
                <li id="menu-item-2114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2114"><a href="#">Plans</a></li>
                <li id="menu-item-189" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-189"><a href="blog.html">News</a></li>
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