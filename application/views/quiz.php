<div class="featured-content">
  <div class="substrate">
    <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">			
  </div>
  <div class="row">
    <div class="page-title">
      <h1 class="nomargin">  Quiz</h1>
    </div>
    <!-- /page title -->				
  </div>
</div>
<div class="main-content">
  <div class="row">
    <div class="eightcol column">
      <h1>Sample Lesson Quiz</h1>
      <p>Donec feugiat tincidunt lectus a interdum. Nunc vulputate, nunc ut elementum iaculis, libero mi rhoncus leo, fringilla convallis mi ligula in erat. Integer accumsan nisl ac eros consectetur nec dictum orci tempus. Proin mollis gravida accumsan. In cursus iaculis sapien eget sollicitudin. Sed at ante dolor. Pellentesque hendrerit, dolor sit amet laoreet aliquam, purus neque dignissim turpis, nec imperdiet felis nisl nec urna.&nbsp;Nulla lacinia facilisis nunc quis gravida.</p>
      <div class="quiz-listing">
        <form id="quiz_form" action="http://www.tdcsinstitute.com/quiz/sample-lesson-quiz/" method="POST">
          <div class="message">
          </div>
          <div class="quiz-question multiple">

          <?php
            $count = 0;
            foreach ($data['questions'] as $item) {
              $count++;    
              echo '<div class="question-title">
                <div class="question-number">'. $count .'</div>
                <h4 class="nomargin">' . $item->question .'</h4>
              </div>
              <ul>
                <li class=""><input type="checkbox" name="" id="" value="true"><label for="">'. $item->option1 .'</label></li>
                <li class=""><input type="checkbox" name="" id="" value="true"><label for="">'. $item->option2 .'</label></li>
                <li class=""><input type="checkbox" name="" id="" value="true"><label for="">'. $item->option3 .'</label></li>
                <li class=""><input type="checkbox" name="" id="" value="true"><label for="">'. $item->option4 .'</label></li>
              </ul>
            </div>';

            }

          ?>

        </form>
      </div>
    </div>
  </div>
</div>
