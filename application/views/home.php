    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.hoverIntent.min.js") ?>"></script> 
<!-- banner -->
<div class="featured-content">
    <div class="substrate">
        <img src="http://cdn1.tnwcdn.com/wp-content/blogs.dir/1/files/2012/10/Graduation.jpg" class="fullwidth" alt="">         
    </div>
    <div class="parallax-slider themex-slider">

        <ul class="visible" style="width: 6295px; left: -1259px; height: 485px;">
            <li style="width: 1259px;">
                <div class="row">
                    <div class="fivecol column" style="top: 150.5px;"  style="font-size: large;">
  <?php echo $data['slide1'][0]->content; ?>
                        <a href="<?php echo site_url('WhatWeOffer') ?>" target="_self" class=" button large primary"><img class="alignnone" alt="" src="<?php echo base_url("assets/images/image_4.png") ?>">Get Started</a>
                    </div>
                    <div class="sevencol column last" style="top: 0px;"><img src="<?php echo base_url("assets/images/slide1.png") ?>" class="alignnone" alt=""></div>
                    <div class="clear" style="top: 242.5px;"></div>
                </div>
            </li>
            <li class="current" style="width: 1259px;">
                <div class="row">
                    <div class="fivecol column" style="top: 140.5px;" style="font-size: large;">
<?php echo $data['slide2'][0]->content; ?>
                      <a href="#" target="_self" class=" button large primary"><img class="alignnone" alt="" src="<?php echo base_url("assets/images/image_4.png") ?>">Get Started</a>
                    </div>
                    <div class="sevencol column last" style="top: 0px;"><img class="alignnone" alt="" src="<?php echo base_url("assets/images/slide_2.2.png") ?>"></div>
                    <div class="clear" style="top: 242.5px;"></div>
                </div>
            </li>
            <li class="" style="width: 1259px;">
                <div class="row">
                    <div class="fivecol column" style="top: 150.5px;"  style="font-size: large;">
<?php echo $data['slide3'][0]->content; ?>
                      <a href="<?php echo site_url('SearchProfessionalUser'); ?>" target="_self" class=" button large primary"><img class="alignnone" alt="" src="<?php echo base_url("assets/images/image_4.png") ?>">Get Started</a>
                    </div>
                    <div class="sevencol column last" style="top: 0px;"><img src="<?php echo base_url("assets/images/slide_3.2.png") ?>" class="alignnone" alt=""></div>
                    <div class="clear" style="top: 242.5px;"></div>
                </div>
            </li>
         
           
        </ul>
        <div class="arrow arrow-left"></div>
        <div class="arrow arrow-right"></div>
        <input type="hidden" class="slider-pause" value="6287">
        <input type="hidden" class="slider-speed" value="1000">
        <input type="hidden" class="slider-effect" value="slide">   
    </div>
</div>
<!-- /banner -->
<div class="main-content">
            <div class="row"><div class="fourcol column">
<h3><img class="alignnone" src="http://www.tdcsinstitute.com/uploads/2013/02/image_1.jpg" alt="">Learn CPE Protocols</h3>
              <p> <?php echo $data['box1'][0]->content; ?></p>
              </div><div class="fourcol column">
<h3><img class="alignnone" src="http://www.tdcsinstitute.com/uploads/2013/02/image_2.jpg" alt="">Count On Our Support</h3>
<p><?php echo $data['box2'][0]->content; ?></p></div><div class="fourcol column last">
<h3><img class="alignnone" src="http://www.tdcsinstitute.com/uploads/2013/02/image_3.jpg" alt="">Become CPE Consultant</h3>
<p><?php echo $data['box3'][0]->content; ?></p></div><div class="clear"></div>
<p>&nbsp;</p>


  <?php echo $data['home'][0]->content; ?>

                                </div>
            </div>
