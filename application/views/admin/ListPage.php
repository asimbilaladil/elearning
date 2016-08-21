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
                                        <h3 class="box-title">List of all pages</h3>
                                    </div>
                                    <div class="box-body">
  
                                        <h3><span>&nbsp;&nbsp;</span> Pages: </h3>
                                        <table style="width:100%" class="table-striped" >
                                            <thead>
                                                <tr>
                                                    <th style="padding: 15px;" >Name</th>
                                                    <th style="padding: 15px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach ($data['pages'] as $page) {
                                                             
                                                               echo '<tr>
                                                                 <td style="padding: 15px;"> '. $page->name .' </td>
                                                                 <td style="padding: 15px;"> <a href="'. site_url('Page/EditPage?page_id='.$page->id).'"> VIEW </a></td>
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