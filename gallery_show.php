<?php
	
	$f=$_GET['id'];
	
 include('header.php');

?>
<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
	mymodel.close();
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

    <!--====== HEADER PART ENDS ======-->
   
   <!--====== SEARCH BOX PART START ======-->
    <!--
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> 
    </div> 
    -->
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
   
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
	.
    
    <section id="about-page" class="pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="">
                   <div class="row-gallery">
							<?php
							
							$working_dir = getcwd();
							
							//get image directory
							
							$dir = $working_dir."/images/gallery/".$f;
							$dir_path = "images/gallery/".$f;
							chdir($dir);
							$files = glob("*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE );
							
							//again change the directory to working directory
							
							$p=sizeof($files);
							
							//iterate over image files
							$t=1;
							
								
							foreach ($files as $file) 
							{
						
								$file_name=$dir_path.'/'.$file;
								
								 //$file_name= str_replace('\\', '/',$file_name);
								 //echo $file_name;
							?>
								<div class="column">
								<img src="<?php echo $file_name; ?>" onclick="openModal();currentSlide(<?php echo $t; ?>)" class="hover-shadow">
								<?php  $t=$t+1; ?>
								</div>
								
							<?php 
							}
							?>
							  
					</div>

<!-- The Modal/Lightbox -->
							<div id="myModal" class="modal">
							  <span class="close cursor" onclick="closeModal()">&times;</span>
							  <div class="model-content">
								<?php
								$j=1;
								foreach ($files as $file) 
								{
									$file_name=$dir_path.'/'.$file;
								
								?> 
								<div class="mySlides">
								  <div class="numbertext"><?php echo $j."/". $p ?></div>
								  <img src="<?php echo $file_name; ?>" style="width:80%">
								 <?php   $j=$j+1; ?>
								</div>
								<?php
								}
								?>
								

    <!-- Next/previous controls -->
								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
								<div class="caption-container">
								  <p id="caption"></p>
								</div>

    <!-- Thumbnail image controls -->
						<?php
							$k=1;
							foreach ($files as $file) 
							{
								$file_name=$dir_path.'/'.$file;
								
							?>	
								
								<div class="column">
								<img src="<?php echo $file_name; ?>" onclick="openModal();currentSlide(<?php echo $k; ?>)" class="hover-shadow">
								<?php  $k=$k+1; ?>
								</div>
								
								
							<?php 
							}
							?>

						
						
					  </div>
					</div>
                </div> <!-- about cont -->
               
            </div> <!-- row -->

        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->
    
    
    
    <!--====== COUNTER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
   
    
    <!--====== PATNAR LOGO PART ENDS ======-->
   
  <?php include('footer.php');
  ?>