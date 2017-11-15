<?php include_once 'header.php';?>
<?php
require_once '../controller/BlogController.php';
class Review{
    public function getContextBlog(){
        $blog = new BlogController();
        return $blog->getContent();
    }
}
$blogObject = new Review();
$blog = new BlogController();
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
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <a href="" class="section-blog-title">
                    <img src="assets/img/blog/c1.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<div>
    <div class="container our_review">
        <nav class="nav menu-review">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <a class="nav-link active button-review" href="#">Timeline</a>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <a class="nav-link button-review" href="#">About</a>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <a class="nav-link button-review" href="#">Photo</a>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <a class="nav-link button-review " href="#">More</a>

                </div>
            </div>
            
        </nav>
    </div>
</div>

<!-- END TITLE TOP -->


<div class="create-blog">
    <div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="blog_content">
					<form action="" method="post" role="form">
						<div class="form-group">
							<input type="text" name="title" class="form-control" id="title" placeholder="Title" required="required">
							<textarea rows="6" name="content" class="form-control" id="content" placeholder="Content" required="required"></textarea>
							<div class="row">
								<div class="col">
									<label class="custom-file">
										<input type="file" id="" class="custom-file-input">
										<span class="custom-file-control"></span>
									</label>
								</div>
								<div class="col">
									<input type="submit" value="POST" name="submit" id="submitBlog" class="btn btn-lg btn-contact-bg" title="" data-aos="fade-up">
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- START ICON USER -->

<div class="blog_page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up" >
                <div class="blog_content">
                    
                    <h1 class="title"><?php echo $blog->getTitle(0); ?></h1>

                    <img src="assets/img/blog/1.jpg" class="img-responsive" alt="image">
                    <p><?php echo $blog->getContent();?></p>

                    <h4 data-aos="fade-up"><span class="date"><?php echo $blog->getCreatedAt(0); ?></span> <span><i class="material-icons">thumb_up</i> 177 Like </span></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog_page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up">
                <div class="blog_content">
                    <h1 class="title"><?php echo $blog->getTitle(1); ?></h1>
                    
                    <img src="assets/img/blog/2.jpg" class="img-responsive" alt="image">
                    <p><?php echo $blog->getContent(1);?></p>

                    <h4 data-aos="fade-up"><span class="date"><?php echo $blog->getCreatedAt(1); ?></span> <span><i class="material-icons">thumb_up</i> 17 Like </span></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog_page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up">
                <div class="blog_content" >
                    <h1 class="title">creativity is intelligence having fun</h1>
                    
                    <img src="assets/img/blog/3.jpg" class="img-responsive" alt="image">
                    <p> Lorem ipsum dosectetur adipisicing elit, sed doLorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempo Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Seddo Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur a dipisicing elit at leo dignissim congue.</p>

                    <h4 data-aos="fade-up"><span class="date">25.07.2017</span> <span><i class="material-icons">thumb_up</i> 77 Like </span></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="map"></div>


<?php include_once 'footer.php'; ?>