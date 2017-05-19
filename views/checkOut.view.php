<!-- Contains all header information to opening body tag -->
<?php include('main/head.php');?>

<!-- Fixed top nav -->
<?php include('partials/nav.php'); ?>

<!-- Splash -->
<div class="parallax-window" data-parallax="scroll" data-image-src="/resources/img/background1.jpg">
    <div class="container">
        <div class="row splash">
            <div class="col-md-12 text-center">
                <img src="/resources/img/logo.png" alt="Og Pokemon" class="center-block img-responsive">
                <h2>Search for all the pokemon cards you will ever need</h2>
            </div>
        </div>
    </div>
</div>
<!-- End of splash -->

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo \App\Core\Config::get(['stripe/publishable_key']); ?>"
          data-description="Access for a year"
          data-amount="5000"
          data-locale="auto"></script>
</form>