<!DOCTYPE html>
<html lang="nl">

<head>
	<?php require("gtag.php"); ?>
	<?php require("head.php"); ?>	
	<link rel="stylesheet" type="text/css" href="css/fancybox.min.css">
	
	<!-- SEO  -->
	<title>Carports | Gebogen | Vlak | Zijwanden</title>
	<meta name="description" content="Verschillende soorten en modellen van carports, een overdakking voor je auto, terras of veranda">
	<link rel="canonical" href="https://poortcentrum.be/carports" />
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
        <div class="o-section__text">CARPORTS</div>
	</div>
	<div class="o-padding-wrapper c-header__wrapper c-model__wrapper">
        <!-- <div class="c-model__header__wrapper"> -->
            <h1 class="c-model__title">CARPORTS</h1>
        <!-- </div> -->
    </div>
</header>

<!-- carports  -->
<section id="carports" class="o-section c-about__section" data-section-name="carports">
    <!-- wrapper  -->
    <div class="o-padding-wrapper">
        <article class="c-about__section__content">
            <h2 class="c-about__section__content__title">CARPORTS</h2>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                <p class="c-about__section__content__paragraph">Tevens zijn wij gespecialiseerd in carports deze zijn leverbaar met vlak of gebogen
				dak, met gesloten steeldek of meerwandig polycarbonaat lichtdoorlatend dak.</p>

				<p class="c-about__section__content__paragraph">
				Al onze carports worden op maat gemaakt en zijn leverbaar als aanbouw of vrijstaande
				constructie, De hemelwater afvoerbuizen worden steeds in de palen geïntegreerd.</p>

				<p class="c-about__section__content__paragraph">Indien gewenst kunnen er zijwanden ingewerkt worden volgens model van de
				poorten of met hout, geintegreerd berghok met afsluitbare deur behoord tevens tot
				de mogelijkheden. Ledstrips met bewegingsmelder kunnen geïnstalleerd worden.</p>
            </div>
            <div class="c-about__gallery c-about__gallery--odd">
            <?php
                $dirname = "img/aanbod/carports/";
                // $images = scandir($dirname);
                $images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dirname));
                $ignore = Array(".", "..");
                foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                        echo "<a class='c-about__card' href='".$dirname.$curimg."' data-fancybox='cars'>
                                    <img class='c-about__card__img' src='".$dirname."thumb/".$curimg."' alt='carport" . strtok($curimg, '.') . "' />
                                    <div class='c-about__card__overlay'><h2 style='background-image: url(".$dirname.$curimg.");' class='c-about__card__title'>" . strtok($curimg, '.') . "</h2></div></a>";
                    }
                }
            ?>
            </div>
        </article>
    </div>
</section>

<?php require("php/form.php"); ?>

<?php require("footer.php"); ?>