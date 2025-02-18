<?php include 'header.php'; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-nowrap">
            <div class="col-lg-6 col-md-6 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Contact Us</h2>
                <p class="mt-3">Feel free to get in touch with us for any inquiries, support, or to discuss how we can assist you with your needs.</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-md-6">
                <img src="<?php echo base_url; ?>assets/images/breadcrumb/contactus.webp" class="img-fluid iq-pr-50" alt="<?php echo app_name; ?>">
            </div>
        </div>
    </div>
</section>

<div class="main-content">
    <section class="iq-contactbox">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 align-self-center">
                    <div class="contact-box">
                        <h3>Let’s Start a Conversation</h3>
                        <div id="modalResponse"></div>
                        <form class="p-0" method="POST" id="contactForm" action="#">
                            <div class="contact-form mt-4">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                            <div id="nameError" class="error" for="name"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="mb-2">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                                            <div id="emailError" class="error" for="email"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-3">
                                        <div class="telephone form-group">
                                            <label class="mb-2">Phone</label>
                                            <input type="tel" name="number" id="number" class="telephoneInput form-control" placeholder="Your Phone Number">
                                            <input type="hidden" name="dialcode" id="dialcode">
                                            <div id="output"></div>
                                            <div id="numberError" class="error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-3">
                                        <div class="form-group section-field textarea wow fadeInUp" data-wow-duration="2.5s">
                                            <label class="mb-2">Message</label>
                                            <textarea class="input-message w-100" id="message" name="message" cols="1" placeholder="Type Your Message Here" rows="5"></textarea>
                                            <div id="messageError" class="error" for="message"></div>
                                        </div>
                                        <button id="contactSubmit" type="submit" class="button pull-right wow fadeInUp" data-wow-duration="1.0s">Send Message</button>
                                        <span id="loader"><img src="<?php echo base_url; ?>assets/images/ajax-loader.gif" alt="<?php echo app_name; ?>" /></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-bg">
                        <h2>Contact Info</h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="iq-contact text-white">
                                    <li>
                                        <i class="fa fa-phone fa-rotate-90"></i>
                                        <p><a href="tel:+919176541583">+91 9176541583</a>, <a href="tel:+6596200765">+65 96200765</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <p><a href="mailto:discover@talent-synergy.com">discover@talent-synergy.com</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <p><a href="https://calendly.com/engage-talent-synergy/30min" target="_blank">Book Your Appointment</a></p>
                                    </li>
                                    <li>
                                        <i class="fab fa-linkedin"></i>
                                        <p><a href="https://www.linkedin.com/company/talent-synergy-com/" target="_blank">Connect On LinkedIn</a></p>
                                    </li>
                                    <li>
                                        <i class="fab fa-youtube"></i>
                                        <p><a href="https://www.youtube.com/@Synergise4Talent" target="_blank">Subscribe with Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-12">
                                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d460.66426666734213!2d88.3482743!3d22.5299024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02773a23966027%3A0xb6e5e336b4d5afb1!2sGirish%20Bhavan%2C%2039%2C%20Girish%20Mukherjee%20Rd%2C%20Paddapukur%2C%20Bhowanipore%2C%20Kolkata%2C%20West%20Bengal%20700025!5e0!3m2!1sen!2sin!4v1721898106584!5m2!1sen!2sin" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "<?php echo base_url; ?>"
        },
        
        {
            "@type": "ListItem",
            "position": 2,
            "name": " Contact Us",
            "item": "<?php echo base_url . 'current-page-url'; ?>"
        }
    ]
}
</script>