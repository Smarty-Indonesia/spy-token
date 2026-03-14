<?php
$url='https://api.coingecko.com/api/v3/simple/price?ids=smarty-pay&vs_currencies=idr%2Cusd&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true&include_last_updated_at=true';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// PENTING: Tambahkan User-Agent agar tidak kena 403
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// curl_close($ch);

if ($httpCode == 200) {
    $data = json_decode($response, true);
    // print_r($data);
} else {
    echo "Gagal mengambil data. Error Code: " . $httpCode;
}

$pagetitle = 'Home'; 
?>


<!DOCTYPE html>
<html lang="en">
<head><?php include('includes/head.php') ?></head>
<body>
    <?php include('includes/header.php') ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
	  <!--
		<video loop="" muted="" playsinline="" autoplay="" poster="../assets/img/hero-wide.jpg">
			<source src="../assets/img/2781013183.mp4" type="video/mp4"/>
		</video>-->
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Life</h1>
          <h2>Combination of harmony; Between an offline-online, B2B, B2C, C2C transactions, POS retail systems, advertising, and NFT arcade.</h2>
          <h2>Today's Price: <?php echo "USD ".number_format(($data['smarty-pay']['usd']), 4, ".", ",") ?> &#126; <?php echo "IDR ".number_format(($data['smarty-pay']['idr']), 2, ".", ",") ?></h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="buy-spy" class="btn-get-started scrollto">Buy SPY</a>
            <a href="../assets/video/to_become_legend.mp4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
		
			<img src="../assets/img/animation.gif" class="img-fluid" alt="">
			
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
			<a href="https://bscscan.com/token/0x17fd3caa66502c6f1cbd5600d8448f3af8f2aba1/" target="_blank">
				<img src="../assets/img/partners/bcscan.png" class="img-fluid" alt="BCScan">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
			<a href="https://techrate.org/" target="_blank">
				<img src="../assets/img/partners/techrate.png" class="img-fluid" alt="TechRate">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://coinmarketcap.com/" target="_blank">
				<img src="../assets/img/partners/coinmarketcap.png" class="img-fluid" alt="Coin Market Cap">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://pancakeswap.finance/swap?outputCurrency=0x01872b5f0003f6e209b9ba4d0045487bd6f67ac0" target="_blank">
				<img src="../assets/img/partners/pancakeswap.png" class="img-fluid" alt="Pancake Swap">
			</a>
          </div>
		</div>
		
		<div class="row" data-aos="zoom-in">
          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.digiassetindo.com/" target="_blank">
				<img src="../assets/img/partners/digiasset.jpg" class="img-fluid" alt="Digiasset">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.hotbit.io/" target="_blank">
				<img src="../assets/img/partners/hotbit.png" class="img-fluid" alt="Hotbit">
			</a>
          </div>
		  
          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.cointiger.com/" target="_blank">
				<img src="../assets/img/partners/cointiger.png" class="img-fluid" alt="Cointiger">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://coinsbit.io/" target="_blank">
				<img src="../assets/img/partners/coinsbit.png" class="img-fluid" alt="Coinsbit">
			</a>
          </div>
		</div>
		
		<div class="row" data-aos="zoom-in">  
          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
			<a href="https://www.coingecko.com/" target="_blank">
				<img src="../assets/img/partners/coingecko.png" class="img-fluid" alt="Coin Gecko">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://latoken.com/" target="_blank">
				<img src="../assets/img/partners/latoken.png" class="img-fluid" alt="LaToken">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.bkex.com/" target="_blank">
				<img src="../assets/img/partners/bkex.png" class="img-fluid" alt="BKEX">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.bitforex.com/" target="_blank">
				<img src="../assets/img/partners/bitforex.png" class="img-fluid" alt="Bitforex">
			</a>
          </div>
		</div>
		
		<div class="row" data-aos="zoom-in">
          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.certik.com/" target="_blank">
				<img src="../assets/img/partners/certik.png" class="img-fluid" alt="Certik">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://nomics.com/" target="_blank">
				<img src="../assets/img/partners/nomics.png" class="img-fluid" alt="Nomics">
			</a>
          </div>
		  
          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://bitkeep.org/" target="_blank">
				<img src="../assets/img/partners/bitkeep.png" class="img-fluid" alt="Bitkeep">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.xt.com/" target="_blank">
				<img src="../assets/img/partners/xt.jpg" class="img-fluid" alt="XT">
			</a>
          </div>
		</div>
		
		<div class="row" data-aos="zoom-in">
          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.digifinex.com/" target="_blank">
				<img src="../assets/img/partners/digifinex.png" class="img-fluid" alt="DigiFinex">
			</a>
          </div>

          <div class="col-lg-3 col-md-2 col-12 d-flex align-items-center justify-content-center">
            <a href="https://www.mexc.com/" target="_blank">
				<img src="../assets/img/partners/mexc.png" class="img-fluid" alt="Mexc">
			</a>
          </div>
        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= 
	
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>All About <strong>SPY</strong></h3>
			  <!--
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>-->
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> What is SPY? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      SPY is Smarty Pay. A utility token from Indonesia that has many underlined projects.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Is Spy scam? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      SPY has proved to be a strong token project.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Is it safe to buy SPY on SPY's defi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Liquidity pool of SPY is on PancakeSwap, so it is save to buy SPY on SPY defi.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("../assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="../assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Tokenomy</h3>
			<!--
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>-->

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Presale <i class="val">5%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Charity <i class="val">5%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Stable Asset <i class="val">5%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Development & Infra Structure <i class="val">30%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
			  
			  <div class="progress">
                <span class="skill">Mining & Stacking <i class="val">10%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
			  
			  <div class="progress">
                <span class="skill">Marketing <i class="val">10%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
			  
			  <div class="progress">
                <span class="skill">Burnt <i class="val">35%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= 
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
		  <div class="container" data-aos="zoom-in">
        <div class="row">
			<div class="col-lg-9 text-center text-lg-start">
				<h3>Smart Contract</h3>
				<p id="smart-contract" class="word-wrap"> 0x17fd3cAa66502C6F1CbD5600D8448f3aF8f2ABA1</p>
			</div>
			<div class="col-lg-3 cta-btn-container text-center">
				<a onclick="CopyToClipboard()" class="cta-btn align-middle" href="#cta">Copy</a>
			</div>
			<script>
				function CopyToClipboard()
					{
					var r = document.createRange();
					r.selectNode(document.getElementById("smart-contract"));
					window.getSelection().removeAllRanges();
					window.getSelection().addRange(r);
					document.execCommand('copy');
					window.getSelection().removeAllRanges();
					}
			</script>
			
			
			<!--
			<p class="word-wrap" id="smart-contract-tokie">0x01872b5f0003f6E209B9BA4d0045487Bd6f67AC0</p>
			<button class="cta-btn align-middle">
				<a onclick="CopyToClipboard1()">Copy Smart Contract</a>
			</button>
			<script>
				function CopyToClipboard1()
					{
					var r = document.createRange();
					r.selectNode(document.getElementById("smart-contract-tokie"));
					window.getSelection().removeAllRanges();
					window.getSelection().addRange(r);
					document.execCommand('copy');
					window.getSelection().removeAllRanges();
					}
			</script>
			-->
			
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Media Partners</h2>
        </div>
        <div class="row text-center">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/digitaljournal.png" style="width: 200px"></div>
              <h5><a href="https://www.digitaljournal.com/" target="_blank">www.digitaljournal.com</a></h5>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/benzinga.png" style="width: 200px"></div>
              <h4><a href="https://www.benzinga.com/" target="_blank">www.benzinga.com</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/newsbtc.png" style="width: 200px"></div>
              <h4><a href="https://www.newsbtc.com/" target="_blank">www.newsbtc.com</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/bitcoinist.png" style="width: 200px"></div>
              <h4><a href="https://bitcoinist.com/" target="_blank">bitcoinist.com</a></h4>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/yahoonews.png" style="width: 200px"></div>
              <h4><a href="https://news.yahoo.com/" target="_blank">news.yahoo.com</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/yahoofinance.png" style="width: 200px"></div>
              <h4><a href="https://finance.yahoo.com/" target="_blank">finance.yahoo.com</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/utoday.svg" style="width: 200px"></div>
              <h4><a href="https://u.today/" target="_blank">u.today</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/coinspeaker.png" style="width: 200px"></div>
              <h5><a href="https://www.coinspeaker.com/" target="_blank">www.coinspeaker.com</a></h5>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/bloomberg.png" style="width: 200px"></div>
              <h5><a href="https://www.bloomberg.com/" target="_blank">www.bloomberg.com</a></h5>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/ambcrypto.png" style="width: 200px"></div>
              <h4><a href="https://ambcrypto.com/" target="_blank">ambcrypto.com</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/zycrypto.png" style="width: 200px"></div>
              <h4><a href="https://zycrypto.com/" target="_blank">zycrypto.com</a></h4>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/nasdaq.svg" style="width: 200px"></div>
              <h4><a href="https://www.nasdaq.com/" target="_blank">www.nasdaq.com</a></h4>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../assets/img/media/marketwatch.svg" style="width: 200px"></div>
              <h5><a href="https://www.marketwatch.com/" target="_blank">www.marketwatch.com</a></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

  </main>
  <!-- End #main -->

  <?php 
        array_map( 
            function ($a) { return include($a);}, 
            array('includes/footer.php','includes/preloader.php','includes/foot.php')
        ); 
    ?>
</body>

</html>