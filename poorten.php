<!DOCTYPE html>
<html lang="nl">

<head>
	<?php require("php/gtag.php"); ?>
	<?php require("php/head.php"); ?>

	<!-- SEO  -->
	<title>Aluminium poorten | Draaipoorten | Schuifpoorten | Tuinpoorten</title>
	<meta name="description" content="Ontdek de aluminium poorten van Poortcentrum. Draaipoorten en schuifpoorten met of zonder automatisatie. In heel Vlaanderen.">
	<link rel="canonical" href="https://poortcentrum.be/poorten" />
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
			<div class="o-section__text">POORTEN</div>
		</div>
		<div class="o-padding-wrapper c-header__wrapper c-model__wrapper">
			<!-- <div class="c-model__header__wrapper"> -->
			<h1 class="c-model__title">POORTEN</h1>
			<!-- </div> -->
		</div>
	</header>

	<!-- poorten  -->
	<section id="poorten" class="o-section c-about__section" data-section-name="poorten">
		<!-- wrapper  -->
		<div class="o-padding-wrapper">
			<article class="c-about__section__content">
				<h2 class="c-about__section__content__title">ALUMINIUM POORTEN</h2>
				<h3 class="c-description__info__subtitle">AUTOMATISATIE, TUINPOORTEN, AFSLUITINGEN, HEKKENS, CARPORTS</h3>
				<div class="c-description__info__line">
					<div class="u-line"></div>
					<div class="u-line--short"></div>
				</div>
				<div class="c-about__section__content__text">


					<p class="c-about__section__content__paragraph">
						Onze ervaring stelt ons in staat u de beste kwaliteit te garanderen en diverse
						ontwerpen aan te bieden. Wij produceren zowel minimalistische en moderne als
						klassieke retro modellen in <span style="font-weight:600;">100% aluminium</span>. De aluminium poorten produceren we eveneens volledig op maat
						met onze profielen. Deze staan bijgevolg garant voor een mooie,
						elegante afwerking zonder zichtbare naden van las.
					<p>

					<p class="c-about__section__content__paragraph">
					<h2>10 basis groepen</h2><br>
					We hebben onze aluminium poorten onderverdeeld in 10 basis groepen waarvan we ook de modellen individueel kunnen
					aangepassen aan de smaak van onze klanten. Al onze poorten kunnen we produceren als zowel een
					draaipoort, als een schuifpoort of als een vrije poort. Indien u opteert
					voor een vrije schuifpoort, dan produceren we deze steeds met een verborgen
					tandlat. Deze werken we steeds in de onderbalk in. Daardoor kunnen we onze vrije
					schuifpoorten zowel aan de binnen- en de buitenzijde heel netjes afwerken.
					<br>
					<br>
					Onze manuele aluminium poorten zijn steeds voorzien van een dubbele kruk. Indien gewenst kunnen we eveneens in de
					kleur van de poort een cilinderslot met 3 sleutels en grondgrendel voorzien. Een brievenbus
					console behoort eveneens tot de mogelijkheden. Zo kunt u dus ook paal en brievenbus in 1
					hebben. De coating of het lakken gebeurt bij ons altijd in 2 fasen. Er wordt ook 2 x gebakken op 195 °.
					Zo kunnen we bijgevolg de perfecte hechting garanderen. Bijna alle kleuren behoren tot de
					mogelijkheid in lak.
					</p>


					<div class="c-about__section__content__paragraph">
						<h2>Extra opties</h2><br>
						Al onze aluminium poorten kunnen we eveneens automatiseren. Ze zijn ook compatibel met de meeste
						garagedeur motors, zodat u met 1 bediening vanop afstand zowel uw poort als de deur van uw garage
						kan bedienen. Onze automatisatie installeren we standaard met regelbare
						fotocellen en 2 bedieningen vanop afstand. Andere opties zijn onder andere:
						<ul class="c-about__section__content__list">
							<li>videofonie</li>
							<li>parlefonie</li>
							<li>klavier met cijfers</li>
							<li>toepassing via gsm</li>
						</ul>
					</div>
					<p class="c-about__section__content__paragraph">
					<h2>Voordelen van een aluminium poorten</h2><br>
					Het grootste voordeel van een aluminium poort is het gewicht. Aluminium is veel lichter dan staal, maar toch heel sterk. Door dit goede gewicht kan je een dergelijke poort makkelijk handmatig of automatisch gaan bedienen.
					Maar er zijn nog veel meer voordelen:
					<LI>Aluminium poorten gaan nooit roesten</LI>
					<LI>In zowel kleine als ook grote maten leverbaar en dat in verschillende kleuren</LI>
					<LI>Een aluminium poort oogt heel modern</LI>
					<LI>Degelijk en oersterk</LI>
					<LI>Een aluminium poort is nagenoeg vrij van onderhoud en heeft een lange levensduur</LI>
					<br>
					<p class="c-about__section__content__paragraph">
						<a href="afsluitingen.php">Afsluitingen</a> of hekkens kunnen we in dezelfde uitvoering als de poorten maken
						met stijlvolle verlichting op elke paal gecoat in dezelfde kleur zorgen ervoor dat u zelf
						‘s avonds optimaal kan genieten van uw tuin.
					</p>

					<p class="c-about__section__content__paragraph">
						Alles gebeurt bij ons in eigen beheer. Vanaf de productie tot de montage van het product. Wij werken dus
						zonder onderaannemers. Daardoor kunnen we onze kwaliteit garanderen aan de juiste prijs.</p>
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


						// 	print_r("<br><br>");
						echo "<a class='c-about__card' href='/poort/" . $gate_name . "'>
							<img class='c-about__card__img' src='" . $cover_image_file_path . "' alt='" . $alt_text . "' />
							<div class='c-about__card__overlay'>
									<h2 class='c-about__card__title'>" . $gate_name . "</h2>
							</div>
							<div class='c-about__card__cta'>
									<h2 class='c-about__card__subtitle'>Bekijk meer</h2>
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