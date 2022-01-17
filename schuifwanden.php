<!DOCTYPE html>
<html lang="nl">

<head>
	<?php require("php/gtag.php"); ?>
	<?php require("php/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/fancybox.min.css">

	<!-- SEO  -->
	<title>Schuifwanden | Glas | Aluminium | Poortcentrum</title>
	<meta name="description" content="Grote glazen schuifwanden voor je terras, tuin of veranda, met of zonder afdak en overkapping">
	<link rel="canonical" href="https://poortcentrum.be/schuifwanden" />
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
			<div class="o-section__text">SCHUIFWANDEN</div>
		</div>
		<div class="o-padding-wrapper c-header__wrapper c-model__wrapper">
			<!-- <div class="c-model__header__wrapper"> -->
			<h1 class="c-model__title">SCHUIF-WANDEN</h1>
			<!-- </div> -->
		</div>
	</header>

	<!-- schuifwanden  -->
	<section id="schuifwanden" class="o-section c-about__section" data-section-name="schuifwanden">
		<!-- wrapper  -->
		<div class="o-padding-wrapper">
			<article class="c-about__section__content">
				<h2 class="c-about__section__content__title c-about__section__content__title--small">SCHUIFWANDEN</h2>
				<div class="c-description__info__line">
					<div class="u-line"></div>
					<div class="u-line--short"></div>
				</div>
				<div class="c-about__section__content__text">
					<p class="c-about__section__content__paragraph">
						Al dan niet in combinatie met een <a href="terrasoverkappingen.php">terrasoverkapping</a> leveren wij sinds kort ook glazen schuifwanden aan, steeds als maatwerk met 10 mm gehard veiligheidsglas, regelbare wielen met kogellagers en “meenemers” zodat u met 1 glaspaneel uw volledige wand open en dicht kan schuiven, in optie kunnen er ook tochtborstels gemonteerd worden. Elke ral kleur zonder meerprijs.
					</p>
				</div>

				<div class="c-about__gallery c-about__gallery--odd">
					<?php
					$dirname = "img/aanbod/schuifwanden/";
					// $images = scandir($dirname);
					$images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dirname));
					// shuffle($images);
					$ignore = array(".", "..");
					foreach ($images as $curimg) {
						if (!in_array($curimg, $ignore)) {
							echo "<a class='c-about__card' href='" . $dirname . $curimg . "' data-fancybox='doors'>
                                    <img class='c-about__card__img' src='" . $dirname . "thumb/" . $curimg . "' alt='schuifwand" . strtok($curimg, '.') . "' />
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