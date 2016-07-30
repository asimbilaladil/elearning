<div class="featured-content">
    <div class="substrate">
        <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">          
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin"> <?php echo $data['course']->name ?> </h1>
        </div>
        <!-- /page title -->                
    </div>
</div>
<div class="main-content">
    <div class="row">
        <div class="column eightcol">
            <article class="single-post">
                <div class="post-content">
                    <h1>Module I</h1>
                    <div class="learndash user_has_access" id="learndash_post_2443">
                        <?php echo $data['course']->url ?>
                        <br>

                    </div>
      
                </div>
            </article>
       
        </div>
        <aside class="sidebar column fourcol last">
            <div class="widget widget_recent_entries">
                <div class="widget-title">
                    <h3 class="nomargin">Quiz</h3>
                </div>
                <ul>
                    <li>
                        <a href="<?php echo site_url('Quiz/index?id=' . $data['course']->id  ) ?>">Start Quiz</a>
                    </li>
                </ul>
            </div>
            <div class="widget widget_recent_entries">
                <div class="widget-title">
                    <h3 class="nomargin">List Of Modules</h3>
                </div>
                <ul>


                    <?php

                        foreach ($data['courses'] as $course) {
                            echo '<li>
                                    <a href="'. site_url('ViewModule/index?id=' . $course->id ) .'">'. $course->name .'</a>
                                </li>'; 
                            }

                    ?>

                </ul>
            </div>



        </aside>
    </div>
</div>