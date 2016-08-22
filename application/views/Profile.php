<link rel="stylesheet"  href="<?php echo base_url("assets/css/plugin.css") ?>" type="text/css" media="all">
<link rel="stylesheet"  href="<?php echo base_url("assets/css/frontend.css") ?>" type="text/css" media="all">
<link rel="stylesheet"  href="<?php echo base_url("assets/css/bootstrap.css") ?>" type="text/css" media="all">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtwHugfazWe7vgNlU7kpr9pFw4wdy8ajI&callback=initMap">
 </script>

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

    <div>
      
      <?php

        if ( $data['status'] == 'success' ) {

          echo '<h1> Appointent successfully completed. </h1>';

        } else if ( $data['status'] == 'error' ) {

          echo '<h1> Appointment already exist at time you select. </h1>';

        }
        
      ?>

    <p style="font-size: 16px;">Use this resource&nbsp;to search for a certified CPE consultant in your area, verify consultant’s certified credentials, check upon consultant’s professional good standing, and&nbsp;schedule&nbsp;an appointment&nbsp;using&nbsp;our central platform that is linked to consultant’s website in “real time”.</p>
    <p>&nbsp;</p>
    <div id='gmap_canvas' style='height:200px;width:100%;'></div>
<br>

    <div class="w2dc-content">
      <div class="w2dc-content" >
        <div class="w2dc-container-fluid w2dc-listings-block ">
          <div class="w2dc-listings-block-content">
            <article id="post-2573" class="w2dc-row w2dc-listing  ">
              <div class="w2dc-pull-left w2dc-listing-logo-wrap w2dc-anim-style-6">
                <figure class="w2dc-listing-logo w2dc-listings-own-page">
                  <a href="" class="w2dc-listing-logo-img-wrap">
                    <div class="w2dc-listing-logo-img" style="background-image: url('<?php echo  base_url() .'uploads/'. $data['user']->imagePath ?>');">
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

              <form action="<?php echo site_url('Profile/save') ?>" method="POST" >

              <input type="hidden" name="userId" value="<?php echo $data['userId'] ?>" />
              <input type="hidden" name="professionalId" value="<?php echo $_GET['id'] ?>" />

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
                    <span class="w2dc-show-on-map" data-location-id="69"> <span itemprop="streetAddress" id="address"> <?php echo $data['user']->location ?> </span>     
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
                    <div class="ab-mobile-step_2">
                      <div style="width: auto" class="ab-left ab-available-date ab-formGroup ab-lastGroup">
                        <label class="ab-nowrap ab-bold"> &nbsp;&nbsp;I'm available on or after</label>
                        <div class="ab-input-wrap ab-formField">
                          <input type="date" name="date" style=" line-height: 15px; height: 30px; border-radius: 7px; ">                                                        
                        </div>
                      </div>
                      <div class="ab-left ab-available-days">
                        <ul class="ab-week-days">
                          <li>
                            <div class="ab-bold">Mon</div>
                            <label id="mon" class="active">
                            <input type="checkbox" na onclick="selectDay('mon')" name="day[]" checked="checked" value="monday" class="ab-week-day ab-week-day-2">
                            </label>
                          </li>
                          <li>
                            <div class="ab-bold">Tue</div>
                            <label id="tue" class="">
                            <input type="checkbox" onclick="selectDay('tue')" name="day[]" checked="checked" value="tuesday" class="ab-week-day ab-week-day-3">
                            </label>
                          </li>
                          <li>
                            <div class="ab-bold">Wed</div>
                            <label id="wed" class="active">
                            <input type="checkbox" onclick="selectDay('wed')" name="day[]" checked="checked" value="wednesday" class="ab-week-day ab-week-day-4">
                            </label>
                          </li>
                          <li>
                            <div class="ab-bold">Thu</div>
                            <label id="thu" class="active">
                            <input type="checkbox" onclick="selectDay('thu')" name="day[]" checked="checked" value="thursday" class="ab-week-day ab-week-day-5">
                            </label>
                          </li>
                          <li>
                            <div class="ab-bold">Fri</div>
                            <label id="fri" class="active">
                            <input type="checkbox" onclick="selectDay('fri')" name="day[]" checked="checked" value="friday" class="ab-week-day ab-week-day-6">
                            </label>
                          </li>
                        </ul>
                      </div>
                      <div class="ab-left ab-time-range">
                        <div class="ab-left ab-time-from">
                          <label class="ab-bold">Start from</label>
                          <div>
                            <select name="startTime" class="ab-select-time-from">
                              <option selected="selected" value="8">08:00</option>
                              <option value="9">09:00</option>
                              <option value="10">10:00</option>
                              <option value="11">11:00</option>
                              <option value="12">12:00</option>
                              <option value="13">13:00</option>
                              <option value="14">14:00</option>
                              <option value="15">15:00</option>
                              <option value="16">16:00</option>
                              <option value="17">17:00</option>
                              <option value="18">18:00</option>
                            </select>
                          </div>
                        </div>
                        <div class="ab-left ab-time-to">
                          <label class="ab-bold">Finish by</label>
                          <div>
                            <select name="endTime" class="ab-select-time-to">
                              <option value="8">08:00</option>
                              <option value="9">09:00</option>
                              <option value="10">10:00</option>
                              <option value="11">11:00</option>
                              <option value="12">12:00</option>
                              <option value="13">13:00</option>
                              <option value="14">14:00</option>
                              <option value="15">15:00</option>
                              <option value="16">16:00</option>
                              <option value="17">17:00</option>
                              <option selected="selected" value="18">18:00</option>
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
                        <input type="submit" data-spinner-size="40" data-style="zoom-in" class="ab-right ab-next-step ab-btn ladda-button">
                        </input>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </form>
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


<script>

function selectDay(id) {


  $('#' + id).toggleClass("active");

}
</script>

<style>
#gmap_canvas img{
    max-width:none!important;
    background:none!important
    }
</style>
<script type='text/javascript'>

var geocoder;
var map;
var address = document.getElementById('address').innerHTML;

function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-34.397, 150.644);
  var myOptions = {
    zoom: 8,
    center: latlng,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
  if (geocoder) {
    geocoder.geocode({
      'address': address
    }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

          var infowindow = new google.maps.InfoWindow({
            content: '<b>' + address + '</b>',
            size: new google.maps.Size(150, 50)
          });

          var marker = new google.maps.Marker({
            position: results[0].geometry.location,
            map: map,
            title: address
          });
          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
          });

        } else {
          alert("No results found");
        }
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>

