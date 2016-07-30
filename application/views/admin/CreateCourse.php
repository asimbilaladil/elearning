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
                    <li><a href="#"><i class="fa fa-dashboard"></i> Create Course</a></li>
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
                        <div class="col-md-12">
                            <form class="ajax-form formatted-form" action="<?php echo site_url('CreateCourse/save') ?>" method="POST">
                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Create New Course</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="name" class="form-control" id="" placeholder="Course Name" required>
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Presentation URL</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="url" class="form-control" id="" placeholder="URL" required>
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="description" class="form-control" id="" placeholder="Description" required>
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-2">
                                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                                            </div>
                                        </div>
                                        <br><br>    
                                        <h3><span>&nbsp;&nbsp;</span> Modules: </h3>
                                        <table style="width:100%" class="table-striped" >
                                            <thead>
                                                <tr>
                                                    <th style="padding: 15px;" >Name</th>
                                                    <th style="padding: 15px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach ($data['courses'] as $course) {
                                                             
                                                               echo '<tr>
                                                                 <td style="padding: 15px;"> '. $course->name .' </td>
                                                                 <td style="padding: 15px;"> <a href=""> VIEW </a></td>
                                                               </tr>';
                                                             
                                                             }
                                                    ?>                  
                                            </tbody>
                                        </table>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
        </div>
    </div>