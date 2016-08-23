

    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>


<div class="featured-content">
    <div class="substrate">
        <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">          
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin"> Professional User Signup  </h1>
        </div>
        <!-- /page title -->                
    </div>
</div>
<!-- content -->
<div class="main-content">
    <div class="row">
        <!-- register -->
        <div class="eightcol column">
            <form class="ajax-form formatted-form" action="<?php echo site_url('ProfessionalUser/save') ?>" method="POST" enctype="multipart/form-data">
                <div class="message"></div>

                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Full Name:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper">
                        <input type="text" name="fullName" placeholder="Full Name" required>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Certificate Number:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper">
                        <input type="text" name="certificateNumber" placeholder="Certificate Number" required>
                    </div>
                    <br>
                </div>
                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Email:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper">
                        <input type="email" name="email" placeholder="Email address"   required>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Bussiness Address:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper">
                        <input type="text" name="businessAddress" placeholder="Business Address" required>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Telephone Number:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper">
                        <input type="text" name="telNumber" placeholder="Telephone Number"   required>
                    </div>
                </div>

                <div class="clear"></div>
                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>New Password:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper">
                        <input type="password" name="password" placeholder="password"   required>
                    </div>
                </div>

                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Website:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper">
                        <input type="text" name="website" placeholder="Website"   required>
                    </div>
                </div>

                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Facebook:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper">
                        <input type="text" name="facebook" placeholder="Facebook"   required>
                    </div>
                </div>                

                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Location:</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper" id="locationField">
                      <input id="autocomplete" name=location placeholder="Enter your address"
                             onFocus="geolocate()" type="text"></input>
                    </div>
                </div>


                <div class="sixcol column">
                    <div class="field-wrapper">
                        <h6>Profile Picture</h6>
                    </div>
                </div>
                <div class="sixcol column last">
                    <div class="field-wrapper" id="locationField">

                    <div class="field-wrapper">
                        <input type='file' name="profilePicture" required>
                    </div>

                    </div>
                </div>



                <div class="sixcol column">
                </div>
                <div class="sixcol column last">
                    <button type="submit" class="button submit-button right">Submit</button>
                </div>
                <div class="clear"></div>
                <div class="form-loader"></div>

                <input type="hidden" id="latitude" name = "latitude" />
                <input type="hidden" id="longitude" name = "longitude" />
 

            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- /content -->

 <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        document.getElementById('latitude').value =  place.geometry.location.lat() ;
        document.getElementById('longitude').value =  place.geometry.location.lng() ;

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_NX7qVLNFK1LJ9dXiPWut749GneSlqLY&libraries=places&callback=initAutocomplete"
        async defer></script>