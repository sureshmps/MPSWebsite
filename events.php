<?php 
include("header.php");
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
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
    
    <section id="page-banner" class="pt-105 pb-110" data-overlay="8" style="background-color:#2F4F4F">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Inagraution</h2>
                        
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div id="bootstrapSlider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
            <div class="item active">
                <img src="images/event/e-1.JPG" alt="find my iphone login" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/event/e-2.JPG" alt="verizon prepaid phones" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/event/e-3.JPG" alt="apple id reset" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/event/e-4.JPG" alt="forgot apple id password" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/event/e-5.JPG" alt="apple icloud login" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/event/e-6.JPG" alt="iphone is disabled connect to itunes" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/event/e-7.JPG" alt="att unlock phone" style="width:100%;">
            </div>
            <div class="item">
                <img src="images/event/e-5.JPG" alt="iphone disabled connect to itunes" style="width:100%;">
            </div>
        </div>
        
        <a class="left carousel-control" href="#bootstrapSlider" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootstrapSlider" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        
        <ul class="carousel-indicators">
            <li data-target="#bootstrapSlider" data-slide-to="0" class="active"><img src="images/event/e-1.JPG"></li>
            <li data-target="#bootstrapSlider" data-slide-to="1"><img src="images/event/e-2.JPG"></li>
            <li data-target="#bootstrapSlider" data-slide-to="2"><img src="images/event/e-3.JPG"></li>
            <li data-target="#bootstrapSlider" data-slide-to="3"><img src="images/event/e-4.JPG"></li>
            <li data-target="#bootstrapSlider" data-slide-to="4"><img src="images/event/e-5.JPG"></li>
            <li data-target="#bootstrapSlider" data-slide-to="5"><img src="images/event/e-6.JPG"></li>
            <li data-target="#bootstrapSlider" data-slide-to="6"><img src="images/event/e-7.JPG"></li>
            <li data-target="#bootstrapSlider" data-slide-to="7"><img src="images/event/e-7.JPG"></li>
        </ul>
    </div>
            </div>  <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
   
  <?php
  include('footer.php');
  ?>