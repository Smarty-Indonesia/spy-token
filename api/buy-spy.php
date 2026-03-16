<?php 
$url='https://api.coingecko.com/api/v3/coins/smarty-pay?localization=false&tickers=true&market_data=false&community_data=false&developer_data=false&sparkline=false';

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


$pagetitle = 'Buy SPY'; 
?>

<!DOCTYPE html>
<html lang="en">
<head><?php include('includes/head.php') ?>
  <style>
    .services .icon-box:hover a { background: #8c8a8a; }
  </style>
</head>
<body>

    <?php include('includes/header.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height:40vh">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Buy SPY</h1>
        </div>
		
		<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
		
			<img src="../assets/img/animation2.gif" class="img-fluid" alt="">
			
        </div>
      </div>
    </div>

  </section><!-- End FAQ -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Your Options to Buy SPY</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="../assets/img/buy/latoken.png" style="width:250px; border-radius:20px">
              <h4><a href="https://latoken.com/" target="_blank">latoken.com</a></h4>
              <p>Today's Price: <?php echo "USD ".number_format(($data['tickers']['2']['converted_last']['usd']), 4, ".", ",") ?></p>
              <p>Volume: <?php echo number_format(($data['tickers']['3']['volume']), 2, ".", ",") ?> ~ <?php echo "USD ".number_format(($data['tickers']['2']['converted_volume']['usd']), 2, ".", ",") ?></p>
			        <a href="https://latoken.com/exchange/SPY_USDT" target="_blank" class="btn-get-started scrollto">Buy | USDT</a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="../assets/img/buy/bkex.png" style="width:250px; border-radius:20px">
              <h4>www.bkex.com </h4> 
              <p style="font-style: italic">(update: off since 2023)</p>
              <!-- <p>Today's Price: <?php echo "USD ".number_format(($data['tickers']['1']['converted_last']['usd']), 4, ".", ",") ?></p>
              <p>Volume: <?php echo number_format(($data['tickers']['1']['volume']), 2, ".", ",") ?> ~ <?php echo "USD ".number_format(($data['tickers']['1']['converted_volume']['usd']), 2, ".", ",") ?></p> -->
			        <a class="btn-disabled scrollto">Buy | USDT</a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="../assets/img/buy/cointiger.png" style="width:250px; border-radius:20px">
              <h4>www.cointiger.com</h4>
              <p style="font-style: italic">(update: off since 2024)</p>
              <!-- <p>Today's Price: <?php echo "USD ".number_format(($data['tickers']['3']['converted_last']['usd']), 4, ".", ",") ?></p>
              <p>Volume: <?php echo number_format(($data['tickers']['3']['volume']), 2, ".", ",") ?> ~ <?php echo "USD ".number_format(($data['tickers']['3']['converted_volume']['usd']), 2, ".", ",") ?></p> -->
			        <a class="btn-disabled scrollto">Buy | USDT</a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="../assets/img/buy/xt.jpg" style="width:250px; border-radius:20px">
              <h4><a href="https://www.xt.com/" target="_blank">xt.com</a></h4>
			        <a href="https://www.xt.com/en/trade/spy_usdt" target="_blank" class="btn-get-started scrollto">Buy | USDT</a>
            </div>
          </div>
        </div>
		
		    <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="../assets/img/buy/mexcglobal.png" style="width:250px; border-radius:20px">
              <h4><a href="https://www.mexc.com/" target="_blank">www.mexc.com</a></h4>
			        <a href="https://www.mexc.com/exchange/BTC_USDT" target="_blank" class="btn-get-started scrollto">Buy | USDT</a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="../assets/img/buy/hotbit.png" style="width:250px; border-radius:20px">
              <h4>www.hotbit.io</h4>
              <p style="font-style: italic">(update: off since 2023)</p>
			        <a class="btn-disabled scrollto">Buy | USDT</a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <img src="../assets/img/buy/bitforex.png" style="width:250px; border-radius:20px">
              <h4>www.bitforex.com</h4>
              <p style="font-style: italic">(update: off since 2024)</p>
			        <a class="btn-disabled scrollto">Buy | USDT</a>
            </div>
          </div>
		      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <img src="../assets/img/buy/coinsbit.png" style="width:250px; border-radius:20px">
              <h4>www.coinsbit.io</a></h4>
              <a class="btn-disabled scrollto">Buy | USDT</a>
              <a class="btn-disabled scrollto">Buy | BNB</a>
            </div>
          </div>
        </div>

		    <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="../assets/img/buy/digifinex.png" style="width:250px; border-radius:20px">
              <h4><a href="https://www.digifinex.com/en-ww" target="_blank">digifinex.com</a></h4>
			        <a href="https://www.digifinex.com/en-ww/trade/USDT/SPY" target="_blank" class="btn-get-started scrollto">Buy | USDT</a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="../assets/img/buy/digiasset.jpg" style="width:250px; border-radius:20px">
              <h4>www.digiassetindo.com</h4>
              <p style="font-style: italic">(update: off since 2023)</p>
              <a class="btn-disabled scrollto">Buy | IDR</a>
              <a class="btn-disabled scrollto">Buy | USDT</a>
            </div>
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