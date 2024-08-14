<?php include('header.php');
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
                        <h2>Admisson Procedure</h2>
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
						
                       
						<h1>Admission Instructions For the New Parent</h><br>
						<br>
						<h6>Admission fee, caution money and first installment fees must be submitted in Cash along with the Admission form and below mentioned documents on the given date by the school office or the admission is considered cancelled.</h6><br>
						<ol>
						    <li>Photo copy of Birth Certificate of student</li>
						    <li>Photo copy of Adhar Card of student</li>
						    <li>Photo copy of Adhar Card of Mother & Father of student</li>
						    <li>Photo copy of Previours Year Marksheet of student</li>
						    <li>Original Transfer Certificate from last school attended.</li>
						    <li>Two Passport Size photo of student.</li>
						</ol>
                    </div> <!-- section title -->
                    <div class="about-cont">
					
					</div>
				</div>	
			</div>
		</div>
		<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Enquiry Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .modal-dialog-centered {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Admission Enquiry</h2>
        <!-- Button to Open the Floating Window (Modal) -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">
            Enquire Now
        </button>
    </div>

    <!-- The Floating Window (Modal) -->
    <div class="modal fade" id="enquiryModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title">Admission Enquiry Form</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="studentName">Student Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="studentName" required>
                        </div>
                        <div class="form-group">
                            <label for="parentName">Parent Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="parentName" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="class">Class to Enroll <span class="text-danger">*</span></label>
                            <select class="form-control" id="class" required>
                                <option value="">Select Class</option>
                                <option value="Nursery">Nursery</option>
                                <option value="KG">KG</option>
                                <option value="1">Class 1</option>
                                <option value="2">Class 2</option>
                                <!-- Add more classes as needed -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

	</section>
	
	
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
   
    
    <!--====== PATNAR LOGO PART ENDS ======-->
   
  <?php include('footer.php');
  ?>