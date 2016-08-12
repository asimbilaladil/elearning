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
            <form class="ajax-form formatted-form" action="<?php echo site_url('ProfessionalUser/save') ?>" method="POST">
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