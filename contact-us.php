<?php include('assets/include/header.php'); ?>
<!-- inner-header -->
<div class="uk-inner-header uk-padding uk-background-cover uk-light" style="background: url('assets/img/brain.jpg');">
    <div class="uk-container uk-inner-content " uk-scrollspy="target:h1,ul; cls: uk-animation-slide-top-medium;   delay: 100; repeat: false;">
        <h1 class="uk-margin-remove">Contact Us</h1>
        <ul class="uk-breadcrumb uk-light uk-margin-small">
            <li><a href="#">Home</a></li>
            <li><span>Who we are</span></li>
        </ul>
    </div>
    <div class="uk-overlay"></div>
</div>
<!-- end inner-header -->

<!-- page -->
<section class="uk-section uk-section-bg">
    <div class="uk-container uk-margin-top" >
        <div class=" uk-grid-large uk-flex uk-flex-middle" uk-height-match="target:uk-contact-item" uk-grid >

            <div class="uk-width-1-3@m uk-contact-item " uk-scrollspy="target:h2, p, div, a; cls: uk-animation-slide-top-medium;   delay: 100; repeat: false;">
                <div class="uk-section-title">
                    <h2>Get In Touch</h2>
                </div>
                <p class="uk-text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla nam suscipit architecto maiores aliquam </p>
                <div class="uk-contact uk-margin-medium-top">
                    <div class="uk-clearfix uk-flex uk-flex-middle uk-margin-medium-top">
                        <div class="uk-float-left">
                            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        </div>
                        <div class="uk-padding-left">
                            <a href="#">Level 2, 133-135 Oxford St, Bondi Junction, NSW 2022, Australia</a>
                        </div>
                    </div>

                    <div class="uk-clearfix uk-flex uk-flex-middle uk-margin-top">
                        <div class="uk-float-left">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        </div>
                        <div class="uk-padding-left">
                            <a href=""> 0433 568 282</a>
                        </div>
                    </div>

                    <div class="uk-clearfix uk-flex uk-flex-middle uk-margin-top">
                        <div class="uk-float-left">
                            <div class="icon"><i class="fa-regular fa-clock"></i></div>
                        </div>
                        <div class="uk-padding-left">
                            <a> Sun- Fri : 9AM-5PM</a>
                        </div>
                    </div>

                    <div class="uk-clearfix uk-flex uk-flex-middle uk-margin-top    ">
                        <div class="uk-float-left">
                            <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                        </div>
                        <div class="uk-padding-left">
                            <a>loremipsum@gmail.com</a>
                        </div>
                    </div>
                </div>


                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.905009530548!2d151.24542261521088!3d-33.89210018064974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12adf0e4f93701%3A0x47b2e3a1fda61d5f!2sLevel+2%2F133-135+Oxford+St%2C+Bondi+Junction+NSW+2022%2C+Australia!5e0!3m2!1sen!2snp!4v1565252315816!5m2!1sen!2snp" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            </div>

            <div class="uk-width-expand uk-contact-item" uk-scrollspy="target:h2, div, a; cls: uk-animation-slide-top-medium;   delay: 100; repeat: false;">
                <div class="uk-card uk-card-default uk-card-body " >
                    <div class="uk-section-title">
                        <h2>Message Us</h2>
                    </div>
                    <form class="uk-grid-small uk-grid uk-margin-medium-top" uk-grid="">
                        <div class="uk-width-1-2@s uk-first-column">
                            <input class="uk-input" type="text" placeholder="First Name*" autocomplete="off">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input class="uk-input" type="text" placeholder="Last Name">
                        </div>
                        <div class="uk-width-1-2@s uk-first-column">
                            <input class="uk-input" type="text" placeholder="Address" autocomplete="off">
                        </div>
                        <div class="uk-width-1-2@s">
                            <input class="uk-input" type="text" placeholder="Contact Number*">
                        </div>
                        <div class="uk-width-1-1@s uk-grid-margin uk-first-column">
                            <input class="uk-input" type="email" placeholder="Email*">
                        </div>
                        <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                            <textarea name="" class="uk-textarea" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="uk-width-1-1 uk-margin-bottom uk-text-right uk-grid-margin uk-first-column">
                            <button type="submit" class="btn uk-button-primary  ">Send <span class="uk-icon" uk-icon="arrow-right"> </span></button>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- end page -->

<?php include('assets/include/footer.php'); ?>