<?php include '../header.php'; ?>
<style>
    .hr-line {
        margin: 1rem auto;
        width: 50%;
        border-top: 3px solid rgb(0, 0, 0);
        opacity: 100%;
    }

    .btn-custom {
        border-radius: 50px;
    }
</style>

<section class="iq-breadcrumb text-left grey-bg">
    <div class="container">
        <div class="row flex-nowrap">
            <div class="col-lg-6 col-md-6  col-sm-12 text-left align-self-center">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url . 'services'; ?>"><i class="fa fa-cogs" aria-hidden="true"></i> Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">HR Consultancy Services</li>
                    </ol>
                </nav>
                <h1 class="mt-3 font-weight-bold">This is title</h1>
                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque corrupti, corporis soluta maiores voluptatem nihil quidem ex. Error, beatae illo!</p>
            </div>
            <div class="col-lg-6 col-md-6  col-sm-12 wow fadeInRight">
                <img src="<?php echo base_url; ?>assets/images/services/hr-consultancy.webp" class="img-fluid iq-pr-50" alt="HR consultancy services">
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="container">
    <div class="row">
        <h2>this is h2</h2>
        <p>Our service stands out because of our dedication to quality and customer satisfaction. We ensure every detail
            is taken care of, offering unmatched reliability and expertise.</p>

        <h3 class="mt-4 ">this is h3</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, aut magni praesentium reiciendis officiis
            iusto impedit quibusdam quidem animi, libero rerum sint tempora laboriosam? Ipsam sapiente animi fuga illo
            odio?</p>
    </div>
</section>

<!-- FAQ Section -->
<div class="container-fluid">
    <div class="col-md-12 text-left align-self-center">
        <div class="">
            <h2 class="title font-weight-bold mb-3 text-center">Question & Answer</h2>
            <div class="acd-items acd-arrow">
                <div class="panel-group symb" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                    <span>1</span> How does Talent Synergy approach talent development within organizations?
                                </a>
                            </h4>
                        </div>
                        <div id="ac1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Talent Synergy identifies skill and capability gaps, crafts career development pathways, and focuses on upskilling and reskilling through simulation-driven learning labs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                    <span>2</span> What is Talent Synergy’s approach to delivering client-centric solutions?
                                </a>
                            </h4>
                        </div>
                        <div id="ac2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    Talent Synergy conducts thorough capability audits, establishes robust frameworks for offerings, and meticulously matches curated collaborator offerings with clients needs to maximize relevance and effectiveness.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                    <span>3</span> How does your collaborator-driven ecosystem work?
                                </a>
                            </h4>
                        </div>
                        <div id="ac3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We collaborate with a curated network of collaborators, allowing us to offer integrated solutions that precisely match your unique needs. Each collaborator brings specialized capabilities to the table for comprehensive results.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                    <span>4</span> How can you help us improve our HR operations
                                </a>
                            </h4>
                        </div>
                        <div id="ac4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We review, implement, and manage HR Information Systems (HRIS), streamline processes through automation, and optimize HR data architecture for insightful analytics. This enables data-driven decision-making and operational efficiency.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac5">
                                    <span>5</span> How does Talent Synergy ensure the effectiveness of its solutions in addressing business demands?
                                </a>
                            </h4>
                        </div>
                        <div id="ac5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Talent Synergy cultivates strong relationships with collaborators, actively influences their offerings, and collaborates to deliver solutions that are impactful and aligned with evolving business demands.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac6">
                                    <span>6</span> How can we get started ?
                                </a>
                            </h4>
                        </div>
                        <div id="ac6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>You can start by letting us know your preference - <a href="https://bit.ly/ConnectwithTS" target="_blank">https://bit.ly/ConnectwithTS</a></p>
                                <p>Please fill the form and we will reach out to you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Our other services  -->
<div class="container mt-5  text-center bg-light">
    <h2 class="font-weight-bold">Our other services</h2>
    <hr class=" hr-line">
    <div class="row ">
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">HR consultancy services</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">Human Resource</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">Human Resource solutions</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">Human Resource management</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">Fractional CHRO</a>
        </div>

    </div>
</div>


<!-- Other Cities Section -->
<div class="container my-5  text-center bg-light">
    <h2 class="font-weight-bold">Other cities that we are present in</h2>
    <hr class=" hr-line">
    <div class="row ">
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">Chennai</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">Bangalore</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">Hyderabad</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer">Pune</a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="https://example.com" class="btn btn-custom text-white button fw-bold w-100" target="_blank" rel="noopener noreferrer"> Kolkata</a>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
                "@type": "BreadcrumbList",
                "itemListElement": [{
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "<?php echo base_url; ?>"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Service",
                        "item": "<?php echo base_url . 'services'; ?>"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "Service Page",
                        "item": "<?php echo base_url . 'services/HR Consultancy Services'; ?>"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [{
                        "@type": "Question",
                        "name": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, dolorem.?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptatibus."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How can I get started?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Getting started is easy. Just contact us, and we will guide you through the process."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, dolorem.?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, voluptatibus."
                        }
                    }
                ]
            }
        ]
    }
</script>