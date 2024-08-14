<?php include('header.php');
?>
	<!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
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
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-80" data-overlay="8" style="background-color:#2F4F4F">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Gallery</h2>
                        
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-page" class="pt-30 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               
				<?php
							$working_dir = getcwd();
							
							//get image directory
							
							$dir = $working_dir."/images/gallery/";
							
							
							$folder_name = array_diff(scandir($dir), array('..', '.'));
							// Sort in ascending order - this is default
				
							// Sort in descending order
				
				
							foreach ($folder_name as $folder) 
							{
								
								$dir_path = "images/gallery/".$folder;
								$files = scandir($dir_path);
								$count = count($files);
								$index = rand(2, ($count-1));
								$filename = $files[$index];
								$img_src=$dir_path."/".$filename;
								
									
							?>
								<div class="col-lg-3 col-sm-6">
								<div class="singel-teachers mt-30 text-center">
								<div class="image">					
									
							 		 <a href="gallery_show.php?id=<?php echo $folder; ?>"><img src="<?php echo $img_src; ?>" alt="gallery" alt="gallery" width="200" height="230"></a>													 							
										
								</div>
								<div class="heading">
									<?php $folder=ucfirst($folder); ?>
									<a href="gallery_show.php?id=<?php echo $folder; ?>"><h4><?php echo $folder;?></h4></a>
                            
								</div>
								 </div> <!-- singel teachers -->
								</div>
               
							<?php 
							
							}
							?>
                   
              
           </div> <!-- row -->
           
			
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
   
<?php
include('footer.php');
?>
