<!-- content -->
<div class="main-content">
  <div class="row">
    <!-- register -->
    <div class="eightcol column">
      <h1>Create Quiz</h1>

        <div class="message"></div>
        <div class="sixcol column">
          <div class="field-wrapper">
            <input type="number" name="numberOfQuestions" id="numberOfQuestions" placeholder="Number of Questions" required>
          </div>
        </div>

        <div>
        </div>

        <div class="sixcol column">
          <div class="field-wrapper">
            <button name="create" class="button submit-button" id="createForm"> Create </button>
          </div>
        </div>
        </div>

        <div id="quizz">


 

    </div>

  </div>

</div>
</div>
<!-- /content -->

<script>
$("#createForm").click(function(){


  var numberOfQuestions = $("#numberOfQuestions").val();

  var html = ' <form action="<?php echo site_url("Create_quiz/save") ?>" method="POST"> ';
  html += ' <input type="text" name="numberOfQuestions" value="' + numberOfQuestions + '" />';

  //questions
  for( var q = 1; q <= numberOfQuestions; q++ ) {
    html += ' <div class="sixcol column"> ';
    html += ' <div class="field-wrapper"> ';
    html += ' <label>Question ' + q + ' </label> ';
    html += ' <input type="text" name="question' + q + '" /> ';
    html += ' </div> ';
    html += ' </div> ';

    //options
    for( var i = 1; i <= 4; i++ ) {
      html += ' <div class="sixcol column"> ';
      html += ' <div class="field-wrapper"> ';
      html += ' <label>Option ' + i + ' </label> ';
      html += ' <input type="text" name="option' + q + '[]" /> ';
      html += ' </div> ';
      html += ' </div> ';
    }


    html += ' <div class="sixcol column"> ';
    html += ' <div class="field-wrapper"> ';
    html += ' <select name="answer' + q + '"> ';
    html += ' <option value="1"> 1 </option> ';
    html += ' <option value="2"> 2 </option> ';
    html += ' <option value="3"> 3 </option> ';
    html += ' <option value="4"> 4 </option> ';
    html += ' </div> ';
    html += ' </div> ';

  }

  html += ' <div class="sixcol column"> ';
  html += ' <div class="field-wrapper"> ';
  html += ' <input type="submit" value="Create Quizz" /> ';
  html += ' </div> ';
  html += ' </div> ';


  $("#quizz").append( html );

});


</script>