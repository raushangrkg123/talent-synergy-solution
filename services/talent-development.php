<?php include '../header.php'; ?>
<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-nowrap">
            <div class="col-lg-6 col-md-6  col-sm-12 text-left align-self-center">
                <h2 class="mt-3 font-weight-bold">Talent Development</h2>
                <p class="mt-3">Skill audit, Learning Labs, Skilltech revolution</p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url. 'services'; ?>"><i class="fa fa-cogs" aria-hidden="true"></i> Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Talent Development</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-md-6  col-sm-12 wow fadeInRight">
                <img src="<?php echo base_url; ?>assets/images/services/01.webp" class="img-fluid iq-pr-50" alt="<?php echo app_name; ?>">
            </div>
        </div>
    </div>
</section>

<section class="we-offer-area text-center">
    <div class="container">
        <div class="row our-offer-items less-carousel service-list">
            <div class="col-md-4 col-sm-6 ">
                <div class="item equal-height">
                    <i class="flaticon-briefing"></i>
                    <h4>Skill/Capability Gaps & Career Pathways</h4>
                    <p>
                    Identifying gaps and establishing career development pathways.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-analysis-1"></i>
                    <h4>Upskilling and Reskilling</h4>
                    <p>
                    Creating programs to develop internal talent and address skill gaps.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item equal-height">
                    <i class="flaticon-collaboration"></i>
                    <h4>Skill-Based Learning Labs</h4>
                    <p>
                    Simulation-driven learning labs for situational, scenario-based learning.
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
            "item": "<?php echo base_url . 'services/talent-development'; ?>"
        }
    ]
}
</script>