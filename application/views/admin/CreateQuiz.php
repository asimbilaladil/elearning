<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small >Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Create Quiz</a></li>
                    <li class="active">Dashboard</li>
                </ol>
                </br>
                </br>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12" id="createQuiz" style="display:none; ">
                            <form action="<?php echo site_url("CreateQuiz/save") ?>" method="POST">
                                <div class="box box-success">
                                    <div class="box-header with-border">
                                           <div class="col-lg-2">
                                       <h3 class="box-title"> Quiz</h3>
                                    </div>
                                       <div class="col-lg-10" style="text-align: right; cursor: pointer;">
                                       <a onclick="hide('createQuiz','quizTable')"> <p>  View Courses</p> </a>
                                    </div>
                                    </div>
                                    <div class="box-body">
 
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-6">
                                                <input type="number" name="numberOfQuestions" class="form-control" id="numberOfQuestions" placeholder="Number of questions" required>
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Course</label>
                                            <div class="col-sm-6">
                                                <select name="course" class="form-control">
                                                <?php
                                                    foreach ($data['notQuizCourses'] as $course) {
                                                        echo '<option value="'. $course->id .'"> ' . $course->name .' </option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <br><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">
                                            <input type="button" id="createForm" class="btn btn-primary btn-block" value="Create">
                                        </div>
                                    </div>
                                    <br> <br>
                                    <div id="quiz">
                                    </div>
                            </form>
                            </div>
                        </div>

                         <div class="col-md-12" id="quizTable" >
                                <div class="box box-success">
                                    <div class="box-header with-border">
                                    <div class="col-lg-2">
                                       <h3 class="box-title"> Quiz</h3>
                                    </div>
                                       <div class="col-lg-10" style="text-align: right; cursor: pointer;">
                                       <a onclick="hide('quizTable','createQuiz')"> <p> Create Quiz</p></a>
                                    </div>
                                       
                                        
                                    </div>
                                    <div class="box-body">
                                            <table style="width:100%" class="table-striped" >
                                                <thead>
                                                    <tr>
                                                        <th style="padding: 15px;" >Name</th>
                                                        <th style="padding: 15px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach ($data['quizCourses'] as $course) {
                                                                 
                                                                   echo '<tr>
                                                                     <td style="padding: 15px;"> '. $course->name .' </td>
                                                                     <td style="padding: 15px;"> <a href="'.  site_url("CreateQuiz/delete") .'?id='.$course->id .' "> Remove </a></td>
                                                                   </tr>';
                                                                 
                                                                 }
                                                        ?>                  
                                                </tbody>
                                            </table>
              
                               
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <script>
        $("#createForm").click(function(){
        
          var numberOfQuestions = $("#numberOfQuestions").val();
          var courseId = $("#numberOfQuestions").val();
        
          var html = '';
        
          //questions
          for( var q = 1; q <= numberOfQuestions; q++ ) {
            html += ' <div class="box-body"> ';
            html += ' <div class="form-group"> ';
            html += ' <label for="" class="col-sm-2 control-label"> Question ' + q + ' </label> ';
            html += ' <div class="col-sm-6"> ';
            html += ' <input type="text" class="form-control" name="question' + q + '" /> ';
            html += ' </div> <br> </div> </div> ';
        
        
            //options
            for( var i = 1; i <= 4; i++ ) {
                html += ' <div class="box-body"> ';
                html += ' <div class="form-group"> ';
                html += ' <label for="" class="col-sm-2 control-label"> Option ' + i + ' </label> ';
                html += ' <div class="col-sm-6"> ';
                html += ' <input type="text" class="form-control" name="option' + q + '[]" /> ';
                html += ' </div> <br> </div> </div> ';
            }
        
            html += ' <div class="box-body"> ';
            html += ' <div class="form-group"> ';
            html += ' <label for="" class="col-sm-2 control-label"> Select Correct Answer </label> ';        
            html += ' <div class="col-sm-6"> ';
            html += ' <select class="form-control"  name="answer' + q + '"> ';
            html += ' <option value="1"> 1 </option> ';
            html += ' <option value="2"> 2 </option> ';
            html += ' <option value="3"> 3 </option> ';
            html += ' <option value="4"> 4 </option> ';
            html += ' </select> ';
            html += ' </div> <br> </div> </div> ';
        
          }
        
            html += ' <div class="box-body"> ';
            html += ' <div class="form-group"> ';
            html += ' <div class="col-sm-offset-2 col-sm-2"> ';
            html += ' <input type="submit" class="btn btn-primary btn-block" value="Create Quiz" /> ';
            html += ' </div> <br> </div> </div> ';
        
            $("#quiz").append( html );
        
        });
        
        var hide = function hide (hide, show){

          document.getElementById(hide).style.display = "none";
          document.getElementById(show).style.display = "";



        }
    </script>