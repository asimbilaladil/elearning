<body class="home page page-id-2 page-template-default logged-in">
  <div class="site-wrap">
    <!-- content -->
    <div class="main-content">
      <div class="row">
        <style type="text/css">
          /* Service */
          .ab-label-error, li.ab-step-tabs.active a {color: #f4662f!important;}
          .ab-back-step, .ab-next-step, .ab-mobile-next-step, .ab-mobile-prev-step, li.ab-step-tabs.active div,.ab-booking-form .picker__frame, .ab-service-step .ab-week-days li label {background: #f4662f!important;}
          .ab-booking-form .picker__header {border-bottom: 1px solid #f4662f!important;}
          .ab-booking-form .picker__nav--next:before {border-left:  6px solid #f4662f!important;}
          .ab-booking-form .picker__nav--prev:before {border-right: 6px solid #f4662f!important;}
          .ab-booking-form .picker__nav--next, .ab-booking-form .pickadate__nav--prev, .ab-booking-form .picker__day:hover, .ab-booking-form .picker__day--selected:hover, .ab-booking-form .picker--opened .picker__day--selected, .ab-booking-form .picker__button--clear, .ab-booking-form .picker__button--today {color: #f4662f!important;}
          .ab-service-step .ab-week-days li label.active {background: #f4662f url(http://www.tdcsinstitute.com/wp-content/plugins/appointment-booking/frontend/resources/images/checkbox.png) 0 0 no-repeat!important;}
          /* Time */
          .ab-columnizer .ab-available-day { background: #f4662f!important; border: 1px solid #f4662f!important; }
          .ab-columnizer .ab-available-hour:hover { border: 2px solid #f4662f!important; color: #f4662f!important; }
          .ab-columnizer .ab-available-hour:hover .ab-hour-icon { background: none; border: 2px solid #f4662f!important; color: #f4662f!important; }
          .ab-columnizer .ab-available-hour:hover .ab-hour-icon span, .ab-time-next, .ab-time-prev, .bookly-btn-submit,
          /* Cart */
          .ab-add-item, .ab-goto-cart,
          /* Payment */
          .btn-apply-coupon {background: #f4662f!important;}
          .ab-cart .ab--actions { background-color: #f4662f!important;}
          label.ab-formLabel, div.ab-error {color: #f4662f!important;}
          input.ab-field-error, textarea.ab-field-error, div.ab-error select {border: 2px solid #f4662f!important;}
        </style>
        <div data-form_id="578fe2db0385b" class="ab-booking-form" id="ab-booking-form-578fe2db0385b">
          <!--  step 3 -->
          <br /><br /><br />
          <h1>Search</h1>
          <div class="ab-row-fluid">
            <div class="ab-desc">You selected a booking for <b>Test</b> by <b>Consultancy</b> at <b>09:00</b> on <b>08/08/2016</b>. The price for the service is <b>$0.00</b>.<br>
              Please provide your details in the form below to proceed with booking.
            </div>
          </div>
          <form data-cart-item="0" class="ab-details-step">
            <div class="ab-row-fluid ab-col-phone">
              <div class="ab-formGroup ab-left">
                <label class="ab-formLabel">Name</label>
                <div class="ab-formField">
                  <input type="text" id="name" maxlength="60" value="" class="ab-formElement ab-full-name">
                </div>
                <div class="ab-full-name-error ab-label-error ab-bold"></div>
              </div>

              <div class="ab-formGroup ab-left">
                <label class="ab-formLabel">Phone</label>
                <div class="ab-formField" >
                  <input type="text" id="phone" maxlength="60" value="" class="ab-formElement ab-full-name">
                </div>
                <div class="ab-full-name-error ab-label-error ab-bold"></div>
              </div>

              <div class="ab-formGroup ab-left">
                <label class="ab-formLabel">Email</label>
                <div class="ab-formField" >
                  <input type="text" id="email" maxlength="60" value="" class="ab-formElement ab-full-name">
                </div>
                <div class="ab-full-name-error ab-label-error ab-bold"></div>
              </div>

              <div class="ab-formGroup ab-left">
                <label class="ab-formLabel">country</label>
                <div class="ab-formField" >
                  <input type="text" id="country" maxlength="60" value="" class="ab-formElement ab-full-name">
                </div>
                <div class="ab-full-name-error ab-label-error ab-bold"></div>
              </div>


              <div class="ab-formGroup ab-left">
                <label class="ab-formLabel">City</label>
                <div class="ab-formField" >
                  <input type="text" id="city" maxlength="60" value="" class="ab-formElement ab-full-name">
                </div>
                <div class="ab-full-name-error ab-label-error ab-bold"></div>
              </div>                            


                <div class="ab-user-phone-error ab-label-error ab-bold"></div>
              </div>
            </div>
            <div class="ab-row-fluid ab-clear">
            </div>
          </form>
          <div class="ab-row-fluid ab-nav-steps ab-clear">
            <button onclick="search()" data-spinner-size="40" data-style="zoom-in" class="ab-right ab-next-step ab-btn ladda-button">
            <span class="ladda-label">Search</span>
            </button>
          </div>
          
          <div id="searchTable">


          </div>


        </div>
      </div>
    </div>
  </div>
  <!-- /content -->


  <script>

      function search() {
        
        var data = {
          name : $('#name').val(),
          phone : $('#phone').val(),
          email : $('#email').val(),
          country : $('#country').val(),
          city : $('#city').val(),
        };

        $.get('<?php echo site_url('SearchProfessionalUser/search') ?>', {
            state: data
        }, function(data) {
           $('#searchTable').show().html(data);
        });
        
    }
    
    
</script>