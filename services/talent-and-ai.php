<?php include '../header.php'; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-nowrap">
            <div class="col-lg-6 col-md-6  col-sm-12 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Talent and AI</h2>
                <p class="mt-3">Influencer dynamics, Empower Networks, AI Readiness.</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url. 'services'; ?>"><i class="fa fa-cogs" aria-hidden="true"></i> Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Talent and AI</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-md-6  col-sm-12 wow fadeInRight">
                <img src="<?php echo base_url; ?>assets/images/services/05.webp" class="img-fluid iq-pr-50" alt="<?php echo app_name; ?>">
            </div>
        </div>
    </div>
</section>

<section class="we-offer-area text-center">
    <div class="container">
        <div class="row our-offer-items less-carousel service-list">
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-start"></i>
                    <h4>Network Synergy & Influencer Analytics</h4>
                    <p>
                    Visualize enterprise networks to identify influencers, fostering communities of practice around key areas like DEIB, Sales, Growth, and Innovation.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-television"></i>
                    <h4>Sentiment Analysis & Engagement</h4>
                    <p>
                    Identify and engage key influencers within each community to champion new ideas and change initiatives.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-conversation"></i>
                    <h4>Ai in HR</h4>
                    <p>
                    Empower talent leaders to integrate AI in HR, ensuring data readiness, model fairness, and effective machine learning implementation for HR operations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../footer.php'; ?>



<!-- Structured Data for Breadcrumbs -->
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
            "name": "Services",
            "item": "<?php echo base_url . 'services'; ?>"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Talent Development",
            "item": "<?php echo base_url . 'services/Talent and AI'; ?>"
        }
    ]
}
</script>