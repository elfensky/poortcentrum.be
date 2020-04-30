<!-- footer  -->
<section id="footer" class=" o-section c-footer" data-section-name="footer">
        <div class="o-padding-wrapper c-footer__wrapper">
            <div class="c-footer__content">
                <!-- TREE  -->
                <div class="c-footer__tree">
                    <h2>Sitemap</h2>
                    <ul class="c-footer__tree__list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aanbod.php">Aanbod</a></li>
                            <ul class="c-footer__tree__list c-footer__tree__list--indented">
                                <li><a href="aanbod.php#poorten">Poorten</a></li>
                                <li><a href="aanbod.php#poorten">Automatisatie</a></li>
                                <li><a href="aanbod.php#poorten">Tuinpoorten</a></li>
                                <li><a href="aanbod.php#poorten">Afsluitingen</a></li>
                                <li><a href="aanbod.php#poorten">Hekken</a></li>
                                <li><a href="aanbod.php#carports">Carports</a></li>
                                <li><a href="aanbod.php#schuifwanden">Glazen schuifwanden</a></li>
                                <li><a href="aanbod.php#terrasoverkappingen">Terrasoverkappingen</a></li>
                                <!-- <li><a href="aanbod.php#custom">Poolhouse</a></li> -->
                            </ul>
                        </li>
                        <li><a href="about.php">Over ons</a></li>
                        <li><a href="index.php#gallery">Galerij</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
                    </ul>
                </div>

                <!-- INFO  -->
                <div class="c-footer__info">
                    <h2>Poortcentrum</h2>
                    <div>
                        <h3>Info</h3>
                        <ul>
                            <li>Herseltsesteenweg 268<br>3200 Aarschot</li>
                            <li>+32 479 57 37 02</li>
                            <li>info@poortcentrum.be</li>
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
                        <a href="#"><i class="c-contact__right__social__icon fab fa-instagram"></i></a>
                        <a href="#"><i class="c-contact__right__social__icon fab fa-facebook-square"></i></a>
                        <a href="#"><i class="c-contact__right__social__icon fab fa-twitter"></i></a>
                        <a href="#"><i class="c-contact__right__social__icon fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
            <span class="c-footer__copyright">
                Poortcentrum™ and its logo are registered trademarks <br>
                © 2020 - Andrei Lavrenov
            </span>
        </div>
    </section>

    <!-- scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b5152dcdcb.js" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/pig.min.js"></script>
    <script src="js/pig.config.js"></script>
    <!-- <script src='https://www.hCaptcha.com/1/api.js' async defer></script> -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf8wuwUAAAAAMyN77uDNVahwr7fdpvE3RIEqjwz"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6Lf8wuwUAAAAAMyN77uDNVahwr7fdpvE3RIEqjwz', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
</body>

</html>