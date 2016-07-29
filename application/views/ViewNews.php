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
                                        <h5 class="left comment-author"><a href="#">tommy</a></h5>
                                        <time class="comment-time left" datetime="2016-07-05">July 5, 2016</time>
                                             
                                    </header>
                                    <p>Lean and cpmplete</p>
                                </div>
                            </div>
                        </li>
                        <!-- #comment-## -->
                    </ul>
                </div>
                <div class="comment-form eightcol column last">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/demo/academy/news/learn-basic-cooking-tips#respond" style="display:none;">Click here to cancel reply.</a></small></h3>
                        <form action="#" method="post" id="" class="comment-form">
                            <div class="formatted-form">
                                <div class="field-wrapper"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment"></textarea></div>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="" value="Add Comment">
                                <input type="hidden" name="comment_post_ID" value="400" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                        </form>
                    </div>
                    <!-- #respond -->
                </div>
            </div>
        </div>
        <!-- /left blogs -->

    </div>
</div>