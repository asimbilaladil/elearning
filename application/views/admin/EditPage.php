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
                    <li><a href="#"><i class="fa fa-dashboard"></i> Create Blog</a></li>
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
                            <form class="ajax-form formatted-form" action="<?php echo site_url('Page/save') ?>" method="POST">

                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Edit Page Content</h3>
                                    </div>
    								<input type="hidden" name="id" value="<?php echo $_GET['page_id']; ?>">
    								<div class="box-body">
    					
     									<div class="form-group">
    	                                    <label for="" class="col-sm-2 control-label">Content</label>
    	                                    <div class="col-sm-10">
    	                                    	<textarea name="content" ></textarea>
    	                                    </div>
                                    	</div>                                	
    								</div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-2">

                                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </div>
    								<div class="box-footer">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
        </div>
    </div>
