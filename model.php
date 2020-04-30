<?php require("header.php"); ?>

<?php $type = htmlspecialchars($_GET["type"]) ?>

<!-- header with cta  -->
<header id="header" class="scrollify o-section c-header c-header--short c-header--about" data-section-name="home">
    <!-- image background with blue overlay -->
    <div class="o-section__background c-header__background">
        <div class="o-section__overlay"></div>
        <div class="o-section__texture c-header__texture--catalog"></div>
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
            <h1 class="c-about__section__content__title"><?php echo $type ?></h1>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <!-- <div class="c-about__section__content__text">
                <p class="c-about__section__content__paragraph">Tevens zijn wij gespecialiseerd in carports met vlak of gebogen, met gesloten steeldek en polycarbonaat lichtdoorlatend dak. 
                Indien gewenst kunnen er zijwanden ingewerkt worden volgens model van de poorten of hout, ledstrips met bewegingsmelder behoren tevens tot de mogelijkheden.
                </p>
            </div> -->
            <div class="c-about__gallery c-about__gallery--odd">
            <?php
                $dirname = "img/catalog/poorten/" . $type . "/";
                // $images = scandir($dirname);
                $images = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dirname));
                // shuffle($images);
                $ignore = Array(".", "..");

                

                foreach($images as $curimg){
                    if(!in_array($curimg, $ignore)) {
                        echo "<a class='c-about__card' href='".$dirname.$curimg."' data-fancybox='gate'>
                                    <img src='".$dirname."thumbs/".$curimg."' alt='". $type . strtok($curimg, '.') . "' />
                                    <div class='c-about__card__overlay'><h2 style='background-image: url(".$dirname."thumbs/".$curimg.");' class='c-about__card__title'>" . strtok($curimg, '.') . "</h2></div></a>";
                    }
                }
                
                $amount = sizeof($images);
                if($amount < 3){
                    for ($x = 0; $x < (3-$amount); $x++) {
                        echo "<a class='c-about__card' href='img/catalog/poorten/noimg/noimage_large.jpg' data-fancybox='gate'>
                                            <img src='img/catalog/poorten/noimg/noimage_small.jpg' alt='noimg' />
                                            <div class='c-about__card__overlay'><h2 style='background-image: url(img/catalog/poorten/noimg/noimage_small.jpg);' class='c-about__card__title'>N/A</h2></div></a>";
                    } 
                }
            ?>
            </div>
        </article>
    </div>
</section>


<?php require("footer.php"); ?>