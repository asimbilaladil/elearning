<link rel="stylesheet"  href="<?php echo base_url("assets/css/plugin.css") ?>" type="text/css" media="all">
<link rel="stylesheet"  href="<?php echo base_url("assets/css/frontend.css") ?>" type="text/css" media="all">
<link rel="stylesheet"  href="<?php echo base_url("assets/css/bootstrap.css") ?>" type="text/css" media="all">
<div class="featured-content">
    <div class="substrate">
        <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">          
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin"> Profile  </h1>
        </div>
        <!-- /page title -->                
    </div>
</div>
<div class="main-content">
    <div class="row">
        <p style="font-size: 16px;">Use this resource&nbsp;to search for a certified CPE consultant in your area, verify consultant’s certified credentials, check upon consultant’s professional good standing, and&nbsp;schedule&nbsp;an appointment&nbsp;using&nbsp;our central platform that is linked to consultant’s website in “real time”.</p>
        <p>&nbsp;</p>
        <div class="w2dc-content">
            <div class="w2dc-content" >
                <div class="w2dc-container-fluid w2dc-listings-block ">
                    <div class="w2dc-listings-block-content">
                        <article id="post-2573" class="w2dc-row w2dc-listing  ">
                            <div class="w2dc-pull-left w2dc-listing-logo-wrap w2dc-anim-style-6">
                                <figure class="w2dc-listing-logo w2dc-listings-own-page">
                                    <a href="" class="w2dc-listing-logo-img-wrap">
                                        <div class="w2dc-listing-logo-img" style="background-image: url('<?php echo  base_url() . $data['user']->imagePath ?>');">
                                            <img src="http://www.tdcsinstitute.com/wp-content/uploads/2016/05/alban-man.jpg">
                                        </div>
                                    </a>
                                    <figcaption>
                                        <div class="w2dc-figcaption">
                                            <div class="w2dc-figcaption-middle">
                                                <ul class="w2dc-figcaption-options" style="padding-left: 1em; text-indent: -1em;">
                                                    <li class="w2dc-listing-figcaption-option">
                                                        <a href="">
                                                        <span class="w2dc-glyphicon w2dc-glyphicon-play" title="more info >>"></span>
                                                        </a>
                                                    </li>
                                                    <li class="w2dc-listing-figcaption-option">
                                                        <a href="" data-location-id="69">
                                                        <span class="w2dc-glyphicon w2dc-glyphicon-map-marker" title="view on map"></span>
                                                        </a>
                                                    </li>
                                                    <li class="w2dc-listing-figcaption-option">
                                                        <a href="">
                                                        <span class="w2dc-glyphicon w2dc-glyphicon-comment" title="0 replies"></span>
                                                        </a>
                                                    </li>
                                                    <li class="w2dc-listing-figcaption-option">
                                                        <a href="">
                                                        <span class="w2dc-glyphicon w2dc-glyphicon-user" title="contact us"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="w2dc-clearfix w2dc-listing-text-content-wrap">
                                <header class="w2dc-listing-header">
                                    <h2><a href="" > <?php echo $data['user']->fullName ?> </a> </h2>
                                </header>
                                <div class="w2dc-field w2dc-field-output-block w2dc-field-output-block-address w2dc-field-output-block-2">
                                    <span class="w2dc-field-caption">
                                    <span class="w2dc-field-icon w2dc-fa w2dc-fa-lg w2dc-fa-map-marker"></span>
                                    <span class="w2dc-field-name">Address:</span>
                                    </span>
                                    <span class="w2dc-field-content">
                                        <address class="w2dc-location" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                            <span class="w2dc-show-on-map" data-location-id="69"> <span itemprop="streetAddress"> <?php echo $data['user']->location ?> </span>     
                                        </address>
                                    </span>
                                </div>
                                <div class="w2dc-field w2dc-field-output-block w2dc-field-output-block-string w2dc-field-output-block-6">
                                    <span class="w2dc-field-caption">
                                    <span class="w2dc-field-icon w2dc-fa w2dc-fa-lg w2dc-fa-phone"></span>
                                    <span class="w2dc-field-name">Phone:</span>
                                    </span>
                                    <span class="w2dc-field-content">  <?php echo $data['user']->telephoneNumber ?> </span>
                                </div>
                                <div class="w2dc-field w2dc-field-output-block w2dc-field-output-block-string w2dc-field-output-block-6">
                 <div class="ab-service-step">
                                        <form>
                                            <div class="ab-mobile-step_2">

                                                    <div style="width: auto" class="ab-left ab-available-date ab-formGroup ab-lastGroup">
                                                        <label class="ab-nowrap ab-bold"> &nbsp;&nbsp;I'm available on or after</label>
                                                        <div class="ab-input-wrap ab-formField">
                                                            <input type="date" name="" style=" line-height: 15px; height: 30px; border-radius: 7px; ">                                                        
                                                        </div>
                                                    </div>
                                                    <div class="ab-left ab-available-days">
                                                        <ul class="ab-week-days">
                                                            <li>
                                                                <div class="ab-bold">Mon</div>
                                                                <label class="active">
                                                                <input type="checkbox" checked="checked" value="2" class="ab-week-day ab-week-day-2">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <div class="ab-bold">Tue</div>
                                                                <label class="">
                                                                <input type="checkbox" checked="checked" value="3" class="ab-week-day ab-week-day-3">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <div class="ab-bold">Wed</div>
                                                                <label class="active">
                                                                <input type="checkbox" checked="checked" value="4" class="ab-week-day ab-week-day-4">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <div class="ab-bold">Thu</div>
                                                                <label class="active">
                                                                <input type="checkbox" checked="checked" value="5" class="ab-week-day ab-week-day-5">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <div class="ab-bold">Fri</div>
                                                                <label class="active">
                                                                <input type="checkbox" checked="checked" value="6" class="ab-week-day ab-week-day-6">
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ab-left ab-time-range">
                                                        <div class="ab-left ab-time-from">
                                                            <label class="ab-bold">Start from</label>
                                                            <div>
                                                                <select class="ab-select-time-from">
                                                                    <option selected="selected" value="08:00">08:00</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option value="18:00">18:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="ab-left ab-time-to">
                                                            <label class="ab-bold">Finish by</label>
                                                            <div>
                                                                <select class="ab-select-time-to">
                                                                    <option value="08:00">08:00</option>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                    <option selected="selected" value="18:00">18:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div style="text-align:right; padding-top: 5px; display: none" class="ab-select-time-error ab-label-error ab-clear">The start time must be less than the end time</div>
                                                    </div>

                                                    <div>
                                                    <br>
                                                    <button data-spinner-size="40" data-style="zoom-in" class="ab-left ab-mobile-prev-step ab-btn ab-none ladda-button">
                                                    <span class="ladda-label">Back</span>
                                                    </button>
                                                    <button data-spinner-size="40" data-style="zoom-in" class="ab-right ab-next-step ab-btn ladda-button">
                                                    <span class="ladda-label">Next</span>
                                                    </button>
                                                    </div>

                                            </div>
                                        </form>
    </div>
                                </div>                                
                   
                            </div>

                            </article>

                            <div class="w2dc-single-listing-text-content-wrap">
                                <div class="w2dc-fields-group">
                                    <div class="w2dc-fields-group-caption">Contact Information</div>
                                    <div class="w2dc-field w2dc-field-output-block w2dc-field-output-block-string w2dc-field-output-block-6">
                                        <span class="w2dc-field-caption">
                                        <span class="w2dc-field-icon w2dc-fa w2dc-fa-lg w2dc-fa-phone"></span>
                                        <span class="w2dc-field-name">Phone:</span>
                                        </span>
                                        <span class="w2dc-field-content"> <?php echo $data['user']->telephoneNumber ?> </span>
                                    </div>
                                    <div class="w2dc-field w2dc-field-output-block w2dc-field-output-block-website w2dc-field-output-block-7">
                                        <span class="w2dc-field-caption">
                                        <span class="w2dc-field-icon w2dc-fa w2dc-fa-lg w2dc-fa-globe"></span>
                                        <span class="w2dc-field-name">Website:</span>
                                        </span>
                                        <span class="w2dc-field-content">
                                        <a itemprop="url" href="<?php echo $data['user']->websiteUrl ?>" target="_blank" rel="nofollow">view our site</a>
                                        </span>
                                    </div>
                                    <div class="w2dc-field w2dc-field-output-block w2dc-field-output-block-email w2dc-field-output-block-8">
                                        <meta itemprop="email" content="m.b.wells@tdcsinstitute.com">
                                        <span class="w2dc-field-caption">
                                        <span class="w2dc-field-icon w2dc-fa w2dc-fa-lg w2dc-fa-envelope-o"></span>
                                        <span class="w2dc-field-name">Email:</span>
                                        </span>
                                        <span class="w2dc-field-content">
                                        <a href=""><?php echo $data['user']->email ?></a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
