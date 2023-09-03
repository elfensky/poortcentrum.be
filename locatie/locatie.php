<!DOCTYPE html>
<html lang="nl">

<head>
	<?php $type = htmlspecialchars($_GET["type"]);
	// $path = "../img/aanbod/poorten/" . $type;

	// if (!is_dir($path)) {
	// 	header('Location: /404');
	// }
	?>

	<?php require("../php/gtag.php"); ?>

	<!-- GENERICS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- FAVICONS  -->
	<!-- generics -->
	<link rel="icon" href="../img/favicons/favicon-32.png" sizes="32x32">
	<link rel="icon" href="../img/favicons/favicon-128.png" sizes="128x128">
	<link rel="icon" href="../img/favicons/favicon-192.png" sizes="192x192">
	<!-- Android -->
	<link rel="shortcut icon" href="../img/favicons/favicon-196.png" sizes="196x196">
	<!-- iOS -->
	<link rel="apple-touch-icon" href="../img/favicons/favicon-152.png" sizes="152x152">
	<link rel="apple-touch-icon" href="../img/favicons/favicon-167.png" sizes="167x167">
	<link rel="apple-touch-icon" href="../img/favicons/favicon-180.png" sizes="180x180">

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../fontawesome-pro-5.15.4-web/css/all.min.css">
	<!-- STYLE -->
	<link rel="stylesheet" type="text/css" href="../css/fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css" />

	<!-- SEO  -->
	<title><?php echo ucfirst($type) ?> | Aluminium Poort | Poortcentrum</title>
	<meta name="description" content="Locatie pagina van <?php echo ucfirst($type) ?>.">
	<link rel="canonical" href="https://poortcentrum.be/locatie/<?php echo $type ?>" />
	<meta name="keywords" content="draaipoorten, schuifpoorten, schuttingen, poorten, aluminium poorten">
	<meta http-equiv="content-language" content="nl-be">
</head>

<body>

	<!-- NAVIGATION  -->
	<?php require("../php/navigation.php"); ?>

	<!-- header with cta  -->
	<header id="header" class="scrollify o-section c-header c-header--short c-header--about" data-section-name="home">
		<!-- image background with blue overlay -->
		<div class="o-section__background c-header__background">
			<div class="o-section__overlay"></div>
			<div class="o-section__texture c-header__texture--aanbod"></div>
			<div class="o-section__text"><?php echo strtoupper($type) ?></div>
		</div>
		<div class="o-padding-wrapper c-header__wrapper c-model__wrapper">
			<h1 class="c-model__title"><?php echo ucfirst($type) ?></h1>
		</div>
	</header>

	<!-- location-content  -->
	<section id="location" class="o-section c-about__section" data-section-name="location">
		<!-- wrapper  -->
		<div class="o-padding-wrapper">
			<article class="c-about__section__content">
				<h2 class="c-about__section__content__title">Regio <?php echo $type ?></h2>
				<div class="c-description__info__line">
					<div class="u-line"></div>
					<div class="u-line--short"></div>
				</div>
				<div class="c-about__section__content__text">
					<h2> Poorten <?php echo ucfirst($type) ?>? </h2><br>

					Ben je op zoek naar een bedrijf regio <?php echo ucfirst($type) ?> met specialisatie en ervaring in <strong> aluminium poorten of schuifpoorten</strong>. Zoek dan niet verder. Wij hebben verschillende jaren ervaring en een <strong> zeer goed team van medewerkers </strong>. We helpen u daarom zeer graag verder met uw project in de regio van <strong> <?php echo ucfirst($type) ?> </strong>. <strong> Poorten </strong> verkopen en de installatie ervan is onze tweede natuur. Wij werken met de kwaliteitsfabrikant <a class="u-link" href=" https://www.niceforyou.com/nl-be">Nice</a>. <br>
					Benieuwd naar ons leuk gamma aan <strong> automatische poorten, schuifpoorten en carports</strong>? Onze aanpak en wat waarin we verschillen van de concurrentie. Lees dan zeker deze pagina! <br>

					Als u graag uw huis beter wil beveiligen, kies dan voor een <strong> aluminium poort of aluminium schuifpoort van Poortcentrum </strong>. We doen een groot deel van zowel <strong> Vlaams-Brabant, Antwerpen als limburg </strong>. <br>
					<br>
					<h2>Voordelen van een aluminium poort </h2><br>
					Als je voor een poort of schuifpoort van <strong> Poortcentrum </strong> kiest. Dan brengt dit <strong> heel wat voordelen </strong> met zich mee. We lichten hieronder graag enkele voorbeelden toe: <br><br>

					<li>Een automatische poort zorgt voor <strong> extra gemak in bediening </strong>. U kunt dus rustig in uw auto blijven zitten. Dit gaat sneller en verloopt eveneens veiliger. </li>
					<li><strong> Schuifpoorten nemen weinig ruimte </strong> in beslag. De aluminium poort schuift horizontaal in en uit en klapt dus niet op of dicht. </li>
					<li>Onze aluminium poorten zijn <strong> stijlvol en luxueus </strong>. Het geeft een extra dimensie aan uw woning of fabriek. </li>
					<li><strong> Hou dieven op een afstand </strong>. Een aluminium poort of hekken gaat eveneens prima helpen om je huis beter te beveiligen. </li>
					<li>Met poorten verhoogt u eveneens <strong> de privacy </strong> in en ook rondom uw woning. <br></li>

					<br>
					<h2>Ons gamma poorten <?php echo ucfirst($type) ?> </h2><br>

					<strong> Poortcentrum </strong> heeft een groot aanbod aan aluminimum poorten, schuifwoorden, hekkens en carports in een ook rond de regio van <strong> <?php echo ucfirst($type) ?> </strong>:

					<li><a class="u-link" href="https://poortcentrum.be/poorten">Poorten</a> </li>
					<li><a class="u-link" href="https://poortcentrum.be/automatisatie">Automatisatie</a> </li>
					<li><a class="u-link" href="https://poortcentrum.be/afsluitingen">Afsluitingen</a> </li>
					<li><a class="u-link" href="https://poortcentrum.be/carports">Carports</a> </li>
					<li><a class="u-link" href="https://poortcentrum.be/schuifwanden">Schuifwanden</a> </li>
					<li><a class="u-link" href="https://poortcentrum.be/terrasoverkappingen">Terrasoverkappingen</a> </li> <br>

					<h2>Poorten <?php echo ucfirst($type) ?> gemaakt op maat van de klant </h2> <br>

					<li>De eerste stap is het eerste contact. U kunt ons bereiken via <a class="u-link" href="mailto:info@poortcentrum.be">e-mail</a> of via <a class="u-link" href="tel:+32 479 57 37 02">telefoon</a>. </li>

					<li>We sturen u vervolgens graag een catalogus op met ons gamma aan aluminium poorten en hekkens. Samen met de bijhorende mogelijkheden en specificaties. Let wel dat we alles ook op maat kunnen maken. Staat uw idee niet in onze catalogus, stuur ons dan gerust een foto op en wij maken deze poort of hekken op maat. </li>

					<li>Vervolgens komt er een specialist voor poorten <?php echo ucfirst($type) ?> bij uw woning langs om de nodige opmetingen te doen. Zo zien we ook meteen of alles praktisch haalbaar is. </li>

					<li>Ten vierde maken we voor u graag een offerte voor een hekken of poort op volgens uw wensen. Deze prijs voor poorten <?php echo ucfirst($type) ?> is vrijblijvend en zonder extra of verborgen kosten. </li>

					<li>Als we ten slotte tot een overeenkomst komen, dan zal ons team van plaatsers langskomen op een afgesproken datum en uur om uw aluminium poort of hekken te komen plaatsen en af te stellen in uw regio rond <?php echo ucfirst($type) ?>. <br></li>

					<br>
					<h2>Waarom kiezen voor Poortcentrum voor een aluminium poort? </h2><br>
					<li>Poortcentrum heeft veel ervaring en een <strong> ruime kennis </strong> opgebouwd in poorten, hekkens en automatisering en we kennen onze regio ook heel goed. </li>

					<li>We helpen u graag met het <strong> antwoord op al uw vragen </strong>. We denken eveneens heel graag met u mee voor de realisatie van uw project. </li>

					<li><strong> Tevredenheid bij klanten </strong> dragen wij zeer hoog in het vaandel. Als klein metaalverwerkend bedrijf zijn onze klanten dus ook geen nummers. </li>

					<li>We werken goed en nauw samen met onze fabrikant voor poorten en hekken - <a class="u-link" href="https://www.niceforyou.com/nl-be">Nice</a>. </li>

					<li>We bieden <strong> kwalitatieve poorten en hekkens aan een eerlijke en betaalbare prijs </strong>. </li>

					<li>Er is een <strong> productie, montage en automatisatieteam </strong> met eigen personeel met de nodige ervaring. </li>

					<li>Een <strong> complete opvolging </strong> van uw project van A tot Z. </li>

					<li>Poortcentrum bezorgt <strong> maatwerk </strong>; een grote troef is bij ons flexibiliteit. Standaard modellen kunnen verfijnd worden tot het gewenste model dat 100% uw smaak is. </li>

					<li>We bieden u een <strong> persoonlijke offerte </strong> voor carports, poorten of hekkens. Deze is volledig en duidelijk en ook transparant. Er zijn <strong> geen verborgen kosten </strong>.</li>

					<li>Alle onderdelen van de poort of schuifpoort zoals palen, frame, vulling als ook de scharnieren worden gemaakt uit <strong> hoogwaardig aluminium </strong>.<br></li>

					<br>
					<h2>Maak nu een <a class="u-link" href="https://poortcentrum.be/contact">afspraak</a> voor poorten in <span class="u-orange"><?php echo ucfirst($type) ?></span> </h2><br>
				</div>


			</article>
		</div>
	</section>

	<!-- contact -->
	<section style="padding-top:8rem;" id="contact" class="scrollify o-section c-contact" data-section-name="contact">
		<!-- background  -->
		<div class="o-section__background c-contact__background">
			<div class="o-section__overlay"></div>
			<div class="o-section__texture c-contact__texture"></div>
		</div>
		<!-- wrapper  -->
		<div class="o-padding-wrapper c-contact__wrapper">
			<!-- social  -->
			<div class="c-contact__right">
				<div class="c-contact__right__social">
					<a href="https://www.instagram.com/poortcentrum/"><i class="c-contact__right__social__icon fab fa-instagram"></i></a>
					<a href="https://www.facebook.com/poortcentrum"><i class="c-contact__right__social__icon fab fa-facebook-square"></i></a>
					<a href="https://twitter.com/poortcentrum"><i class="c-contact__right__social__icon fab fa-twitter"></i></a>
					<a href="https://wa.me/32479573702"><i class="c-contact__right__social__icon fab fa-whatsapp"></i></a>
					<a href="https://www.youtube.com/channel/UCHo7PLTfPLNpwKJt-6X8xCw/featured"><i class="c-contact__right__social__icon fab fa-youtube"></i></a>

				</div>
				<div class="c-contact__right__info">
					<div class="c-contact__right__info__section">
						<a class="c-contact__right__info__section__text" href="https://goo.gl/maps/w6BuQWFCL9bY2g5H8">
							<div style="margin-right:1rem;">liersesteenweg 33<br>2221 Booischot</div>
							<i style="font-size: 2rem;" class="fal fa-map-marker-alt"></i>
						</a>
					</div>
					<div class="c-contact__right__info__section">
						<a class="c-contact__right__info__section__text" href="tel:+32479573702">
							<div style="margin-right:1rem;">+32 479 57 37 02</div>
							<i style="font-size: 2rem;" class="fal fa-phone"></i>
						</a>
					</div>
					<div class="c-contact__right__info__section">
						<a class="c-contact__right__info__section__text" href="mailto:info@poortcentrum.be">
							<div style="margin-right:1rem;">info@poortcentrum.be</div>
							<i style="font-size: 2rem;" class="fal fa-envelope"></i>
						</a>

					</div>
				</div>
			</div>
			<!-- floater  -->
			<div class="c-contact__left">
				<div class="c-contact__floater">
					<h1>CONTACT</h1>
					<div class="c-description__info__line">
						<div class="u-line"></div>
						<div class="u-line--short"></div>
					</div>

					<form class="c-contact__form" name="contactform" method="POST" action="../bevestiging.php">
						<input class="c-contact__form__input" type="text" id="fname" name="name" placeholder="Naam*" required />

						<input class="c-contact__form__input" type="email" id="email" name="email" placeholder="Email*" required />


						<div class="c-contact__form__section">
							<input class="c-contact__form__input c-contact__form__input--medium" type="text" id="gemeente" name="gemeente" placeholder="Gemeente*" required />
							<input class="c-contact__form__input c-contact__form__input--short" type="number" id="postcode" name="postcode" placeholder="Postcode*" required />
						</div>

						<textarea class="c-contact__form__input c-contact__form__textarea" id="form_message" name="message" rows="6" placeholder="Bericht*" value="" required></textarea>

						<!-- <div class="g-recaptcha" data-sitekey="6Lft8bcZAAAAAOsBXmralOiJqLCw1fZglA1neklm"></div>
					<script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

						<input style="margin-top:1rem;" class="c-contact__form__submit" type="submit" name="submit" value="STUREN" />
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- footer  -->
	<section id="footer" class=" o-section c-footer" data-section-name="footer">
		<div class="o-padding-wrapper c-footer__wrapper">
			<div class="c-footer__content">
				<!-- TREE  -->
				<div class="c-footer__tree">
					<h2>Sitemap</h2>
					<ul class="c-footer__tree__list">
						<li><a href="/index.php">Home</a></li>
						<li>Aanbod</li>
						<ul class="c-footer__tree__list c-footer__tree__list--indented">
							<li><a href="/poorten">Poorten</a></li>
							<li><a href="/automatisatie">Automatisatie</a></li>
							<li><a href="/afsluitingen">Afsluitingen</a></li>
							<li><a href="/carports">Carports</a></li>
							<li><a href="/schuifwanden">Glazen schuifwanden</a></li>
							<li><a href="/terras">Terrasoverkappingen</a></li>
						</ul>
						</li>
						<li><a href="/overons">Over ons</a></li>
						<li><a href="/troeven">Onze Troeven</a></li>
						<li><a href="/productie">Productie</a></li>
						<li><a href="index.php#contact">Contact</a></li>
					</ul>
				</div>

				<!-- INFO  -->
				<div class="c-footer__info">
					<h2>Poortcentrum</h2>
					<div>
						<h3>Info</h3>
						<ul>
							<li><a href="https://goo.gl/maps/w6BuQWFCL9bY2g5H8">liersesteenweg 33<br>2221 Booischot</a></li>
							<li><a href="tel:+32479573702">+32 479 57 37 02</a></li>
							<li><a href="mailto:info@poortcentrum.be">info@poortcentrum.be</a></li>
						</ul>
					</div>
					<div>
						<h3>Openingsuren</h3>
						<ul>
							<li>Maandag: Op afspraak</li>
							<li>Dinsdag: Op afspraak</li>
							<li>Woensdag: Op afspraak</li>
							<li>Donderdag: 18:00 - 20:00</li>
							<li>Vrijdag: 18:00 - 20.00</li>
							<li>Zaterdag: 10:00 - 16:00</li>
							<li>Zondag: Op afspraak</li>
						</ul>
					</div>
				</div>

				<!-- SOCIAAL -->
				<div class="c-footer__extra">
					<h2>Sociaal</h2>

					<div class="c-contact__right__social c-footer__extra__social">
						<a href="https://www.instagram.com/poortcentrum"><i class="c-contact__right__social__icon fab fa-instagram"></i></a>
						<a href="https://www.facebook.com/poortcentrum"><i class="c-contact__right__social__icon fab fa-facebook-square"></i></a>
						<a href="https://twitter.com/poortcentrum"><i class="c-contact__right__social__icon fab fa-twitter"></i></a>
						<a href="https://wa.me/32479573702"><i class="c-contact__right__social__icon fab fa-whatsapp"></i></a>
						<a href="https://www.youtube.com/channel/UCHo7PLTfPLNpwKJt-6X8xCw/featured"><i class="c-contact__right__social__icon fab fa-youtube"></i></a>
					</div>
				</div>
			</div>

			<span class="c-footer__copyright">
				<a href="https://www.iubenda.com/privacy-policy/87951302" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a>
				<script type="text/javascript">
					(function(w, d) {
						var loader = function() {
							var s = d.createElement("script"),
								tag = d.getElementsByTagName("script")[0];
							s.src = "https://cdn.iubenda.com/iubenda.js";
							tag.parentNode.insertBefore(s, tag);
						};
						if (w.addEventlistener) {
							w.addEventlistener("load", loader, false);
						} else if (w.attachEvent) {
							w.attachEvent("onload", loader);
						} else {
							w.onload = loader;
						}
					})(window, document);
				</script>
				<br>
				Poortcentrum™ and its logo are registered trademarks <br>
				© <?php echo date("Y"); ?> - <a style="color:lightgray;" href="https://lavrenov.io">Andrei Lavrenov</a>
			</span>
		</div>
	</section>

	<!-- scripts  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b5152dcdcb.js" crossorigin="anonymous"></script>
	<script src="../js/nav.js"></script>
	<script src="../js/fancybox.min.js"></script>
	<!-- <script src="https://www.google.com/recaptcha/api.js?render=6Lf8wuwUAAAAAMyN77uDNVahwr7fdpvE3RIEqjwz"></script> -->
	<!-- <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6Lf8wuwUAAAAAMyN77uDNVahwr7fdpvE3RIEqjwz', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script> -->
</body>

</html>