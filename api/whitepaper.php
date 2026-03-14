<?php $pagetitle = 'Whitepaper'; ?>

<!DOCTYPE html>
<html lang="en">
<head><?php include('includes/head.php') ?></head>
<body>

    <?php include('includes/header.php') ?> 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height:40vh">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
		  <h1>Whitepaper</h1>
          <h2>Version: April 2022</h2>
        </div>
		
		<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
		
			<img src="../assets/img/animation2.gif" class="img-fluid" alt="">
			
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
		<div class="row">
          <div class="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <embed src="../assets/file/whitepaper_smartypay_april_2022.pdf#toolbar=0" type="application/pdf" width="100%" height="1440px"/>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->

  <?php 
        array_map( 
            function ($a) { return include($a);}, 
            array('includes/footer.php','includes/preloader.php','includes/foot.php')
        ); 
    ?>

</body>

</html>