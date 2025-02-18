<?php include '../header.php'; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-nowrap">
            <div class="col-lg-6 col-md-6  col-sm-12 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Organization Culture</h2>
                <p class="mt-3">Culture Assessments, Develop Leaders, Ethics Workshops</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url. 'services'; ?>"><i class="fa fa-cogs" aria-hidden="true"></i> Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Organization Culture</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-md-6  col-sm-12 wow fadeInRight">
                <img src="<?php echo base_url; ?>assets/images/services/02.webp" class="img-fluid iq-pr-50" alt="<?php echo app_name; ?>">
            </div>
        </div>
    </div>
</section>

<section class="we-offer-area text-center">
    <div class="container">
        <div class="row our-offer-items less-carousel service-list">
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-sketch"></i>
                    <h4>Culture Assessments</h4>
                    <p>
                    Rolling out assessments for new hires, first-time managers, and leadership roles.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-develop"></i>
                    <h4>Culture Building Activities</h4>
                    <p>
                    Organizing events and initiatives to strengthen organizational culture.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-value"></i>
                    <h4>Leadership Development</h4>
                    <p>
                    Training leaders through mentoring and coaching interventions.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-team"></i>
                    <h4>Workshops on Human Values & Business Ethics</h4>
                    <p>
                    Fostering positive and inclusive culture through knowledge sharing.
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
            "item": "<?php echo base_url . 'services/Organization Culture'; ?>"
        }
    ]
}
</script>