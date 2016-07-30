<div class="featured-content">
    <div class="substrate">
        <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">			
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin"> Congratulations  </h1>
        </div>
        <!-- /page title -->				
    </div>
</div>
<div class="main-content">
    <div class="row">
        <div class="column eightcol" style="text-align: center;">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

                <!-- Identify your business so that you can collect the payments. -->
                <input type="hidden" name="business" value="asimbilaladil@gmail.com">
                
                <!-- Specify a Buy Now button. -->
                <input type="hidden" name="cmd" value="_xclick">
                
                <!-- Specify details about the item that buyers will purchase. -->
                <input type="hidden" name="item_name" value="Professional">

                <input type="hidden" name="amount" value="20">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="custom" value="USD">
                
                <!-- Specify URLs -->
                <input type='hidden' name='cancel_return' value='http://example.com/cancel.php'>
                <input type='hidden' name='return' value='http://www.tdcsinstitute.com/beta/index.php/Congratulations/success'>
                
                <!-- Display the payment button. -->
                <input type="image" name="submit" border="0"
                src="<?php echo base_url("assets/images/paypal.png") ?>" alt="PayPal - The safer, easier way to pay online">
            
            </form>

        </div>
    </div>
</div>