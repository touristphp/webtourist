<?php
include_once '../model/Like.php';
$like = new Like();
if($like->checkLiked($_SESSION['id'],$_GET['blog'])){

    $test = true;
}
else {
    $test = false;

}
//
// var_dump($_SESSION['id']);
// var_dump($_GET['blog']);
// var_dump($test);


 ?>

<!-- START FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="copyright">
                    <p>Copyright &copy; 2017 |  All Rights Reserved.</p>
                </div><!--- END FOOTER COPYRIGHT -->
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</div>
<!-- END FOOTER -->


<!-- Latest jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- modernizer JS -->
<script src="assets/js/modernizr.2.5.3.min.js"></script>
<!-- owl-carousel min js  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- stellar js -->
<script src="assets/js/jquery.stellar.min.js"></script>
<!-- countTo js -->
<script src="assets/js/jquery.inview.min.js"></script>
<!-- video scripts -->
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript">
	$('.player').mb_YTPlayer();
</script>
<!-- jquery flexslider min js -->
<script src="assets/js/jquery.flexisel.js"></script>
<script src="assets/js/jquery.flexslider-min.js"></script>
<!-- scrolltopcontrol js -->
<script src="assets/js/scrolltopcontrol.js"></script>
<!-- form-contact js -->
<script src="assets/js/form-contact.js"></script>
<!-- aos js -->
<script src="assets/js/aos.js"></script>
<!-- map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

<!-- scripts js -->
<script src="assets/js/scripts.js"></script>
<!-- script by Thanh -->
<script  src="assets/js/index.js"></script>
<!-- blog -->

<script type="text/javascript">

    $(document).ready(function(){

        var element = "<?php echo $test; ?>";

       if (element == true) {

           $('.like_blog').removeAttr('id');
           $('.like_blog').attr( "id", "like" );
           $('#like').removeClass('material-icons like_blog');
           $('#like').addClass('material-icons like_blog  test');
       }
       else {

           $('.like_blog').removeAttr('id');
           $('.like_blog').attr( "id", "unlike" );
           $('#unlike').removeClass('material-icons like_blog test');
           $('#unlike').addClass('material-icons like_blog');
       }

        // unlike to like
        $("#like").click(function(){
            var valueCheckLike;
            var idElement = $(this).attr('id');
            var data1 = {
                "user_id": "<?= $_SESSION['id'] ?>",
                "blog_id": "<?= $_GET['blog'] ?>",
                "value": idElement
            };
            
            $.ajax({
                type: 'POST',
                url: '../controller/BlogController.php',
                data: data1,
                success: function(data) {
                    valueCheckLike = data;
                    // alert(valueCheckLike);
                    $('.like_blog').removeAttr('id');
                    $('.like_blog').attr( "id", "unlike" );
                    $('#unlike').removeClass('material-icons like_blog test');
                    $('#unlike').addClass('material-icons like_blog');
                }
            });
        });
        //  like to unlike
        $("#unlike").click(function(){
            var valueCheckUnLike;
            var idElementUnLike = $(this).attr('id');
            var dataUnLike = {
                "user_id": "<?= $_SESSION['id'] ?>",
                "blog_id": "<?= $_GET['blog'] ?>",
                "value": idElementUnLike
            };

            $.ajax({
                type: 'POST',
                url: '../controller/BlogController.php',
                data: dataUnLike,
                success: function(data) {
                    valueCheckUnLike = data;

                    $('.like_blog').removeAttr('id');
                    $('.like_blog').attr( "id", "like" );
                    $('#like').removeClass('material-icons like_blog');
                    $('#like').addClass('material-icons like_blog  test');
                }
            });
        });
    });

</script>

</body>
</html>
