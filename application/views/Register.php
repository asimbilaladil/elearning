<!-- content -->
<div class="main-content">
  <div class="row">
    <!-- register -->
    <div class="eightcol column">
      <h1>Register</h1>
      <form class="ajax-form formatted-form" action="<?php echo site_url('Register/save') ?>" method="POST">

     

	 <?php echo form_open('form'); ?>

        <div class="message"></div>
                
        <div class="sixcol column">
          <div class="field-wrapper">
            <input type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" required>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="email" name="userEmail" placeholder="Email" value="<?php echo set_value('userEmail'); ?>" required>
          </div>
        </div>
        <div class="clear"></div>
        <div class="sixcol column">
          <div class="field-wrapper">
            <input type="password" name="password" placeholder="Password" required>
          </div>
        </div>
        <div class="sixcol column last">
          <div class="field-wrapper">
            <input type="password" name="confirmPassword" placeholder="Repeat Password" required>
          </div>
        </div>
        <div class="clear"></div>
        <button type="submit" class="button submit-button left">Register</button>
        <div class="form-loader"></div>
<?php echo validation_errors(); ?>

        <?php echo form_close(); ?>
      </form>
    </div>
    <!-- login -->
    <div class="fourcol column last">
      <h1>Sign In</h1>
      <form class="ajax-form formatted-form" action="<?php echo site_url('Register/login') ?>" method="POST">

        <div class="message"></div>
        <div class="field-wrapper">
          <input type="text" name="loginEmail" required>
        </div>
        <div class="field-wrapper">
          <input type="password" name="loginPassword" required>
        </div>
            <button type="submit" class="button submit-button left">Login</button>
        <div class="form-loader"></div>



      </form>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- /content -->
