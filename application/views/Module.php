<div class="featured-content">
    <div class="substrate">
        <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">          
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin"> Module  </h1>
        </div>
        <!-- /page title -->                
    </div>
</div>
<div class="main-content">
    <div class="row">
        <div class="column twelvecol">
            <article class="single-post">
                <div class="post-content">
                    <h1>Learning with CPE</h1>
                    <div class="learndash user_has_no_access" id="learndash_post_2446">
                       
                        <div id="learndash_course_content">
                            <div id="learndash_lessons">
                                <div id="lesson_heading">
                                    <span>Lessons</span>
                                    <span class="right">Status</span>
                                </div>
                                <div id="lessons_list">

                                    <?php
                                        $count = 0;
                                        foreach ($data['courses'] as $course) {
                                            $attempt = $course->attempt ? 'completed' : 'notcompleted';
                                            $count++;
                                            echo '<div class="post-2453 is_not_sample">
                                                    <div class="list-count">
                                                        '. $count .'                           
                                                    </div>
                                                    <h4>
                                                        <a class="'. $attempt .'" href="'. site_url('ViewModule/index?id=' . $course->courseId ) .' ">'. $course->name .'</a>
                                                    </h4> 
                                                </div>';

                                        }

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </article>
   
        </div>
    </div>
</div>