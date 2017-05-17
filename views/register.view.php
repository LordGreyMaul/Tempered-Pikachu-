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
            <h2>Register</h2>
            <div class="col-md-8 col-md-offset-2">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Script locations and closing tags -->
<?php include('main/footer.php');?>