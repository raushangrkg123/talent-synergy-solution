<?php
session_start();
include 'initialize.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $metaUrl; ?>" />
    <title><?php echo $metaTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>" />
    <meta name="keywords" content="<?php echo $metaKeywords; ?>" />

    <meta property="og:title" content="<?php echo $metaOgTitle; ?>" />
    <meta property="og:description" content="<?php echo $metaOgDescription; ?>" />
    <meta property="og:image" content="<?php echo $metaOgImage; ?>" />
    <meta property="og:image:alt" content="<?php echo $metaOgImageAlt; ?>" />
    <meta property="og:url" content="<?php echo $metaUrl; ?>" />
    <meta property="og:type" content="<?php echo $metaOgType; ?>" />
    <meta property="og:site_name" content="<?php echo $metaOgSiteName; ?>" />
    
    <meta name="twitter:card" content="<?php echo $metaTwitterCard; ?>" />
    <meta name="twitter:title" content="<?php echo $metaTwitterTitle; ?>" />
    <meta name="twitter:description" content="<?php echo $metaTwitterDescription; ?>" />
    <meta name="twitter:image" content="<?php echo $metaTwitterImage; ?>" />
    <meta name="twitter:image:alt" content="<?php echo $metaTwitterImageAlt; ?>" />
    <meta name="twitter:site" content="<?php echo $metaTwitterSite; ?>" />

    <link rel="icon" href="<?php echo base_url; ?>assets/images/logo-icon.webp" type="image/webp" sizes="16x16" />
    <link rel="alternate" hreflang="en" href="<?php echo $metaUrl; ?>" />
    <link rel="alternate" hreflang="en-us" href="<?php echo $metaUrlUs; ?>" />
    <link rel="alternate" hreflang="en-gb" href="<?php echo $metaUrlUk; ?>" />

    <link rel="stylesheet" href="<?php echo base_url; ?>assets/css/bootstrap.min.css">
    <?php if (!empty($currentPath) && ($currentPath == 'about-us')) { ?>
        <link rel="stylesheet" href="<?php echo base_url; ?>assets/css/timeline.css">
    <?php } ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>assets/css/responsive.css">
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5W3NZB5SGE"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-5W3NZB5SGE');
    </script>
</head>

<body>
    <div id="loading">
        <div id="loading-center">
            <img src="<?php echo base_url; ?>assets/images/loader.gif" alt="<?php echo app_name; ?>">
        </div>
    </div>
    <header>
        <div class="container-fluid main-header">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url; ?>">
                            <img src="<?php echo base_url; ?>assets/images/talent-synergy-solutions-logo.webp" class="img-fluid logo" alt="<?php echo app_name; ?>">
                            <img src="<?php echo base_url; ?>assets/images/talent-synergy-solutions-logo.webp" class="img-fluid logo-white" alt="<?php echo app_name; ?>">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item <?php if (!empty($currentPath) && ($currentPath == 'index') || (empty($currentPath))) { ?>active<?php } ?>">
                                    <a href="<?php echo base_url; ?>" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item <?php if (!empty($currentPath) && ($currentPath == 'about-us')) { ?>active<?php } ?>">
                                    <a href="<?php echo base_url . 'about-us'; ?>" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item <?php if (!empty($currentPath) && ($currentPath == 'services')) { ?>active<?php } ?>">
                                    <a href="<?php echo base_url . 'services'; ?>" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item <?php if (!empty($currentPath) && ($currentPath == 'collaborators')) { ?>active<?php } ?>">
                                    <a href="<?php echo base_url . 'collaborators'; ?>" class="nav-link">Collaborators</a>
                                </li>
                                <li class="nav-item <?php if (!empty($currentPath) && ($currentPath == 'insights')) { ?>active<?php } ?>">
                                    <a href="<?php echo base_url . 'insights'; ?>" class="nav-link">Insights</a>
                                </li>
                                <li class="nav-item <?php if (!empty($currentPath) && ($currentPath == 'contact-us')) { ?>active<?php } ?>">
                                    <a href="<?php echo base_url . 'contact-us'; ?>" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>