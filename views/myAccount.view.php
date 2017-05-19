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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>User Account Page</h1>
        </div>
    </div>
    <!-- Orders table -->
    <div class="row">
        <div class="col-md-12">
        <h2>Orders</h2>
        <hr>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <td>Order No</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Picked</td>
                    <td>Shipped</td>
                    <td>View</td>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>10001</td>
                <td>Pokemon Booster Box ......</td>
                <td>£50</td>
                <td><span class="glyphicon glyphicon-ok"></span></td>
                <td><span class="glyphicon glyphicon-remove"></span></td>
                <td><a href="#">View order</a></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    <!-- End of Orders table -->

    <!-- Details -->
    <div class="row">
        <div class="col-md-12">
            <h2>Details</h2>
            <hr>
            <div class="col-md-6">
                <p>Name: Ash Kethum</p>
                <p>Email: Ash@pokemon.com</p>
                <p>Address: <br>100 Roller drive <br> Open access <br> Somewhere <br> Portsmouth <br> Hampshire <br> UK <br> PO6 77N</p>
                <a href="#" class="btn btn-success"> Change Shipping address</a>
            </div>
        </div>
    </div>
</div>

<!-- Script locations and closing tags -->
<?php include('main/footer.php');?>