<!DOCTYPE html>
<html lang="nl">

<head>
	<?php	$type = htmlspecialchars($_GET["type"]);
			$path = "../img/aanbod/poorten/" . $type;

			if(!is_dir($path)){
				header('Location: /404');
			}
	?>

	<?php require("../gtag.php"); ?>
	
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
	<!-- STYLE -->
	<link rel="stylesheet" type="text/css" href="../css/fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	
	<!-- SEO  -->
	<title><?php echo $type ?> | Aluminium Poort | Poortcentrum</title>
	<meta name="description" content="Een detail pagina over <?php echo $type ?>, een aluminum poort van Poortcentrum">
	<link rel="canonical" href="https://poortcentrum.be/poort/<?php echo $type ?>" />
</head>

<body>

<!-- NAVIGATION  -->
<?php require("../navigation.php"); ?>

<!-- header with cta  -->
<header id="header" class="scrollify o-section c-header c-header--short c-header--about" data-section-name="home">
    <!-- image background with blue overlay -->
    <div class="o-section__background c-header__background">
        <div class="o-section__overlay"></div>
        <div class="o-section__texture c-header__texture--aanbod"></div>
        <div class="o-section__text"><?php echo strtoupper($type) ?></div>
    </div>
    <div class="o-padding-wrapper c-header__wrapper c-model__wrapper">
        <!-- <div class="c-model__header__wrapper"> -->
            <h1 class="c-model__title"><?php echo ucfirst($type) ?></h1>
        <!-- </div> -->
    </div>
</header>

<!-- gate  -->
<section id="carports" class="o-section c-about__section" data-section-name="carports">
    <!-- wrapper  -->
    <div class="o-padding-wrapper">
        <article class="c-about__section__content">
            <h2 class="c-about__section__content__title"><?php echo $type ?></h2>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                <?php
                    echo file_get_contents($path . "/description.php" );
				?>
				<p></p>
            </div>

            <div class="c-about__gallery c-about__gallery--odd">
            <?php
				// $dirname = "../img/aanbod/poorten/" . $type . "/";
				// $images_small = scand

				$small_image_names = array_values(array_diff(preg_grep('~\.(jpeg|jpg|png)$~', scandir($path . "/small")), array('.', '..')));
				

				

				$i = 1;
                foreach($small_image_names as $small_image){
					$alt_text = str_replace("-", " ", strtok($small_image, '.'));
					// print_r($alt_text);

                        echo "<a class='c-about__card' href='" . $path . "/large/" . $small_image . "' data-fancybox='gate'>
                                    <img class='c-about__card__img'  src='" . $path . "/small/" . $small_image . "' alt='". $alt_text . "' />
									<div class='c-about__card__overlay'><h2 class='c-about__card__title'>" . $i . "</h2></div></a>";
						$i++;
                }
                
				$amount = sizeof($small_image_names);
				
                if($amount < 3){
                    for ($x = 0; $x < (3-$amount); $x++) {
                        echo "<a class='c-about__card' href='../img/aanbod/poorten/noimage_large.jpg' data-fancybox='gate'>
                                            <img class='c-about__card__img'  src='../img/aanbod/poorten/noimage_small.jpg' alt='noimg' />
                                            <div class='c-about__card__overlay'><h2 class='c-about__card__title'>N/A</h2></div></a>";
                    } 
                }
            ?>
            </div>
        </article>
    </div>
</section>

<!-- contact -->
<section id="contact" class="scrollify o-section c-contact" data-section-name="contact">
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
            </div>
            <div class="c-contact__right__info">
                <div class="c-contact__right__info__section">
                    <a class="c-contact__right__info__section__text" href="https://g.page/poortcentrum?share">
                        <div style="margin-right:1rem;">Herseltsesteenweg 268<br>3200 Aarschot</div>
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
                <h2>CONTACT</h2>
                <div class="c-description__info__line">
                    <div class="u-line"></div>
                    <div class="u-line--short"></div>
                </div>

                <form class="c-contact__form" name="contactform" method="POST" action="../bevestiging.php">
                    <input class="c-contact__form__input" type="text" id="fname" name="name" placeholder="Naam*" required />

                    <input class="c-contact__form__input" type="email" id="email" name="email" placeholder="Email*" required />

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
                        <li><a href="index.php">Home</a></li>
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
                        <li><a href="about.php">Over ons</a></li>
						<li><a href="index.php#contact">Contact</a></li>
                    </ul>
                </div>

                <!-- INFO  -->
                <div class="c-footer__info">
                    <h2>Poortcentrum</h2>
                    <div>
                        <h3>Info</h3>
                        <ul>
                            <li><a href="https://g.page/poortcentrum?share">Herseltsesteenweg 268<br>3200 Aarschot</a></li>
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
                    </div>
                </div>
            </div>
            
            <span class="c-footer__copyright">
				<a href="https://www.iubenda.com/privacy-policy/87951302" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
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

