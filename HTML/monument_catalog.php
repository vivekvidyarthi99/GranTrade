<?php
include "database/config.php";
if(isset($_GET['search'])){
    $search_result = $_GET['search'];
    $sql="SELECT * FROM monuments WHERE monument_name='$search_result' ";
    $result=mysqli_query($conn,$sql);
} else{
    $sql="SELECT * FROM monuments";
    $result = mysqli_query($conn,$sql);
}
?>



<html lang="en" class="no-js">
<!-- Begin Head -->
<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gran Trade Inc.- 01 </title>
    <meta name="keywords" content="Gran Trade Inc. - 01" />
    <meta name="description" content="Gran Trade Inc. - 01">
    <meta name="author" content="Rahul Patel and Vivek Vidyarthi">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Vendor Styles -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
</head>
<!-- End Head -->

<!-- Body -->
<body>

<!--========== HEADER ==========-->
<header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
    <!-- Navbar -->
    <div class="s-header__navbar">
        <div class="s-header__container">
            <div class="s-header__navbar-row">
                <div class="s-header__navbar-row-col">
                    <!-- Logo -->
                    <div class="s-header__logo">
                        <a href="index.html" class="s-header__logo-link">
                            <img class="s-header__logo-img s-header__logo-img-default" src="img/logo.png" alt="Gran Trade Inc. Logo">
                            <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logo-dark.png" alt="Gran Trade Inc. Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <div class="s-header__navbar-row-col">
                    <!-- Trigger -->
                    <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                        <span class="s-header__trigger-icon"></span>
                        <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                            <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                        </svg>
                    </a>
                    <!-- End Trigger -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- Overlay -->
    <div class="s-header-bg-overlay js__bg-overlay">
        <!-- Nav -->
        <nav class="s-header__nav js__scrollbar">
            <div class="container-fluid">
                <!-- Menu List -->
                <!--<ul class="list-unstyled s-header__nav-menu">
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="index.html">Corporate</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_app_landing.html">App Landing</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_portfolio.html">Portfolio</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_events.html">Events</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_lawyer.html">Lawyer</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_clinic.html">Clinic</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_coming_soon.html">Coming Soon</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="team.html">Portfolio</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="events.html">Specials</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="faq.html">FAQ</a></li>
                </ul> -->
                <!-- End Menu List -->

                <!-- Menu List -->
                <ul class="list-unstyled s-header__nav-menu" style = "height: 800px;">
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-font-size-18--lg" href="about.html">About</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-font-size-18--lg" href="slab_catalog.php">Slabs</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-font-size-18--lg" href="monument_catalog.php">Monuments</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-font-size-18--lg" href="tiles_catalog.php">Tiles</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider g-font-size-18--lg" href="contacts.html">Contact Us</a></li>
                </ul>
                <!-- End Menu List -->
            </div>
        </nav>
        <!-- End Nav -->

        <!-- Action
        <ul class="list-inline s-header__action s-header__action--lb">
            <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
            <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
        </ul>
        <!-- End Action -->

        <!-- Action
        <ul class="list-inline s-header__action s-header__action--rb">
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-facebook"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-twitter"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-instagram"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                </a>
            </li>
        </ul>
        <!-- End Action -->
    </div>
    <!-- End Overlay -->
</header>
<!--========== PROMO BLOCK ==========-->
<div class="g-bg-color--sky-light">
    <div class="container g-padding-y-125--xs">
        <div class="g-padding-y-50--xs">
            <h1 class="g-font-size-35--xs g-font-size-55--sm g-font-size-70--lg">Monuments</h1>
            <p class="g-font-size-22--xs g-font-size-24--md g-margin-b-0--xs">Monuments are cut and polished in our own production facility, which is based in India. The monuments support the finest quality and finish. From unique statue monuments to standard designs, the customization of these monuments is endless for ones expectations.</p>
        </div>
    </div>
</div>
<!--========== END PROMO BLOCK ==========-->
<div align="center" class="g-color--searchbar">
<form action="monument_catalog.php?=search">
    <input type="text" placeholder="Search..." name="search" id="search">
    <input type="submit" name="Submit" id="submit">
</form>
</div>


<!--========== PAGE CONTENT ==========-->
<!-- Portfolio Filter -->
<div class="container g-padding-y-100--xs">
    <div class="s-portfolio">
        <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
            <div data-filter=".GRANITE" class="s-portfolio__filter-v1-item cbp-filter-item g-font-size-30--md">Monuments</div>


        </div>
    </div>
</div>
<!-- End Portfolio Filter -->

<!-- Portfolio Gallery -->
<div class="container">
    <div id="js__grid-portfolio-gallery" class="cbp">
        <!-- Item -->

        <?php while($row=mysqli_fetch_array($result)) { ?>
            <div class="s-portfolio__item cbp-item GRANITE">
                <div class="s-portfolio__img-effect">
                    <img src="data:update/jpeg;base64, <?php echo base64_encode($row['monument_image']);?>" style="width:400px;height:400px;" >
                </div>
                <div class="s-portfolio__caption-hover--cc">
                    <div class="g-margin-b-25--xs">
                        <h2 class="g-font-size-18--xs g-color--white g-margin-b-5--xs"><?php print $row['monument_name'];?></h2>

                    </div>
                    <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                        <li>
                            <a href="data:update/jpeg;base64, <?php echo base64_encode($row['monument_image']);?>" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="<?php echo $row['monument_name']?>">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        <?php }?>
        <!-- End Item -->
    </div>
    <!-- End Portfolio Gallery -->
</div>
<!-- End Portfolio -->

<!-- Clients -->
<div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
    <!-- Swiper Clients -->


    <!-- End Swiper Clients -->
</div>
<!-- End Clients -->
<!--========== END PAGE CONTENT ==========-->

<!--========== FOOTER ==========-->
<footer class="g-bg-color--dark">
    <!-- Links -->
    <!-- Links -->
    <div class="g-hor-divider__dashed--white-opacity-lightest">
        <div class="container g-padding-y-80--xs">
            <div class="row">
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="index.html"></a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="index.html">Home</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="slab_catalog.php">Slabs</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="-"></a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="index.html"></a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="about.html">About</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="monument_catalog.php">Monuments</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="contacts.html"></a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="-">   </a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="contacts.html">Contact Us</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="tiles_catalog.php">Tiles</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                    <h3 class="g-font-size-18--xs g-color--white">Gran Trade Inc.</h3>
                    <p class="g-color--white-opacity">As a company, we aim to focus exclusively on importing the finest material at the lowest cost for our clients by means of establishing strong relationships with our suppliers. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Links -->


    <!-- Copyright -->
    <div class="container g-padding-y-50--xs">
        <div class="row">

            <div class="col-xs-4">
                <a href="index.html">
                    <img class="g-width-100--xs g-height-auto--xs" src="img/logos4.png" alt="Gran Trade Inc. Logo"></a>


                    <div class="col-xs-4">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="img/logo.png" alt="Gran Trade Inc. Logo"></a> </div>



                        <div class="col-xs-4">
                            <a href="index.html">
                                <img class="g-width-100--xs g-height-auto--xs" src="img/logo2.png" alt="Gran Trade Inc. Logo"></a> </div>
            </div>

            <div class="col-xs-7 g-text-right--xs">
                <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="index.html">Gran Trade Inc.</a> Website Powered by: <a href="http://www.gmail.com/">AVR</a></p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

<!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
<!-- Vendor -->
<script type="text/javascript" src="vendor/jquery.min.js"></script>
<script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
<script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
<script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

<!-- General Components and Settings -->
<script type="text/javascript" src="js/global.min.js"></script>
<script type="text/javascript" src="js/components/header-sticky.min.js"></script>
<script type="text/javascript" src="js/components/scrollbar.min.js"></script>
<script type="text/javascript" src="js/components/swiper.min.js"></script>
<script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
<script type="text/javascript" src="js/components/wow.min.js"></script>
<!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->
</html>
