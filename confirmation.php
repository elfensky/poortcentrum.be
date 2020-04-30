<?php require("header.php"); //not the actual header, but head + nav ?>
<?php require("php/submit.php"); ?>


<!-- header with cta  -->
<header id="header" class="scrollify o-section c-header c-header--short" data-section-name="home">
    <!-- image background with blue overlay -->
    <div class="o-section__background c-header__background">
        <div class="o-section__overlay"></div>
        <div class="o-section__texture c-header__texture--catalog"></div>
        <div class="o-section__text">CONTACT</div>
    </div>
    <div class="o-padding-wrapper c-header__wrapper c-model__wrapper">
        <!-- <div class="c-model__header__wrapper"> -->
            <h1 class="c-model__title"><?php echo $confirmation__header ?></h1>
        <!-- </div> -->
    </div>
</header>

<!-- gate  -->
<section id="confimation" class="o-section c-about__section" data-section-name="confimation">
    <!-- wrapper  -->
    <div class="o-padding-wrapper">
        <article class="c-about__section__content">
            <h1 class="c-about__section__content__title"><?php echo $confirmation__title ?></h1>
            <div class="c-description__info__line">
                <div class="u-line"></div>
                <div class="u-line--short"></div>
            </div>
            <div class="c-about__gallery c-about__gallery--odd">
                <h2 style="width: 100%; margin-bottom: 30px;"><?php echo $confirmation__message ?></h2>
                <a class="c-header__cta" style="padding: 0.5rem 1rem; border-radius: 5px; margin-bottom:60px;" href="index.php">TERUG NAAR DE HOMEPAGINA</a>
            </div>
        </article>
    </div>
</section>


<?php require("footer.php"); ?>