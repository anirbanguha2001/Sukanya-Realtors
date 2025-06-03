<?php
include "includes/header.php";
?>

<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Pushpanjali Apartment</h1>
            <span class="color-text-a">Benachity, Bhiringi</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.html">Projects</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Pushpanjali Apartment
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="assets/img/Pushpanjali/p1.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="assets/img/Pushpanjali/p2.jpg" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">Starts From <br> 20 Lakhs</span>
                  </div>
                  
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Project Details</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Total Floor</strong>
                      <span>G+5</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>Benachity, Bhiringi</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>Apartment</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>Booking Complete</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Total Unit:</strong>
                      <span>15</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>2BHK:</strong>
                      <span>750 sq-ft</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>2BHK:</strong>
                      <span>900 sq-ft</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>3BHK:</strong>
                      <span>1100 sq-ft</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                Welcome to Pushpanjali Apartment, an elegant residential project situated in the heart of Durgapur. Designed to offer a blend of modern living and comfort, Pushpanjali is a thoughtfully planned apartment complex that caters to families seeking an enhanced lifestyle. This project emphasizes spacious 2BHK and 3BHK apartments, ideal for families of all sizes.
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <li>Open Balcony</li>
                  <li>24hr Power Backup</li>
                  <li>Parking Area</li>
                  <li>24hr Water Supply</li>
                  <li>Lift Facility</li>
                  <li>24hr Security</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                aria-controls="pills-video" aria-selected="true">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
                aria-selected="false">Floor Plans</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              
                <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1091207402001515%2F&show_text=false&width=476&t=0" width="476" height="476"  frameborder="0"
                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              <img src="assets/img/Ichche Dana/idfp.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div> -->
        <?php 
        include "includes/projectinquery.php";
        ?>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

<?php
include "includes/footer.php";
?>