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
						<div style="margin-right:1rem;">Liersesteenweg 33<br>2221 Booischot</div>
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

				<form class="c-contact__form" name="contactform" method="POST" action="bevestiging.php">
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