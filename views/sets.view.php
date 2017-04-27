<!-- Contains all header information to opening body tag -->
<?php include('main/head.php');?>
<!-- Fixed top nav -->
<?php include('partials/nav.php'); ?>
<!-- Page Content -->

<!-- Splash -->
<div class="parallax-window" data-parallax="scroll" data-image-src="/resources/img/background4.jpeg">
    <div class="container">
        <div class="row splash">
            <div class="col-md-12 text-center">
                <img src="/resources/img/sets.png" alt="Og Pokemon" class="center-block img-responsive">
                <h2>A simple to use tool for finding all Pokemon Cards</h2>
            </div>
        </div>
    </div>
</div>
<!-- End of splash -->

<!-- Page Content -->

<!-- list all sets section -->
<div class="container">
    <div class="row box">
        <div class="col-md-12">
            <?php foreach ($sets as $set) : ?>
                <div class="col-md-3" style="height: 200px; ">
                    <ul style="list-style: none;">
                        <li><h5><?= $set->getName(); ?></h5></li>
                        <li>Series: <?= $set->getSeries(); ?></li>
                        <li>Total Cards: <?= $set->getTotalCards(); ?></li>
                        <li>Release Date: <?= $set->getReleaseDate(); ?></li>
                    </ul>
                    <form method="post" action="singleset">
                        <div class="form-group">
                            <input type="text" style="display: none;" class="form-control"
                                   value="<?= $set->getName() ?>" name="id" id="id"
                            >
                        </div>
                        <button type="submit" style="width: 100%;" class="btn btn-primary center-block">View all Cards</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End of list all sets section -->

<!-- Parallax Image -->
<div class="parallax-window" data-parallax="scroll" data-image-src="/resources/img/background3.jpg">
    <div class="container">
        <div class="row boxinverse">
            <div class="col-md-12">
                <h1>The OG Pokemon TCG PokeBox</h1>
                <p>Fancy a monthly subscription box full of boosters and gifts? Of course you do and that's why we have designed one and put a very limited number of them together.</p>
                <p>You can have 4x Booster packs plus extra gifts including deck boxes, Card sleeves and annuals all at your finger tips every month to help you catch em all.</p>
                <a href="http://ogpokemon.com/og-tcg-pokebox/" target="_blank" class="btn btn-lg btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- End of Parallax image -->

<!-- Icon Bar -->
<div class="container">
    <div class="row box">
        <div class="col-md-12 text-center">
            <div class="col-md-3">
                <div class="thumbnail" style="background: none; border: none">
                    <img src="/resources/img/icon1.png" alt="Charmander OG pokemon | All Pokemon">
                    <div class="caption">
                        <h3>All Pokemon</h3>
                        <p>Every single Pokemon at the click of a button</p>
                        <p><a href="#" class="btn btn-primary" role="button">Search</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail" style="background: none; border: none">
                    <img src="/resources/img/icon3.png" alt="Charmander OG pokemon | All Pokemon">
                    <div class="caption">
                        <h3>Shop Pokemon</h3>
                        <p>Grab cards and boosters from our store</p>
                        <p><a href="http://www.ogpokemon.com" class="btn btn-primary" role="button">Shop</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail" style="background: none; border: none">
                    <img src="/resources/img/icon4.png" alt="Charmander OG pokemon | All Pokemon">
                    <div class="caption">
                        <h3>Read Pokemon</h3>
                        <p>Check out our blog for news and more</p>
                        <p><a href="#" class="btn btn-primary" role="button">Blog</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail" style="background: none; border: none">
                    <img src="/resources/img/icon2.png" alt="Charmander OG pokemon | All Pokemon">
                    <div class="caption">
                        <h3>Play Pokemon</h3>
                        <p>Play the online TCG game and Catch em all!</p>
                        <p><a href="http://www.pokemon.com/uk/pokemon-tcg/" target="_blank" class="btn btn-primary" role="button">Play</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of icon bar -->

<!-- End of page content-->

<!-- Script locations and closing tags -->
<?php include('main/footer.php');?>