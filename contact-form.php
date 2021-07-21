<div class="contact-form content-inner js-contact-form  load-in rise">
<div class="contact-form__icon-wrapper">
        <svg class="contact-form__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 33.4 28.2" style="enable-background:new 0 0 33.4 28.2;" xml:space="preserve">
            <path fill="#FFA2F3" d="M0,0.4l15.9,26.8l0,1l0.3-0.4l0.1,0.2l0.1-0.2l0.3,0.4v-0.9L32.7,0.4h-0.3L32.7,0l-0.8,0.4h-31L0,0l0.3,0.4H0z
		 M15.7,24.5l-5.5-9.3l5.5,3.1V24.5z M15.7,16.9l-6.3-3.5V6.3l6.3,3.4V16.9z M16.9,24.5v-6.2l5.5-3.1L16.9,24.5z M23.2,13.4
		l-6.3,3.5V9.7l6.3-3.4V13.4z M24.5,11.9V5.6l5.5-3L24.5,11.9z M29.2,1.6l-5.4,2.9l-5.2-2.9H29.2z M22.6,5.3l-6.2,3.4l-6.2-3.4
		l6.2-3.5L22.6,5.3z M14.1,1.6L8.8,4.6L3.4,1.6H14.1z M8.2,5.6v6.2L2.7,2.6L8.2,5.6z" />
        </svg>
    </div>
    <form id="contactForm" action="<?php echo $site; ?>/contact" method="post">
        <div class="contact-form__wrap-ctrl">
            <div class="contact-form__field-ctrl f-serif">
                <input type="text" value="" name="fullname" class="contact-form__field contact-form__field--name js-contact-form-field js-name" id="name" placeholder="Name">
                <label class="contact-form__input-label">Name</label>
            </div>
            <div class="contact-form__field-ctrl f-serif">
                <input type="email" value="" name="email" class="contact-form__field contact-form__field--email js-contact-form-field js-email" id="email" placeholder="Email">
                <label class="contact-form__input-label">Email</label>
            </div>

            <?php include __DIR__ . '../../objects/country-select.php'; ?>

            <div class="contact-form__field-ctrl f-serif">
                <input type="text" value="" name="subject" class="contact-form__field contact-form__field js-contact-form-field js-subject" id="subject" placeholder="Subject">
                <label class="contact-form__input-label">Subject</label>
            </div>
            <div class="contact-form__field-ctrl f-serif">
                <textarea type="textarea" value="" name="message" class="contact-form__field contact-form__field--textarea js-contact-form-field js-message" id="message" placeholder="Message..." rows="6" maxlength="1000">
                </textarea>
                <label class="contact-form__input-label">Message</label>
            </div>
        </div>
        <div id="privacyWrapper" class="privacy">
            <input required type="checkbox" name="privacyCheckbox" class="privacy__field privacy__field--checkbox js-contact-form-field js-privacy-checkbox" id="privacyCheckbox" />
            <label for="privacyCheckbox" class="privacy__label">
                <div class="privacy__text"><?php echo $contactFormTerms; ?></div>
            </label>
        </div>

        <div id="captcha" class="g-recaptcha recaptcha contact-form__recaptcha" data-sitekey="6Ld-hAUTAAAAAL96hi7603jTMFJV2PtOnAtz-gTb" data-theme="dark" data-size="normal"></div> 
        
        <button id="submitButton" class="contact-form__submit-button btn btn--primary js-submit-button" type="submit" form="contactForm" value="submit">Submit</button>
    </form>
    <div id="errorResponses" class="contact-form__error-responses js-error-responses"></div>

    <?php include __DIR__ . '../../components/footer-secondary.php'; ?>
</div>
