<!-- Contains all header information to opening body tag -->
<?php include('main/head.php');?>
<!-- Fixed top nav -->
<?php include('partials/nav.php'); ?>
<!-- Page Content -->

<!-- Splash -->
<div class="parallax-window" data-parallax="scroll" data-image-src="/resources/img/background7.jpg">
    <div class="container">
        <div class="row splash">
            <div class="col-md-12 text-center">
                <img src="/resources/img/about.png" alt="Og Pokemon" class="center-block img-responsive">
                <h2>A simple to use tool for finding all Pokemon Cards</h2>
            </div>
        </div>
    </div>
</div>
<!-- End of splash -->

<!-- Page Content -->

<!-- Card section -->
<div class="container">
    <div class="row box">
        <div class="col-md-12">
            <div class="col-md-8">
                <div class="col-md-8">
                    <img src="<?= $card->getImageUrl(); ?>" alt="<?= $card->getName(); ?>"
                         class="img-responsive">
                </div>
                <div class="col-md-4">
                    <h4><b>SubType: </b><?= $card->getSubtype(); ?></h4>
                    <h4><b>SuperType: </b><?= $card->getSupertype(); ?></h4>
                    <h4><b>Set:</b> <?= $card->getSet() ?></h4>
                    <h4><b>Artist: </b><?= $card->getArtist() ?></h4>
                    <h4><b>National Pokedex Number: </b><?= $card->getNationalPokedexNumber() ?></h4>
                    <h4><b>Set Code: </b><?= $card->getSetCode(); ?></h4>
                    <h4><b>Series: </b><?= $card->getSeries(); ?></h4>
                    <h4><b>Rarity: </b><?= $card->getRarity(); ?></h4>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <?php include ('partials/sidebar.php');?>
            </div>
        </div>
    </div>
</div>
<!-- End of Card section -->

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