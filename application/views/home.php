   <!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">

        <a href="<?php echo site_url('login/logout') ?>"> Logout </a>


            <div class="info-author">
                <div class="image">
                    <img src="<?php echo 'https://graph.facebook.com/'. $user_profile['id'] .'/picture?type=large' ?>" alt="">
                </div>    
                <div class="name-author">
                    <h2 class="big"> <?php echo $user_profile['name']; ?> </h2>
                </div>     
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3>  <?php if(array_key_exists('location', $user_profile)) { echo $user_profile['location']['name']; }  ?> </h3>
                </div>

            </div>
            <div class="info-follow">
                <div class="trophies">
                    <span>12</span>
                    <p>Trophies</p>
                </div>
                <div class="trophies">
                    <span>12</span>
                    <p>Follower</p>
                </div>
                <div class="trophies">
                    <span>20</span>
                    <p>Following</p>
                </div>
                <div class="trophies">
                    <span>$ 149,902</span>
                    <p>Balance</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->

