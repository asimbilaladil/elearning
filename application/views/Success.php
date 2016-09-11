<!-- <div class="featured-content">
    <div class="substrate">
        <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">			
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin"> Thank You  </h1>
        </div>
			
    </div>
</div> -->
<div class="main-content">
    <div class="row">
        <div class="column twelvecol" style="text-align: justify; font-size: 17px;">
            <p>Your information has been received Thank You, You will be redirect to paypal shortly.</p>

            </p>
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="payBypaypal">

                <!-- Identify your business so that you can collect the payments. -->
                <input type="hidden" name="business" value="asim.bilal-facilitator@riksof.com">
                
                <!-- Specify a Buy Now button. -->
                <input type="hidden" name="cmd" value="_xclick">
                
                <!-- Specify details about the item that buyers will purchase. -->
                <input type="hidden" name="item_name" value="CPE Consultant">

                <input type="hidden" name="amount" value="120">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="custom" value="<?php echo $_SESSION['id']; ?>">
                
                <!-- Specify URLs -->
                <input type='hidden' name='cancel_return' value='http://example.com/cancel.php'>
                <input type='hidden' name='return' value='http://www.tdcsinstitute.com/beta/index.php/Congratulations/success'>
                

            
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">

    document.getElementById("payBypaypal").submit();

</script>