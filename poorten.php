<!DOCTYPE html>
<html lang="nl">

<head>
	<?php require("gtag.php"); ?>
	<?php require("head.php"); ?>	
	
	<!-- SEO  -->
	<title>Poorten | Draaipoorten | Schuifpoorten | Automatisatie</title>
	<meta name="description" content="Een catalogus van onze poorten. Draaipoorten en schuifpoorten met of zonder automatisatie.">
	<link rel="canonical" href="https://poortcentrum.be/poorten" />
</head>

<body>

<!-- NAVIGATION  -->
<?php require("navigation.php"); ?>

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
            <h2 class="c-about__section__content__title">POORTEN</h2>
            <h3 class="c-description__info__subtitle">AUTOMATISATIE, TUINPOORTEN, AFSLUITINGEN, HEKKEN</h3>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                

				<p class="c-about__section__content__paragraph">
				Onze ervaring stelt ons in staat u de beste kwaliteit te garanderen en diverse
				ontwerpen aan te bieden. Wij produceren zowel minimalistische en moderne als
				klassieke retro modellen in <span style="font-weight:600;">100% aluminium</span>. De poorten worden volledig op maat
				geproduceerd met onze monoblok profielen die garant staan voor een mooie,
				elegante afwerking zonder zichtbare lasnaden. <p>

				<p class="c-about__section__content__paragraph">
				We hebben onze poorten onderverdeeld in 10 basis groepen waarvan de modellen individueel kunnen
				aangepast worden aan de smaak van de klant. Al onze poorten kunnen als een
				draaipoort, schuifpoort of vrijdragende poort geproduceerd worden. Indien u opteert
				voor een vrijdragende schuifpoort is deze steeds geproduceerd met een verborgen
				tandlat - deze word steeds in de onderbalk ingewerkt waardoor onze vrijdragende
				schuifpoorten zowel aan de binnen en de buitenzijde heel netjes afgewerkt zijn. 
				<br>
				<br>
				Onze manuele poorten zijn steeds voorzien van een dubbele kruk indien gewenst in de
				kleur van de poort een cilinderslot met 3 sleutels en grondgrendel. Een brievenbus
				console behoord eveneens tot de mogelijkheden zodat u een paal en brievenbus in 1
				hebt. De coating of lakken gebeurd altijd in 2 fasen en word 2 x gebakken op 195 °
				om een perfecte hechting te garanderen. Bijna alle kleuren behoren tot de
				mogelijkheid in structuurlak.
				</p>
				

                <div class="c-about__section__content__paragraph">
				Al onze poorten kunnen geautomatiseerd worden en zijn compatibel met de meeste
				garagedeur motors, zodat u met 1 afstandsbediening zowel uw poort als uw
				garagedeur kan bedienen. Onze automatisatie worden standaard met regelbare
				fotocellen en 2 remote controllers geïnstalleerd. Andere opties zijn onder andere:
                    <ul class="c-about__section__content__list">
                        <li>videofonie</li>
                        <li>parlefonie</li>
                        <li>codeklavier</li>
                        <li>gsm module</li>
                    </ul>
                </div>
                
                <p class="c-about__section__content__paragraph">
				Afsluitingen of Hekken kunnen in dezelfde uitvoering als de poorten worden gemaakt
				met stijlvolle verlichting op elke paal gecoat in dezelfde kleur zorgen ervoor dat u zelf
				‘s avonds optimaal kan genieten van uw tuin.</p>

                <p class="c-about__section__content__paragraph">
				Vanaf productie tot montage van het eindproduct gebeurd in eigen beheer dus
				zonder onderaannemers waardoor we onze kwaliteit kunnen garanderen aan de
				juiste prijs.</p>
            </div>
            <div class="c-about__gallery">

			<?php 
				$path = "img/aanbod/poorten/";
				// $dirs = array_filter(glob($dirname . '*'), 'is_dir');
				// print_r($dirs) ;
				$directories = glob($path . '*' , GLOB_ONLYDIR);
				
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
							<img class='c-about__card__img' src='".$cover_image_file_path."' alt='" . $alt_text . "' />
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

<?php require("php/form.php"); ?>

<?php require("footer.php"); ?>