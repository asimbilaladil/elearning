<div class="featured-content">
    <div class="substrate">
        <img src="http://www.tdcsinstitute.com/wp-content/themes/academy/images/bgs/site_bg.jpg" class="fullwidth" alt="">          
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin">  News</h1>
        </div>
        <!-- /page title -->                
    </div>
</div>
<!-- content -->
<div class="main-content">
    <div class="row">
        <!-- left blogs -->
        <div class="column twelvecol">
            <div class="posts-listing" style="text-align: justify;">
              <?php foreach ($data['blogs'] as $data) {  ?>
                <article class="post-400 post type-post status-publish format-standard hentry category-news tag-amet tag-ipsum tag-lorem post clearfix instock">
              
                    <div class="post-content column tencol last">
                        <h1><a href="<?php echo 'ViewNews?id='.$data->id;?>"><?php echo $data->title;?> </a></h1>
                        <p><?php echo substr($data->content, 0, 500);?></p>
                        <footer class="post-footer">
                            <a class="button small" href="<?php echo 'ViewNews?id='.$data->id;?>">Read More</a>
                            <div class="post-comment-count">5</div>
                            <time datetime="2013-02-18" class="post-date nomargin"><?php echo $data->date;?> by admin</time>
                        </footer>
                    </div>
                </article>
                <?php } ?>
            </div>
            <nav class="pagination"><span class="page-numbers current">1</span>
                <a href="html" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
                <a href="page2.html" class="next page-numbers"></a>
            </nav>
        </div>
        <!-- /left blogs -->

    </div>
</div>