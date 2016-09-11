<!--<div class="featured-content">
    <div class="substrate">
        <img src="http://il6.picdn.net/shutterstock/videos/9494555/thumb/1.jpg" class="fullwidth" alt="">          
         
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin">  News</h1>
        </div>
               
    </div>
</div> -->
<div class="main-content">
    <div class="row">
        <!-- left blogs -->
        <div class="column twelvecol">
            <article class="single-post">
             
                <div class="post-content">
                    <h1><?php echo $data['blogs'][0]->title; ?></h1>
                    <p><?php echo $data['blogs'][0]->content; ?></p>
                    <footer class="post-footer">
                        <div class="twelvecol column">
                            <div class="post-comment-count">5</div>
                            <time class="post-date nomargin" datetime="2013-02-18"><?php echo $data['blogs'][0]->date; ?></time>
                            <div class="post-categories">&nbsp;in <a href="#" title="View all posts in News" rel="category tag">News</a></div>
                        </div>
                       
                    </footer>
                </div>
            </article>
            <div class="post-comments clearfix" id="comments">
                <h1>Comments</h1>
                <div class="comments-listing" id="comments">
                    <ul>
                      
              <?php foreach ($data['comments'] as $data) { ?>
                        <!-- #comment-## -->
                        <li id="comment-60429">
                            <div class="comment hidden-wrap">
                                <div class="avatar-container">
                                    <div class="bordered-image">
                                        <a href="#"><img src="http://www.freeiconspng.com/uploads/blue-user-icon-32.jpg" class="avatar" width="96" alt=""></a>
                                    </div>
                                </div>
                                <div class="comment-text">
                                    <header class="comment-header hidden-wrap">
                                        <h5 class="left comment-author"><a href="#"><?php echo $data->username; ?></a></h5>
                                        <time class="comment-time left" datetime="2016-07-05"><?php echo $data->date; ?></time>
                                             
                                    </header>
                                    <p><?php echo $data->comment_text; ?></p>
                                </div>
                            </div>
                        </li>
                      <?php } ?>
                        <!-- #comment-## -->
                    </ul>
                </div>
              <?php if(isset($_SESSION['id']) ) { ?>
                <div class="comment-form eightcol column last">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/demo/academy/news/learn-basic-cooking-tips#respond" style="display:none;">Click here to cancel reply.</a></small></h3>
                        <form action="<?php echo site_url('ViewNews/comment') ?>" method="post" id="" class="comment-form">
                            <div class="formatted-form">
                                <div class="field-wrapper"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment"></textarea></div>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="" value="Add Comment">
                                <input type="hidden" name="blog_id" value="<?php echo $_GET['id']; ?>" id="comment_post_ID">

                            </p>
                        </form>
                    </div>
                    <!-- #respond -->
                </div>
              <?php } ?>
            </div>
        </div>
        <!-- /left blogs -->

    </div>
</div>