<?php include '../header.php'; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-nowrap">
            <div class="col-lg-6 col-md-6  col-sm-12 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">HR Tech & Data Focus</h2>
                <p class="mt-3">Next level HR :Digital, Automated, Data-Driven</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url. 'services'; ?>"><i class="fa fa-cogs" aria-hidden="true"></i> Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">HR Tech & Data Focus</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-md-6  col-sm-12 wow fadeInRight">
                <img src="<?php echo base_url; ?>assets/images/services/03.webp" class="img-fluid iq-pr-50" alt="<?php echo app_name; ?>">
            </div>
        </div>
    </div>
</section>

<section class="we-offer-area text-center">
    <div class="container">
        <div class="row our-offer-items less-carousel service-list">
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-customer-service"></i>
                    <h4>HR Systems</h4>
                    <p>
                    Reviewing, implementing, and managing HR Information Systems (HRIS).
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-analysis"></i>
                    <h4>Automation</h4>
                    <p>
                    Streamlining HR processes and improving efficiency through automation.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-cloud-computing"></i>
                    <h4>HR Data Architecture</h4>
                    <p>
                    Auditing and streamlining HR systems and data for analytics and metrics building.
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
            "item": "<?php echo base_url . 'services/HR Tech & Data Focus'; ?>"
        }
    ]
}
</script>