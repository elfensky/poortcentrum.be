<!DOCTYPE html>
<html lang="nl">

<head>
	<?php require("php/gtag.php"); ?>
	<?php require("php/head.php"); ?>

	<!-- SEO  -->
	<title>Afsluitingen | Hekken | Tuinpoortens</title>
	<meta name="description" content="Verschillende soorten en modellen van aluminium afsluitingen en hekkens | Op maat gemaakt | Regio Booischot en omgeving">
	<link rel="canonical" href="https://poortcentrum.be/afsluitingen" />
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
			<div class="o-section__text">AFSLUITINGEN</div>
		</div>
		<div class="o-padding-wrapper c-header__wrapper c-model__wrapper">
			<!-- <div class="c-model__header__wrapper"> -->
			<h1 class="c-model__title" style="font-size: 8vw !important;">AFSLUITINGEN & HEKKEN</h1>
			<!-- </div> -->
		</div>
	</header>

	<!-- poorten  -->
	<section id="poorten" class="o-section c-about__section" data-section-name="poorten">
		<!-- wrapper  -->
		<div class="o-padding-wrapper">
			<article class="c-about__section__content">
				<h2 class="c-about__section__content__title">OMHEININGEN</h2>
				<div class="c-description__info__line">
					<div class="u-line"></div>
					<div class="u-line--short"></div>
				</div>
				<div class="c-about__section__content__text">
					<p class="c-about__section__content__paragraph">Op basis van onze poorten kunnen we voor u ook afsluitingen of hekken bouwen zodat u kan genieten van een samenhangende atmosfeer in uw tuin.
						Wij produceren zowel minimalistische en moderne als klassieke retro modellen in <span style="font-weight:600;">100% aluminium</span>.
						Deze worden volledig op maat geproduceerd op dezelfde kwalitatieve manier als onze poorten.
					</p>

					<p class="c-about__section__content__paragraph">
						Afsluitingen of Hekken kunnen in dezelfde uitvoering als de poorten worden gemaakt met stijlvolle verlichting op elke paal gecoat in dezelfde kleur zorgen ervoor dat u zelf ‘s avonds optimaal kan genieten van uw tuin.
					</p>
					<p class="c-about__section__content__paragraph">
						Vanaf productie tot montage van het eindproduct gebeurd in eigen beheer dus zonder onderaannemers waardoor we onze kwaliteit kunnen garanderen aan de juiste prijs. Leverbaar in talrijke gepoedercoate kleuren.
					</p>


				</div>
				<div class="c-about__gallery">

					<?php
					$path = "img/aanbod/poorten/";
					// $dirs = array_filter(glob($dirname . '*'), 'is_dir');
					// print_r($dirs) ;
					$directories = glob($path . '*', GLOB_ONLYDIR);

					foreach ($directories as $dir => $value) {
						$chunks = explode("/", $value);

						$gate_name = end($chunks);

						//get filename from cover_folder, create a full path
						$cover_image_file_name = array_values(array_diff(preg_grep('~\.(jpeg|jpg|png)$~', scandir($value . "/cover")), array('.', '..')))[0];
						$cover_image_file_path = $value . "/cover/" . "$cover_image_file_name";

						//remove extension from file_name using strtok, then replace all "-" with " "
						$alt_text = str_replace("-", " ", strtok($cover_image_file_name, '.'));


						print_r("<br><br>");
						echo "<a class='c-about__card' href='/poort/" . $gate_name . "'>
							<img class='c-about__card__img' src='" . $cover_image_file_path . "' alt='" . $alt_text . "' />
							<div class='c-about__card__overlay'>
									<h2 class='c-about__card__title'>" . $gate_name . "</h2>
							</div>
						</a>\n";
					}
					?>
				</div>
			</article>
		</div>
	</section>

	<?php require("php/seo.php"); ?>

	<?php require("php/form.php"); ?>

	<?php require("php/footer.php"); ?>