<!-- Contains all header information to opening body tag -->
<?php include('main/head.php');?>

<!-- Fixed top nav -->
<?php include('partials/nav.php'); ?>
<!-- Page Content -->

<!-- Splash -->
<div class="parallax-window" data-parallax="scroll" data-image-src="/resources/img/searchbg.jpg">
    <div class="container">
        <div class="row splash">
            <div class="col-md-12 text-center">
                <img src="/resources/img/search.png" alt="Og Pokemon" class="center-block img-responsive">
                <h2>A simple to use tool for finding all Pokemon Cards</h2>
            </div>
        </div>
    </div>
</div>
<!-- End of splash -->

<!-- Page Content -->
<!-- Latest Cards -->
<div class="container">
    <div class="row box">
        <div class="col-md-12">
            <h2>Below are all the <?= $_POST['searchterm'] ?> Cards</h2>
            <?php foreach ($search as $carded) : ?>
                <div class="col-md-3">
                    <div class="thumbnail" style="min-height: 600px;">
                        <img src="<?= $carded->getImageUrl(); ?>" alt="<?= $carded->getName(); ?>"
                             class="img-responsive">
                        <div class="caption">
                            <h3><?= $carded->getName(); ?></h3>
                            <p><b>SubType: </b><?= $carded->getSubtype(); ?></p>
                            <p><b>SuperType: </b><?= $carded->getSupertype(); ?></p>
                            <p><b>Set:</b> <?= $carded->getSet() ?></p>
                            <p><b>Artist: </b><?= $carded->getArtist() ?></p>
                            <form method="post" action="card">
                                <div class="form-group">
                                    <input type="text" style="display: none;" class="form-control"
                                           value="<?= $carded->getId() ?>" name="id" id="id"
                                    >
                                </div>
                                <button type="submit" style="width: 100%;" class="btn btn-primary center-block">More info</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End of latest cards -->
<!-- End of page content -->

<!-- Script locations and closing tags -->
<?php include('main/footer.php');?>