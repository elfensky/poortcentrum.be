<?php require("header.php"); ?>

<!-- header with cta  -->
<header id="header" class="scrollify o-section c-header c-header--short c-header--about" data-section-name="home">
    <!-- image background with blue overlay -->
    <div class="o-section__background c-header__background">
        <div class="o-section__overlay"></div>
        <div class="o-section__texture c-header__texture--catalog"></div>
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
            <h3 class="c-description__info__subtitle">TUINPOORTEN, AFSLUITINGEN, HEKKEN</h3>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                <p class="c-about__section__content__paragraph">Onze ervaring stelt ons in staat u de beste kwaliteit te garanderen en diverse ontwerpen aan te bieden. Wij produceren zowel minimalistische en moderne als klassieke retro modellen in <span style="font-weight:600;">100% aluminium</span>.
                    
                </p>
                <p class="c-about__section__content__paragraph">
                    Afsluitingen of Hekken kunnen in dezelfde uitvoering als onze poorten geproduceerd worden, al onze poorten kunnen vanzelfsprekend geautomatiseerd worden, met fotocellen en 2 remote controllers als standaard.
                    <ul class="c-about__section__content__list">
                        <li>videofonie</li>
                        <li>parlefonie</li>
                        <li>codeklavier</li>
                        <li>gsm module</li>
                    </ul>
                </p>
                <p class="c-about__section__content__paragraph">
                Vanaf productie tot montage van het eindproduct gebeurd in eigen beheer dus zonder onderaannemers waardoor we onze kwaliteit kunnen garanderen aan de juiste prijs.
                </p>
            </div>
            <div class="c-about__gallery">
            
            <?php
                $dirname = "img/catalog/poorten/";
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
                $dirname = "img/catalog/carports/";
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
                <p class="c-about__section__content__paragraph">
                Wij hebben geen standaard afmetingen; al onze producten zijn maatwerk.
                Door het gebruik van onze eigen hoogwaardige geëxtrudeerde profielen zijn wij verzekerd van een constante kwaliteit van onze gebruikte materialen.
                En met onze speciale gevormde profielen kunnen wij de meeste modellen produceren met een minimum aan zichtbare lasnaden.
                </p>
                <p class="c-about__section__content__paragraph">
                Waar wij ons wel enigszins anders profileren is onze voorbehandeling van het lakproces, om een goede hechting van de coating te verkrijgen is het noodzakelijk dat de “oxidehuid” van de profielen volledig verwijderd wordt. Dit gebeurd bij ons in onze eigen atelier door middel van stralen waardoor we 100 % zeker zijn dat de oxidehuid volledig verwijderd is en dit voor een optimale hechting zorgt. Tevens worden al onze producten 2 x gecoat en 2 x gebakken op 195 °.
                </p>
            </div>
            
            <div class="c-about__gallery c-about__gallery--odd">
            <?php
                $dirname = "img/catalog/schuifwanden/";
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
            <h1 class="c-about__section__content__title c-about__section__content__title--small">TERRAS OVERKAPPINGEN</h1>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__section__content__text">
                <p class="c-about__section__content__paragraph">
                Terrasoverkappingen in aluminium draag constructie’s met polycarbonaat platen of glas als dakbedekking transparant of zonwerend, als optie’s kan ledverlichting ingebouwd, worden en om het geheel compleet te maken bieden wij deze eveneens aan met glazen schuifwanden zodat u bij minder zonnige dagen op een comfortabele manier van het buitenleven kan blijven genieten.
                </p>
            </div>
            <div class="c-about__gallery c-about__gallery--odd">
            <?php
                $dirname = "img/catalog/terras/";
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