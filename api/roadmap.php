<?php $pagetitle = 'Roadmap'; ?>

<!DOCTYPE html>
<html lang="en">
<head><?php include('includes/head.php') ?></head>
<body>

    <?php include('includes/header.php') ?>
    <?php include('includes/breadcrumb.php') ?>
  

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
		    <div class="row">
          <div class="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <img src="../assets/img/roadmap/roadmap_2022.jpg" type="img/jpg" width="100%"/>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <img src="../assets/img/roadmap/roadmap_2023.jpg" type="img/jpg" width="100%"/>
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