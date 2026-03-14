<?php $pagetitle = 'Disclaimer'; ?>

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
          <h1>Disclaimer</h1>
          <h2>Last updated: April 2022</h2>
        </div>
		<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
		
			<img src="../assets/img/animation2.gif" class="img-fluid" alt="">
			
        </div>
      </div>
    </div>

  </section><!-- End FAQ -->

  <main id="main">

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
		<div class="section-title">
          <h2>LEGAL DISCLAIMER</h2>
		</div>

		<div class="row">
			<div class="col-lg-12 text-center text-lg-start">
				<p>PLEASE READ THE ENTIRETY OF THIS "LEGAL DISCLAIMER" SECTION CAREFULLY.</p>
				<p>NOTHING HEREIN CONSTITUTES LEGAL, FINANCIAL, BUSINESS OR TAX ADVICE AND YOU SHOULD CONSULT YOUR OWN LEGAL, FINANCIAL, TAX OR OTHER PROFESSIONAL ADVISOR(S) BEFORE ENGAGING IN ANY ACTIVITY IN CONNECTION HEREWITH.</p>
				<p>NEITHER SMARTY SEJAHTERA INDONESIA LLC (THE COMPANY), ANY OF THE PROJECT TEAM MEMBERS (THE SMARTY TEAM) WHO HAVE WORKED ON THE SPY PLATFORM (AS DEFINED HEREIN) OR PROJECT TO DEVELOP THE SPY PLATFORM IN ANY WAY WHATSOEVER, ANY DISTRIBUTOR/VENDOR OF SMARTY TOKENS (THE DISTRIBUTOR), NOR ANY SERVICE PROVIDER SHALL BE LIABLE FOR ANY KIND OF DIRECT OR INDIRECT DAMAGE OR LOSS WHATSOEVER WHICH YOU MAY SUFFER IN CONNECTION WITH ACCESSING THE PAPER, DECK OR MATERIAL RELATING TO SMARTY TOKEN (THE TOKEN DOCUMENTATION) AVAILABLE ON THE WEBSITE AT: https://spy-token.io/ (THE WEBSITE, INCLUDING ANY SUB-DOMAINS THEREON) OR ANY OTHER WEBSITES OR MATERIALS PUBLISHED BY THE COMPANY.</p>			
			</div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <?php 
        array_map( 
            function ($a) { return include($a);}, 
            array('includes/footer.php','includes/preloader.php','includes/foot.php')
        ); 
    ?>

</body>

</html>