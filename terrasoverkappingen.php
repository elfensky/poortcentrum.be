<!DOCTYPE html>
<html lang="nl">

<head>
	<?php require("php/gtag.php"); ?>
	<?php require("php/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/fancybox.min.css">

	<!-- SEO  -->
	<title>Terrasoverkappingen | Poolhouse | Tuin</title>
	<meta name="description" content="Verschillende soorten terrasoverkappingen, afdakken en poolhousen voor je tuin of veranda">
	<link rel="canonical" href="https://poortcentrum.be/terrasoverkappingen" />
</head>

<body>

	<!-- NAVIGATION  -->
	<?php require("php/navigation.php"); ?>

	<!-- header with cta  -->
	<header id="header" class="scrollify o-section c-header c-header--short c-header--about" data-section-name="home">
		<!-- image background with blue overlay -->
		<div class="o-section__background c-header__background">
			<div class="o-section__overlay"></div>
			<div class="o-section__texture c-header__texture--aanbod"></div>
			<div class="o-section__text">TERRASOVERKAPPINGEN</div>
		</div>
		<div class="o-padding-wrapper c-header__wrapper c-model__wrapper">
			<!-- <div class="c-model__header__wrapper"> -->
			<h1 class="c-model__title">TERRAS</h1>
			<!-- </div> -->
		</div>
	</header>

	<!-- terrasoverkappingen  -->
	<section id="terrasoverkappingen" class="o-section c-about__section" data-section-name="terrasoverkappingen">
		<!-- wrapper  -->
		<div class="o-padding-wrapper">
			<article class="c-about__section__content">
				<h2 class="c-about__section__content__title c-about__section__content__title--small">TERRAS-OVERKAPPINGEN</h>
					<h3 class="c-description__info__subtitle">POOLHOUSE & TUIN</h3>
					<div class="c-description__info__line">
						<div class="u-line"></div>
						<div class="u-line--short"></div>
					</div>
					<div class="c-about__section__content__text">
						<p class="c-about__section__content__paragraph">
							Terrasoverkappingen in aluminium draagconstructies met polycarbonaat platen of glas als dakbedekking transparant of zonwerend, als opties kan ledverlichting ingebouwd, worden en om het geheel compleet te maken bieden wij deze eveneens aan met glazen schuifwanden zodat u bij minder zonnige dagen op een comfortabele manier van het buitenleven kan blijven genieten.
						</p>
						<p class="c-about__section__content__paragraph">Een pool-house opgebouwd in dubbelwandige aluminium klik profielen van 100 – 200 of 400 mm hoog, al dan niet met <a href="schuifwanden.php">glazen schuifwanden</a>, onderhoud vrij waar het gezellig vertoeven is na een verfrissende duik, tevens leverbaar met geintegreerd berghok.</p>
					</div>
					<div class="c-about__gallery c-about__gallery--odd">
						<?php
						$dirname = "img/aanbod/terras/";
						// $images = scandir($dirname);
						$images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dirname));
						// shuffle($images);
						$ignore = array(".", "..");
						foreach ($images as $curimg) {
							if (!in_array($curimg, $ignore)) {
								echo "<a class='c-about__card' href='" . $dirname . $curimg . "' data-fancybox='terras'>
                                    <img class='c-about__card__img' src='" . $dirname . "thumb/" . $curimg . "' alt='terrasoverkapping" . strtok($curimg, '.') . "' />
                                    <div class='c-about__card__overlay'><h2 style='background-image: url(" . $dirname . $curimg . ");' class='c-about__card__title'>" . strtok($curimg, '.') . "</h2></div></a>";
							}
						}
						?>
					</div>
			</article>
		</div>
	</section>

	<?php require("php/form.php"); ?>

	<?php require("php/footer.php"); ?>