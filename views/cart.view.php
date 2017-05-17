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

<div class="container" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-12">
            <h2>Your Cart</h2>
            <hr>
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr>
                        <td></td>
                        <td>Qty</td>
                        <td>Item</td>
                        <td>Unit Amount</td>
                        <td>Total</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center" style="color: red;"><span class="glyphicon glyphicon-remove"></span></td>
                    <td>1</td>
                    <td>Pokemon Sun and Moon Guardians Rising Booster Box</td>
                    <td>£104.99</td>
                    <td>£104.99</td>
                </tr>
                <tr>
                    <td class="text-center" style="color: red;"><span class="glyphicon glyphicon-remove"></span></td>
                    <td>1</td>
                    <td>Pokemon Sun and Moon XY Primal Clash</td>
                    <td>£124.99</td>
                    <td>£124.99</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Shipping:</td>
                    <td><b>£5.83</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total:</td>
                    <td><b>£245.83</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="#" class="btn btn-danger">Delete Cart</a></td>
                    <td><a href="#" class="btn btn-success">Pay Now</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Script locations and closing tags -->
<?php include('main/footer.php');?>