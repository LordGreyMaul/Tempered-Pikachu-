<!-- Contains all header information to opening body tag -->
<?php include('main/head.php');?>

<!-- Fixed top nav -->
<?php include('partials/nav.php'); ?>
<!-- Page Content -->

<!-- Splash -->
<div class="parallax-window" data-parallax="scroll" data-image-src="/resources/img/background1.jpg">
	<div class="container">
		<div class="row splash">
			<div class="col-md-12 text-center">
				<img src="/resources/img/logo.png" alt="Og Pokemon" class="center-block img-responsive">
				<h2>A simple to use tool for finding all Pokemon Cards</h2>
			</div>
		</div>
	</div>
</div>
<!-- End of splash -->

<!-- Welcome Box -->
<div class="container">
	<div class="row box">
		<div class="col-md-12">
			<div class="col-md-6">
				<img src="/resources/img/home.png" alt="Pikachu Og Pokemon" class="center-block img-responsive">
			</div>
			<div class="col-md-6">
				<h1>Welcome to the OG Pokedex</h1>
				<p>Ever need a card put not sure which version or from what set to take it?
				Be it a Steam Siege Machamp or the Sun and Moon version, this site will
				give you the tools to work out which one not only looks better but also
				which one will player better.</p>
				<p>Bought to you by OG Pokemon this very website will help you out with your collection
				and give you maximum exposure to all the wonderful Pokemon Cards of days gone by</p>
				<p>This whole site is free to use and enjoy. So good luck trainers and welcome to the OG Pokedex!
				We hope you enjoy your stay and should you find any issues or troubles whilst browsing the site please
				get in touch. Now go catch em all!</p>
			</div>
		</div>
	</div>
</div>
<!-- End of welcome box -->

<!-- Search Box -->
<div class="parallax-window" data-parallax="scroll" data-image-src="/resources/img/background2.jpg">
	<div class="container">
		<div class="row box">
			<div class="col-md-12 text-center">
				<h1>Search for your Pokemon</h1>
				<form method="post" action="search" style="margin-top: 45px;">
					<div class="col-md-10">
						<div class="form-group">
							<input type="text" name="searchterm" id="searchterm" class="form-control" placeholder="Search by name">
						</div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End of Search -->

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

<!-- Parallax Image -->
<div class="parallax-window" data-parallax="scroll" data-image-src="/resources/img/background3.jpg">
</div>
<!-- End of Parallax image -->

<!-- Latest Cards -->
<div class="container">
	<div class="row box">
		<div class="col-md-12">
			<h2>Latest Cards</h2>
			<?php foreach ($cards as $carded) : ?>
				<div class="col-md-3">
					<div class="thumbnail" style="min-height: 525px;">
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

<!-- End of Page Content -->

<!-- Script locations and closing tags -->
<?php include('main/footer.php');?>


