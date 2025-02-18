<?php include 'header.php'; ?>
<section class="iq-breadcrumb text-left green-bg">
    <div class="container">
        <div class="row flex-nowrap">
            <div class="col-lg-6 col-md-6 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Collaborators</h2>
                <p class="mt-3">Our esteemed collaborators are integral to our success, bringing a wealth of expertise, innovation, and perspective to our projects</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Collaborators</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInRight">
                <img src="<?php echo base_url; ?>assets/images/breadcrumb/partner.webp" class="img-fluid iq-pr-50" alt="<?php echo app_name; ?>">
            </div>
        </div>
    </div>
</section>
<section class="meet-founders">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <h2 class="title font-weight-bold">Meet The Collaborators</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-6 col-sm-6 equal-height text-center">
                        <div class="item">
                            <div class="icon">
                                <img src="<?php echo base_url; ?>assets/images/collaborators/skill-motion-ai.webp" class="img-fluid mb-4 mt-4" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="info">
                                <h4>SkillMotion.ai</h4>
                                <p>
                                    Revolutionizing reskilling through Skilltech
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 equal-height text-center">
                        <div class="item">
                            <div class="icon">
                                <img src="<?php echo base_url; ?>assets/images/collaborators/nuest.webp" class="img-fluid mt-4 mb-4" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="info">
                                <h4>Nuest Consulting</h4>
                                <p>
                                    Unlocking Business Results through Process, People, & Tech
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-5 equal-height text-center">
                        <div class="item">
                            <div class="icon">
                                <img src="<?php echo base_url; ?>assets/images/collaborators/badgefree.webp" class="img-fluid mt-4 mb-4" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="info">
                                <h4>Badgefree</h4>
                                <p>
                                    World’s foremost Talent Market Exchange
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-5 equal-height text-center">
                        <div class="item">
                            <div class="icon">
                                <img src="<?php echo base_url; ?>assets/images/collaborators/hrness-ai.webp" class="img-fluid mt-4 mb-4" alt="<?php echo app_name; ?>">
                            </div>
                            <div class="info">
                                <h4>HRNess.ai</h4>
                                <p>
                                    Activating Intelligence, De-Mystifying AI
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
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
            "name": "Collaborators",
            "item": "<?php echo base_url . 'current-page-url'; ?>"
        }
    ]
}
</script>