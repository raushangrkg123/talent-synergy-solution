<?php include 'header.php'; ?>

<div class="banner-area text-small content-double shadow dark text-light bg-fixed" style="background-image: url(<?php echo base_url; ?>assets/images/banner/hero-img.webp);" aria-label="HR consultancy services">
    <div class="box-table">
        <div class="box-cell">
            <div class="container">
                <div class="row">
                    <div class="double-items">
                        <div class="info col-md-7">
                            <div class="content text-center">
                                <h1 class="hero-heading">Talent Synergy:</h1>
                                <h1> Guiding Organizations<br>for<br>Talent for Future</h1>
                                <p>Empowering Your Workforce, Elevating Your Business</p>
                                <a href="<?php echo base_url . 'about-us'; ?>" class="button mt-3">Learn More</a>
                            </div>
                        </div>
                        <div class="form col-md-4 shadow-light col-md-offset-1">
                            <div class="form-info">
                                <h2>Get In Touch</h2>
                                <div id="getintouchModalResponse"></div>
                                <form method="POST" id="getintouchForm" action="#">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Name*" type="text" id="getintouchname" name="getintouchname">
                                                <div id="getintouchnameError" class="error" for="getintouchname"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email*" type="email" id="getintouchemail" name="getintouchemail">
                                                <div id="getintouchemailError" class="error" for="getintouchemail"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="telephone form-group">
                                                <input type="tel" name="getintouchnumber" id="getintouchnumber" class="telephoneInput form-control" placeholder="Phone*">
                                                <input type="hidden" name="getintouchdialcode" id="getintouchdialcode">
                                                <div id="getintouchoutput"></div>
                                                <div id="getintouchnumberError" class="error"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Message *" id="getintouchmessage" name="getintouchmessage" type="text">
                                                <div id="getintouchmessageError" class="error" for="getintouchmessage"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <button class="button" id="getintouchSubmit" type="submit">Send your message</button>
                                            <span id="getintouchloader"><img src="<?php echo base_url; ?>assets/images/ajax-loader.gif" alt="<?php echo app_name; ?>" /></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="finding-shap about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="fully-dedicated wow slideInLeft">
                    <img src="<?php echo base_url; ?>assets/images/home/why-choose-us.webp" class="img-fluid " alt="Human Resource">
                </div>
            </div>
            <div class="col-md-6 text-left align-self-center">
                <div class="ml-3 mt-3">
                    <h2 class="title font-weight-bold">Why Choose Us</h2>
                    <p class="mt-3">Talent Synergy is a talent consulting startup dedicated to transforming people operations for CXOs. With a combined experience of over 42+ years, our founders bring together a bouquet of comprehensive people solutions across sectors. Collaboration with specialized firms, to deliver tailored solutions addressing unique client needs, is the focal point in our service-delivery model.</p>
                    <p>To add on, we invest in intensive research around futuristic people practices, addressing next level challenges ahead of time across all talent life cycle areas.</p>
                    <a class="button mt-3" href="<?php echo base_url . 'about-us'; ?>">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-provide Service-shap iq-bg-primary what-we-offer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <h2 class="title font-weight-bold">What We Offer</h2>
                    <p class="sub-title">Redefining Talent Life Cycle Management</p>
                </div>
            </div>
        </div>
        <div class="row service-list">
            <div class="col-md-12">
                <p>Talent Synergy is a dynamic talent consulting start-up founded by two passionate entrepreneurs dedicated to supporting CXO’s and in transforming their people operations. With over 40+ years of combined experience, our co-founders bring a wealth of knowledge and expertise across various sectors and segments of organizations.At Talent Synergy, we offer integrated Talent Life Cycle Management approach that sets us apart from other HR consulting firms. By collaborating with leading industry collaborators and leveraging cutting-edge AI technology, we provide a comprehensive solution that covers key aspects of talent management. Our approach considers all Talent Life Cycle stages to develop a cohesive strategy that delivers greater value. Through our network of collaborators, we ensure that our clients receive the most innovative and effective solutions available.</p>
            </div>
            <div class="col-md-6">
                <div class="fully-dedicated wow slideInLeft">
                    <img src="<?php echo base_url; ?>assets/images/home/talent-life-cycle-management.webp" class="img-fluid " alt="Human Resource solutions">
                </div>
            </div>
            <div class="col-md-6 text-left align-self-center">
                <p class="mt-3"> Our modular, plug-and-play offerings are designed to fit seamlessly into existing processes, allowing for easy customization and implementation. With AI embedded in 90% of our services, we provide data-driven insights and automation that enhance efficiency and effectiveness across the entire talent management spectrum. Whether you are looking to attract top talent, develop and manage your workforce, or retain valuable employees, Talent Synergy delivers a superior value proposition by offering a fully integrated and AI-enhanced approach to Talent Life Cycle Management. Partner with us to unlock the full potential of your organization and achieve lasting success.</p>
                <a class="button mt-3" href="<?php echo base_url . 'services'; ?>">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="get-tips-tricks tricks-shap about-area our-features">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-md-6 align-self-center">
                <div class="tips-img wow fadeIn animated bounce slower">
                    <img src="<?php echo base_url; ?>assets/images/home/our-features.webp" class="img-fluid" alt="Human Resource management">
                </div>
            </div>
            <div class="col-md-6 text-left align-self-center">
                <div class="ml-3 mt-3">
                    <h2 class="title font-weight-bold">Our Features</h2>
                    <p class="mt-3">Talent Synergy serves as an aggregator of solutions, collaborating with its partners to develop customized best practices tailored to meet the specific needs of its clients. Through these strategic partnerships, Talent Synergy ensures that organizations can access a comprehensive range of expertise and resources to address their challenges and achieve sustainable success.</p>
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a>
                                            <span>1</span> Building Skills, Building Success
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a>
                                            <span>2</span> Values First, Performance Follows
                                        </a>
                                    </h4>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a>
                                            <span>3</span> Data-Driven, Efficient HR Impact
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a>
                                            <span>4</span> Innovate: Attract, Develop, Retain
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a>
                                            <span>5</span> Empower, Inspire, Network, Succeed
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="success-stories-area iq-bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="fully-dedicated wow slideInLeft">
                    <img src="<?php echo base_url; ?>assets/images/home/success-stories.webp" class="img-fluid " alt="HR consultancy services">
                </div>
            </div>
            <div class="col-md-6 info">
                <div class="heading">
                    <h2 class="title font-weight-bold">Successful Stories</h2>
                </div>
                <div class="stories-carusel owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1">
                    <div class="item">
                        <p>The best way to sell an idea is to be a consumer yourself. Being consumers of each other, is an inherent principle within theTalent Synergy ecosystem. Curated recruitment support from badgefree to the other collaborators has seen immense success - For an opening in skillmotion.ai badgefree team recommended 1 curated profile and the candidate was successfully hired and is one of the top performers on the skillmotion.ai team</p>
                    </div>
                    <div class="item">
                        <p>Repeated business is a success story in itself. Diamondpick, a leading Talent Organization is a long-term client of Talent Synergy for various projects across People process, technology and transformation areas</p>
                    </div>
                    <div class="item">
                        <p>Supporting People Communities and Forums has been a focus area for Talent Synergy. Member engagement programs in AsiaHRM, Student engagement program through the TalentSynergy’s flagship program - Campus to Corporate, Supporting the Mentoring Programs from HRFC Singapore are the key ones</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="companies-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <h2 class="title font-weight-bold">Proud to Enlist</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 clients">
                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="5" data-items-laptop="5" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1">
                    <div class="item">
                        <div class="clients-box">
                            </div>
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/banking-and-financial-services/1.webp" alt="Human Resource" data-toggle="tooltip">
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            </div>
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/banking-and-financial-services/2.webp" alt="Human Resource" data-toggle="tooltip">
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            </div>
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/banking-and-financial-services/3.webp" alt="Human Resource" data-toggle="tooltip">
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            </div>
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/management-consulting/1.webp" alt="Human Resource" data-toggle="tooltip">
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/management-consulting/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            </div>
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/management-consulting/3.webp" alt="Human Resource" data-toggle="tooltip">
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            </div>
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/manufacturing-logistics/1.webp" alt="Human Resource" data-toggle="tooltip">
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            </div>
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/manufacturing-logistics/2.webp" alt="Human Resource" data-toggle="tooltip">
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/manufacturing-logistics/3.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/healthcare/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/healthcare/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/healthcare/3.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/real-estate-real-estate-tech​/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/real-estate-real-estate-tech​/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/real-estate-real-estate-tech​/3.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/sustainability/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/sustainability/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/retail/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/education-management/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/education-management/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/education-management/3.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/it-enabled-services/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/it-enabled-services/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/it-enabled-services/3.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/travel-and-hospitality/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/it-software/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/it-software/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/it-software/3.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/internet-and-digital/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/internet-and-digital/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/internet-and-digital/3.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/media-and-entertainment/1.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                    <div class="item">
                        <div class="clients-box">
                            <img class="img-fluid client-img" src="<?php echo base_url; ?>assets/images/clients/media-and-entertainment/2.webp" alt="Human Resource" data-toggle="tooltip">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php /*<section class="testimonials-area iq-bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <h2 class="title font-weight-bold">Customer Review</h2>
                    <p class="sub-title">What people say about us</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="testimonial-items owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1">
                        <div class="testimonial-item">
                            <div class="thumb col-md-4">
                                <img src="<?php echo base_url; ?>assets/images/testomonial/01.webp" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="info col-md-8">
                                <div class="content">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Bubhan Kritha</h4>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="thumb col-md-4">
                                <img src="<?php echo base_url; ?>assets/images/testomonial/02.webp" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="info col-md-8">
                                <div class="content">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Junl Sarukh</h4>
                                    <span>Software Engineer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="thumb col-md-4">
                                <img src="<?php echo base_url; ?>assets/images/testomonial/03.webp" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="info col-md-8">
                                <div class="content">
                                    <p>
                                        Understood instrument or do connection no appearance do invitation. Dried quick round it or order. Add past see west felt did any. plate you share. My resolve arrived is we chamber be removal.
                                    </p>
                                    <h4>Makhon Daino</h4>
                                    <span>Compnay Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section> */ ?>


<section class="iq-blog insight-list iq-bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <h2 class="title font-weight-bold">Insights That Impacts</h2>
                    <p class="sub-title">Narratives that share our personal experiences, reflections, and journeys.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="3" data-items-laptop="3" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1">
                  
                    <?php /* <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/driving-success-with-talent-management-solutions.webp" class="img-fluid center-block" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/driving-success-with-talent-management-solutions'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/driving-success-with-talent-management-solutions'; ?>" rel="bookmark">December 26, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/driving-success-with-talent-management-solutions'; ?>">
                                        <h6>🌟 Driving Success with Talent Management Solutions 🌟</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>In today’s evolving workplace, <strong>Talent Management Solutions</strong> are essential for any business looking to attract,</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/driving-success-with-talent-management-solutions'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/the-future-of-work-redefining-workplaces-workforces-and-careers.webp" class="img-fluid center-block" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/the-future-of-work-redefining-workplaces-workforces-and-careers'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/the-future-of-work-redefining-workplaces-workforces-and-careers'; ?>" rel="bookmark">December 19, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/the-future-of-work-redefining-workplaces-workforces-and-careers'; ?>">
                                        <h6>The Future of Work: Redefining Workplaces, Workforces, and Careers</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>The concept of work has always evolved alongside technological and societal shifts.</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/the-future-of-work-redefining-workplaces-workforces-and-careers'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>*/ ?>
                
                  
                <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/talent-lifecycle-optimization.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/talent-lifecycle-optimization'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Prathna Karmakar</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/talent-lifecycle-optimization'; ?>" rel="bookmark">January 29, 2025</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/talent-lifecycle-optimization'; ?>">
                                        <h6>Talent Lifecycle Optimization: Enhancing Workforce Efficiency</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>Talent lifecycle optimization is a strategic approach that streamlines every phase of the employee journey.</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/talent-lifecycle-optimization.php'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                </div>

               
                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/what-is-generative-ais-impact-on-humans.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/what-is-generative-ais-impact-on-humans'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/what-is-generative-ais-impact-on-humans'; ?>" rel="bookmark">December 12, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/what-is-generative-ais-impact-on-humans'; ?>">
                                        <h6>What is Generative AI’s Impact on Humans? Shaping the Workforce of the Future</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>In the ever-evolving landscape of work and technology, Generative AI stands as a transformative force.</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/what-is-generative-ais-impact-on-humans'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/the-talent-trinity.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/the-talent-trinity'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/the-talent-trinity'; ?>" rel="bookmark">December 05, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/the-talent-trinity'; ?>">
                                        <h6>The Talent Trinity: Attract, Engage, Retain with Data-Driven Precision</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>🎯 <strong>Attract. Engage. Retain. Repeat.</strong> That's the winning formula for building an unstoppable talent strategy! 🚀</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/the-talent-trinity'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/aligning-values-for-organizational-success.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/aligning-values-for-organizational-success'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/aligning-values-for-organizational-success'; ?>" rel="bookmark">November 28, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/aligning-values-for-organizational-success'; ?>">
                                        <h6>Aligning Values for Organizational Success</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>Focus and deep-research has been the focus of Talent Synergy right from the early days of it's inception.</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/aligning-values-for-organizational-success'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/the-power-of-hr-consulting-for-small-and-mid-sized-businesses.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/the-power-of-hr-consulting-for-small-and-mid-sized-businesses'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/the-power-of-hr-consulting-for-small-and-mid-sized-businesses'; ?>" rel="bookmark">November 21, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/the-power-of-hr-consulting-for-small-and-mid-sized-businesses'; ?>">
                                        <h6>🌟 The Power of HR Consulting for Small and Mid-Sized Businesses 🌟</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>For small and mid-sized businesses, <strong>HR Consulting</strong> can be a strategic advantage, transforming HR from a back-office function to a driver of growth and stability.</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/the-power-of-hr-consulting-for-small-and-mid-sized-businesses'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/leveraging-corporate-branding-for-talent-attraction.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/leveraging-corporate-branding-for-talent-attraction'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/leveraging-corporate-branding-for-talent-attraction'; ?>" rel="bookmark">November 14, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/leveraging-corporate-branding-for-talent-attraction'; ?>">
                                        <h6>🌟 Leveraging Corporate Branding for Talent Attraction 🌟</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>In today’s job market, <strong>corporate branding</strong> plays a crucial role in attracting top talent.</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/leveraging-corporate-branding-for-talent-attraction'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/enhancing-your-employer-value-proposition-evp.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/enhancing-your-employer-value-proposition-evp'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/enhancing-your-employer-value-proposition-evp'; ?>" rel="bookmark">November 07, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/enhancing-your-employer-value-proposition-evp'; ?>">
                                        <h6>🌟 Enhancing Your Employer Value Proposition (EVP): Attracting and Retaining Top Talent 🌟</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>An <strong>Employer Value Proposition (EVP)</strong> is what makes your company stand out as an employer of choice.</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/enhancing-your-employer-value-proposition-evp'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/the-art-of-talent-strategy.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/the-art-of-talent-strategy'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/the-art-of-talent-strategy'; ?>" rel="bookmark">October 31, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/the-art-of-talent-strategy'; ?>">
                                        <h6>The Art of Talent Strategy: A Comprehensive Framework for Success</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>In today's fast-paced business environment, developing and retaining top talent has become a cornerstone of organizational success.</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/the-art-of-talent-strategy'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item ml-3">
                        <div class="iq-blog-box">
                            <div class="iq-blog-image clearfix">
                                <img src="<?php echo base_url; ?>assets/images/insights/the-futuristic-role-of-hr-and-resources-for-successful-implementation.webp" class="img-fluid center-block" alt="HR consultancy services">
                            </div>
                            <div class="iq-blog-detail">
                                <div class="iq-blog-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="<?php echo base_url . 'insights/the-futuristic-role-of-hr-and-resources-for-successful-implementation'; ?>" class="iq-user"><i class="fa fa-user" aria-hidden="true"></i> Talent Synergy</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <a href="<?php echo base_url . 'insights/the-futuristic-role-of-hr-and-resources-for-successful-implementation'; ?>" rel="bookmark">October 24, 2024</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-title equal-height">
                                    <a href="<?php echo base_url . 'insights/the-futuristic-role-of-hr-and-resources-for-successful-implementation'; ?>">
                                        <h6>The Futuristic Role of HR and Resources for Successful Implementation</h6>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <p>As organizations continue to evolve in response to changing market demands, technological advancements, and the new dynamics of the workforce,</p>
                                </div>
                                <div class="blog-button"><a class="button" href="<?php echo base_url . 'insights/the-futuristic-role-of-hr-and-resources-for-successful-implementation'; ?>">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="iq-contactbox home-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <h2 class="title font-weight-bold">Contact Us</h2>
                    <p class="sub-title">Feel free to get in touch with us for any inquiries, support, or to discuss how we can assist you with your needs.</p>
                </div>
            </div>
        </div>
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
                                    <span id="loader"><img src="<?php echo base_url; ?>assets/images/ajax-loader.gif" alt="HR consultancy services" /></span>
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

<?php include 'footer.php'; ?>