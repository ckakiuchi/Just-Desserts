<?php include_once('statics/header.php'); ?>

<!-- main content -->
<div id="main">
  <div class="slideshow-container">

  <div class="mySlides fade">
    <img src="images/banner1.jpg" style="width:100%; height:350px">
  </div>

  <div class="mySlides fade">
    <img src="images/banner2.jpg" style="width:100%; height:350px">
  </div>

  <div class="mySlides fade">
    <img src="images/banner3.jpg" style="width:100%; height:350px">
  </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</div>

<script>
	var slideIndex = 0;
	showSlides();

function showSlides() {

    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>


	<div id="brdiv"></div>
<?php include_once('statics/footer.php'); ?>
