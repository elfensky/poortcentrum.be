<?php require("header.php"); ?>

<!-- header with cta  -->
<header id="header" class="scrollify o-section c-header c-header--short c-header--about" data-section-name="home">
    <!-- image background with blue overlay -->
    <div class="o-section__background c-header__background">
        <div class="o-section__overlay"></div>
        <div class="o-section__texture c-header__texture--aanbod"></div>
        <div class="o-section__text">AANBOD</div>
    </div>
    <div class="o-padding-wrapper c-header__wrapper">
        <div class="c-about__cloud">
            <a class="c-about__cloud__link c-about__cloud__link--alt" href="#poorten"><h1>POORTEN</h1></a>
            <a class="c-about__cloud__link" href="#poorten"><h1>TUINPOORTEN</h1></a>
            <a class="c-about__cloud__link c-about__cloud__link--alt" href="#poorten"><h1>AFSLUITINGEN</h1></a>
            <a class="c-about__cloud__link" href="#poorten"><h1>HEKKEN</h1></a>
            <a class="c-about__cloud__link c-about__cloud__link--alt" href="#carports"><h1>CARPORTS</h1></a>
            <a class="c-about__cloud__link" href="#schuifwanden"><h1>GLAZEN SCHUIFWANDEN</h1></a>
            <a class="c-about__cloud__link c-about__cloud__link--alt" href="#terrasoverkappingen"><h1>TERRAS OVERKAPPINGEN</h1></a>
        </div>
    </div>
</header>
<!-- poorten  -->
<section id="poorten" class="o-section c-about__section" data-section-name="poorten">
    <!-- wrapper  -->
    <div class="o-padding-wrapper">
        <article class="c-about__section__content">
            <h1 class="c-about__section__content__title">POORTEN</h1>
            <h3 class="c-description__info__subtitle">AUTOMATISATIE, TUINPOORTEN, AFSLUITINGEN, HEKKEN</h3>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                <p class="c-about__section__content__paragraph">Onze ervaring stelt ons in staat u de beste kwaliteit te garanderen en diverse ontwerpen aan te bieden. 
                    Wij produceren zowel minimalistische en moderne als klassieke retro modellen in <span style="font-weight:600;">100% aluminium</span>.
                    De poorten worden volledig op maat geproduceerd met onze monoblok profielen die garant staan voor een mooie, elegenate afwerking zonder zichtbare lasnaden.
                    Al onze poorten kunnen als een draai,- schuif,- of vrijdragend model geproduceerd worden.
                </p>
                <div class="c-about__section__content__paragraph">
                    Elk van onze poorten kan geautomatiseerd worden en is compatibel met de meeste garagedeur motors.
                    Bij onze automatisatie komen standaard met fotocellen en 2 remote controllers. Andere opties houden onder anderen:
                    <ul class="c-about__section__content__list">
                        <li>videofonie</li>
                        <li>parlefonie</li>
                        <li>codeklavier</li>
                        <li>gsm module</li>
                    </ul>
                </div>
                
                <p class="c-about__section__content__paragraph">
                    Afsluitingen of Hekken kunnen in dezelfde uitvoering als de poorten worden gemaakt met stijlvolle verlichting op elke paal gecoat in dezelfde kleur zorgen ervoor dat u zelf ‘s avonds optimaal kan genieten van uw tuin.
                </p>
                <p class="c-about__section__content__paragraph">
                Vanaf productie tot montage van het eindproduct gebeurd in eigen beheer dus zonder onderaannemers waardoor we onze kwaliteit kunnen garanderen aan de juiste prijs. Leverbaar in talrijke gepoedercoate kleuren.
                </p>
            </div>
            <div class="c-about__gallery">
            
            <?php
                $dirname = "img/aanbod/poorten/";
                // $images = scandir($dirname);
                $images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dirname));
                // shuffle($images);
                $ignore = Array(".", "..");
                foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                        echo "<a class='c-about__card' href='model.php?type=" . strtok($curimg, '.') . "'>
                            <img src='".$dirname.$curimg."' alt='" . strtok($curimg, '.') . " aluminum gate' />
                            <div class='c-about__card__overlay'><h2 style='background-image: url(".$dirname.$curimg.");' class='c-about__card__title'>" . strtok($curimg, '.') . "</h2></div></a>\n";
                    }
                }
            ?>
            </div>
        </article>
    </div>
</section>
<!-- carports  -->
<section id="carports" class="o-section c-about__section" data-section-name="carports">
    <!-- wrapper  -->
    <div class="o-padding-wrapper">
        <article class="c-about__section__content">
            <h1 class="c-about__section__content__title">CARPORTS</h1>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                <p class="c-about__section__content__paragraph">Tevens zijn wij gespecialiseerd in carports met vlak of gebogen, met gesloten steeldek en polycarbonaat lichtdoorlatend dak. 
                Indien gewenst kunnen er zijwanden ingewerkt worden volgens model van de poorten of hout, ledstrips met bewegingsmelder behoren tevens tot de mogelijkheden.
                </p>
            </div>
            <div class="c-about__gallery c-about__gallery--odd">
            <?php
                $dirname = "img/aanbod/carports/";
                // $images = scandir($dirname);
                $images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dirname));
                // shuffle($images);
                $ignore = Array(".", "..");
                foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                        echo "<a class='c-about__card' href='".$dirname.$curimg."' data-fancybox='cars'>
                                    <img src='".$dirname."thumb/".$curimg."' alt='carport" . strtok($curimg, '.') . "' />
                                    <div class='c-about__card__overlay'><h2 style='background-image: url(".$dirname.$curimg.");' class='c-about__card__title'>" . strtok($curimg, '.') . "</h2></div></a>";
                    }
                }
            ?>
            </div>
        </article>
    </div>
</section>
<!-- schuifwanden  -->
<section id="schuifwanden" class="o-section c-about__section" data-section-name="schuifwanden">
    <!-- wrapper  -->
    <div class="o-padding-wrapper">
        <article class="c-about__section__content">
            <h1 class="c-about__section__content__title c-about__section__content__title--small">SCHUIFWANDEN</h1>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                <p class="c-about__section__content__paragraph">
                Al dan niet in combinatie met een terrasoverkapping leveren wij sinds kort ook glazen schuifwanden aan, steeds als maatwerk met 10 mm gehard veiligheidsglas, regelbare wielen met kogellagers en “meenemers” zodat u met 1 glaspaneel uw volledige wand open en dicht kan schuiven, in optie kunnen er ook tochtborstels gemonteerd worden.   Elke ral kleur zonder meerprijs. 
                </p>
            </div>
            
            <div class="c-about__gallery c-about__gallery--odd">
            <?php
                $dirname = "img/aanbod/schuifwanden/";
                // $images = scandir($dirname);
                $images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dirname));
                // shuffle($images);
                $ignore = Array(".", "..");
                foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                        echo "<a class='c-about__card' href='".$dirname.$curimg."' data-fancybox='doors'>
                                    <img src='".$dirname."thumb/".$curimg."' alt='schuifwand" . strtok($curimg, '.') . "' />
                                    <div class='c-about__card__overlay'><h2 style='background-image: url(".$dirname.$curimg.");' class='c-about__card__title'>" . strtok($curimg, '.') . "</h2></div></a>";
                    }
                }
            ?>
            </div>
        </article>
    </div>
</section>
<!-- terrasoverkappingen  -->
<section id="terrasoverkappingen" class="o-section c-about__section" data-section-name="terrasoverkappingen">
    <!-- wrapper  -->
    <div class="o-padding-wrapper">
        <article class="c-about__section__content">
            <h1 class="c-about__section__content__title c-about__section__content__title--small">TERRAS</h>
            <h3 class="c-description__info__subtitle">OVERKAPPINGEN & POOLHOUSE</h3>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                <p class="c-about__section__content__paragraph">
                Terrasoverkappingen in aluminium draag constructie’s met polycarbonaat platen of glas als dakbedekking transparant of zonwerend, als optie’s kan ledverlichting ingebouwd, worden en om het geheel compleet te maken bieden wij deze eveneens aan met glazen schuifwanden zodat u bij minder zonnige dagen op een comfortabele manier van het buitenleven kan blijven genieten.
                </p>
                <p class="c-about__section__content__paragraph">Een pool-house opgebouwd in dubbelwandige aluminium klik profielen van 100 – 200 of 40 mm hoog, al dan niet met glazen schuifwanden, onderhoud vrij waar het gezellig vertoeven is na een verfrissende duik, tevens leverbaar met geintegreerd berghok.</p>
            </div>
            <div class="c-about__gallery c-about__gallery--odd">
            <?php
                $dirname = "img/aanbod/terras/";
                // $images = scandir($dirname);
                $images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dirname));
                // shuffle($images);
                $ignore = Array(".", "..");
                foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                        echo "<a class='c-about__card' href='".$dirname.$curimg."' data-fancybox='terras'>
                                    <img src='".$dirname."thumb/".$curimg."' alt='terrasoverkapping" . strtok($curimg, '.') . "' />
                                    <div class='c-about__card__overlay'><h2 style='background-image: url(".$dirname.$curimg.");' class='c-about__card__title'>" . strtok($curimg, '.') . "</h2></div></a>";
                    }
                }
            ?>
            </div>
        </article>
    </div>
</section>

<?php require("footer.php"); ?>