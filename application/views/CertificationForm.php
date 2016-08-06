<div class="featured-content">
    <div class="substrate">
        <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">          
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin"> Certification Request  </h1>
        </div>
        <!-- /page title -->                
    </div>
</div>
<!-- content -->
<div class="main-content">
  <div class="row">
    <!-- register -->
    <div class="eightcol column">
      <h1>Certification Request Form</h1>
      <form class="ajax-form formatted-form" action="<?php echo site_url('CertificationForm/save') ?>" method="POST">

     



        <div class="message"></div>
                
        <div class="sixcol column">
          <div class="field-wrapper">
           <h6>Name (the way you want it to appear on the Certificate):</h6>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="text" name="name" placeholder="Name"   required>
          </div>
        </div>
        <div class="clear"></div>
        
        <div class="sixcol column">
          <div class="field-wrapper">
           <h6>Date of birth:</h6>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="date" name="dob" placeholder="Date"   style="padding-bottom: 5px; width: 100%; padding: 7px;" required>
         
          </div>
             <br>
        </div>   

        

        <div class="sixcol column">
          <div class="field-wrapper">
           <h6>Address:</h6>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="text" name="address" placeholder="Address"   required>
          </div>
        </div>   

        <div class="clear"></div> 

        <div class="sixcol column">
          <div class="field-wrapper">
           <h6>City:</h6>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="text" name="city" placeholder="City"   required>
          </div>
        </div>   

        <div class="clear"></div> 

        <div class="sixcol column">
          <div class="field-wrapper">
           <h6>Country:</h6>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="text" name="country" placeholder="Country"   required>
          </div>
        </div>              
       
        <div class="clear"></div> 

        <div class="sixcol column">
          <div class="field-wrapper">
           <h6>Tel:</h6>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="text" name="tel" placeholder="Tel"   required>
          </div>
        </div>  
        <div class="clear"></div> 

        <div class="sixcol column">
          <div class="field-wrapper">
           <h6>Email:</h6>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="email" name="email" placeholder="Email"   required>
          </div>
        </div>  
          <div class="sixcol column">
          
          </div>
            <div class="sixcol column last">
                <button type="submit" class="button submit-button right">Submit</button>

          </div>          

        <div class="clear"></div>
        <div class="form-loader"></div>



      </form>
    </div>

    <div class="clear"></div>
  </div>
</div>
<!-- /content -->
