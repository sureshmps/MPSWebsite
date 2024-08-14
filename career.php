<?php include('header.php');
$msg = $_GET['msg'];
$m="";
if($msg=="true"){
    $m = "<span class='text-success'>Thanks For Connecting With Us.</span>";
}elseif($msg=="false"){
    $m = "<span class='text-danget'>Something Went Wrong.</span>";
}
?>
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
    
    <section id="page-banner" class="pt-105 pb-110" data-overlay="8" style="background-color:#2F4F4F">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Career</h2>
                        <!--
						<nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
						-->
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="section-title mt-20">
						
                       
						<h3>Kindly send your resume/cv at mpsbikaner2020@gmail.com with Full name, contact number, email address, experience (in years), current employer, previous salary & expected salary.</h3>
						<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Job Application Form</h2>
         <span><?php echo $m; ?></span>
        <form action="Insert/carrer.php" method="POST" enctype='multipart/form-data' autocomplete="OFF">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jobPosition">Job Position <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="jobPosition" name="JobPosition" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="firstName">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email"required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Phone No <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone"required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob "required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="employer">Current Employer <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="employer" name="employer" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="experience">Experience <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="experience" name="experience" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="education">Educational Qualification <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="education" name="education" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="presentSalary">Present Salary <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="presentSalary" name="presentSalary"required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="expectedSalary">Expected Salary <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="expectedSalary" name="expectedSalary" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="resumeLink">Paste Resume Link Here</label>
                    <input type="url" class="form-control" id="resumeLink" name="resumeLink">
                </div>
            </div>
            <div class="form-group">
                <label for="resume">Resume</label>
                <input type="file" class="form-control-file" id="resume" name="resume">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

                    </div> <!-- section title -->
                    <div class="about-cont">
					
					</div>
				</div>	
			</div>
		</div>
	</section>
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
   
    
    <!--====== PATNAR LOGO PART ENDS ======-->
   
  <?php include('footer.php');
  ?>