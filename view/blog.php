<?php include_once 'header.php';?>
<?php
require_once '../controller/BlogController.php';
//class Review{
//
//}
////$blogObject = new Review();
$blog = new BlogController();
$urlBlogId = $blog->invoke();
$blog->getContent();

session_start();
echo $_SESSION['id'];
//$getId = $blog->getBlog();
?>


<!-- START TITLE TOP -->
        <section class="section-content section-padding" style="background-image: url(assets/img/bg/partner-bg.jpg);  background-size:cover; background-position: center center;">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="section-blog-title">Single blog</h1>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- END TITLE TOP -->

        <!-- START BLOG -->
        <section class="blog_page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="blog_content">
                            <h1 class="date"><?php echo $blog->getCreatedAt($urlBlogId); ?></h1>
                            <h2 class="title"><?php echo $blog->getTitle($urlBlogId); ?></h2>
                            <h4><span>03 Comments </span> <span>200 Views </span> <span>17 Likes </span></h4>
                            <img src="<?php echo $blog->getImage($urlBlogId); ?>" class="img-responsive" alt="image" />
                            <p><?php echo $blog->getContent($urlBlogId);?></p>
                        </div>
                        <div class="author_part">
                            <h3 class="blog_head_title">About the author</h3>
                            <div class="single_author">
                                <img src="assets/img/blog/author.jpg" alt="" />
                                <h4>Syed Ekram</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p> 
                            </div>
                        </div><!--- END AUTHOR PART -->
                        <div class="comments_part">
                            <h3 class="blog_head_title">Comments</h3>
                            <div class="single_comment">
                                <img src="assets/img/blog/c1.jpg" alt="" />
                                <h4>Masum Billah</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
                            </div><!--- END SINGLE COMMENT -->
                            <div class="single_comment single_comment_mbnone">
                                <img src="assets/img/blog/c2.jpg" alt="" />
                                <h4>Sharmin Sheila</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies quam nisi, vel gravida enim accumsan id. Praesent justo quam, auctor et lorem in, pulvinar ornare orci.</p>
                            </div><!--- END SINGLE COMMENT -->
                        </div><!--- END COMMENTS PART -->   
                        <div class="comment_form">
                            <h3 class="blog_head_title">Add a Comment</h3>
                            <div class="contact comment-box">
                            <form id="contact-form" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" id="first-email" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="actions">
                                            <input type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div><!--- END COMMENT FORM -->                        
                    </div><!--- END COL -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="search wow fadeInRight">
                            <input type="text" class="form-control" placeholder="Enter Keyword Here &amp; Search...">
                        </div>
                        <div class="categories wow fadeInRight">
                            <h4 class="blog_sidebar_title">Categories</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Photography</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Business</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Responsive Design</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Web Design</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Branding</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> Marketing</a></li>
                            </ul>
                        </div>                  
                        <div class="video_post wow fadeInRight">
                            <h4 class="blog_sidebar_title">Video Widget</h4>
                            <iframe src="https://player.vimeo.com/video/62022718"></iframe>         
                        </div>
                        <div class="tag">
                            <h4 class="blog_sidebar_title">Tag cloud</h4>
                            <a class="btn btn-default btn-tag-bg" href="#">Travel</a>
                            <a class="btn btn-default btn-tag-bg" href="#">tour</a>
                            <a class="btn btn-default btn-tag-bg" href="#">portfolio</a>
                            <a class="btn btn-default btn-tag-bg" href="#">Photopgraphy</a>     
                            <a class="btn btn-default btn-tag-bg" href="#">Responsive</a>
                            <a class="btn btn-default btn-tag-bg" href="#">agency</a>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </section>
        <!-- END BLOG -->

<div id="map"></div>


<?php include_once 'footer.php'; ?>