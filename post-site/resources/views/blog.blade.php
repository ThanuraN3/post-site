@extends('body.master')

@section('content')


            
            <!-- nav bar start -->
            <section class="nav-bar"> 
                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div text-lg-start text-centerd>
                                <img src="{{ asset('images/unikey-logo.png') }} " class="navbar-brand">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="three col" id="three-col">
                                <div class="hamburger" id="hamburger-1" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                                </div>
                            </div>
                            <ul>
                                <li class="nav-items">
                                    <a href="promotion.html" class="nav-link">Promotions</a>
                                </li>
                                <li class="nav-items active">
                                    <a href="blog.html" class="nav-link">EMagazines</a>
                                </li>
                                <li class="nav-items">
                                    <a href="contactus.html" class="nav-link">Contact Us</a>
                                </li>
                                <li class="nav-items">
                                    <a href="#" class="nav-link"><i class="bi bi-search"></i></a>
                                </li>
                            </ul>
                        </div>    
                    </div>    
                </div>  
                <script>
                    $(document).ready(function(){
                $(".hamburger").click(function(){
                    $(this).toggleClass("is-active");
                });
                });
                </script>      
            </section>

            <section class="topnavbar-section">
                <div class="container">
                    <div class="row align-items-center">    
                        <div class="col-lg-8">
                        <nav class="navbar navbar-expand-lg navbar-expand-xxl pb-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-lg-8 py-2">
                                <li class="nav-item">
                                    <a class="nav-link" id="navbaritems" aria-current="page" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="navbaritems" aria-current="page" href="aboutUs.html">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="navbaritems" aria-current="page" href="ourteam.html">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="navbaritems" aria-current="page" href="Educationservice.html">Education Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="navbaritems" aria-current="page" href="migrationservice.html">Migration Services</a>
                                </li>
                                </ul>
                                </div>
                        
                        </nav>
                        </div>
                        
                    <div class="col-lg-4 text-end">   
                        <div>
                            <a class="apply" href="#">APPLY NOW &nbsp;<i class="bi bi-pen-fill" id="navbar-apply-icon"></i></a>
                        </div>
                    </div>  
                    </div>
                </div>
            </section> 


{{-- ................................................................................................................................ --}}

            <div class="frontpage-slider-posts mrb-30">
                <div class="container-medium">
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel frontpage-slider-one style-two carousel-rectangle carousel-nav-center">
                                <article class="post hentry post-slider-two text-center">
                                    <div class="entry-thumb">
                                        <figure class="thumb-wrap">
                                            <a href="single-post.html">
                                                <img src="{{ asset('images/blog/post1.jpg') }} " alt="post" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="content-entry-wrap-overlay">
                                        <div class="content-entry-wrap">

                                            <h3 class="entry-title">
                                                <a href="single-post.html">The Olivier da Costa restaurant
                                                    experience in Lisbon</a>
                                            </h3>

                                            <div class="entry-content">
                                                <div class="read-more-wrap">
                                                    <a class="read-more" href="single-post.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


{{-- ................................................................................................................................ --}}

<div class="features-block style-two mrb-70">
    <div class="container-medium">
        <div class="row feature-list feature-list-one">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-item text-center style-two">
                    <div class="feature-thumb">
                        <img src="{{ asset('images/blog/feature2-post1.jpg') }}" alt="feature" />
                    </div>
                    <div class="feature-info">
                        <h3 class="title">
                            <a href="#">Photo Stories</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-item text-center style-two">
                    <div class="feature-thumb">
                        <img src="{{ asset('images/blog/feature2-post2.jpg') }}" alt="feature" />
                    </div>
                    <div class="feature-info">
                        <h3 class="title">
                            <a href="#">Follow @ Instagram</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-item text-center style-two">
                    <div class="feature-thumb">
                        <img src="{{ asset('images/blog/feature2-post3.jpg') }}" alt="feature" />
                    </div>
                    <div class="feature-info">
                        <h3 class="title">
                            <a href="#">Browse Shop</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- .................................................................................................................. --}}


<div class="main-wrapper">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 main-wrapper-content">
                <main class="site-main">
                    <article class="post hentry style-two">
                        <div class="entry-thumb">
                            <figure class="thumb-wrap">
                                <a href="single-post.html">
                                    <img src="{{ asset('images/blog/post3.jpg') }} " alt="post" />
                                </a>
                            </figure>
                        </div>
                        <div class="content-entry-wrap">
                            <div class="entry-category">
                                <a class="cat" href="#">Design</a>
                                <a class="cat" href="#">Travel</a>
                                <a class="cat" href="#">Photography</a>
                                <a class="cat" href="#">Nature</a>
                            </div>
                            <h3 class="entry-title">
                                <a href="single-post.html">
                                    Dating While Studying Abroad—Maximize Fun, Minimize
                                    Heartbreak
                                </a>
                            </h3>
                            <div class="entry-meta-content">
                                <div class="entry-author">
                                    By <a href="#">Zohan Alex</a>
                                </div>
                                <div class="entry-date">
                                    On <span>Jan23 - 20</span>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-summary">
                                    <p>
                                        When it comes to creating is a website for your
                                        business, an attractive design will only get you
                                        far. With people increasingly using their tablets
                                        and smartphones and website for your business shop
                                        online,...
                                    </p>
                                </div>
                                <div class="read-more-wrap">
                                    <a class="read-more" href="single-post.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="row masonry-posts">
                        <div class="col-lg-6 col-md-6 grid-item">
                            <article class="post hentry post-grid style-two">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="single-post.html">
                                            <img src="{{ asset('images/blog/grid/post1.jpg') }} " alt="post" />
                                        </a>
                                    </figure>
                                </div>
                                <div class="content-entry-wrap">
                                    <div class="entry-category">
                                        <a class="cat" href="#">Design</a>
                                        <a class="cat" href="#">Travel</a>
                                        <a class="cat" href="#">Photography</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="single-post.html">Best WordPress Theme of 2021</a>
                                    </h3>
                                    <div class="entry-meta-content">
                                        <div class="entry-author">
                                            By <a href="#">Zohan Alex</a>
                                        </div>
                                        <div class="entry-date">
                                            On <span>Jan23 - 20</span>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-summary">
                                            <p>
                                                When it comes to creating is a website for your
                                                business, an attractive design will only get you
                                                far. With people increasingly using their tablets
                                                and smartph
                                            </p>
                                        </div>
                                        <div class="read-more-wrap">
                                            <a class="read-more" href="single-post.html">Read More</a>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>

                        <div class="col-lg-6 col-md-6 grid-item">
                            <article class="post hentry post-grid style-two">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="single-post.html">
                                            <img src="{{ asset('images/blog/grid/post2.jpg') }} " alt="post" />
                                        </a>
                                    </figure>

                                </div>

                                <div class="content-entry-wrap">
                                    <div class="entry-category">
                                        <a class="cat" href="#">Design</a>
                                        <a class="cat" href="#">Travel</a>
                                        <a class="cat" href="#">Photography</a>
                                    </div>

                                    <h3 class="entry-title">
                                        <a href="single-post.html">Nature Photography Best Focus</a>
                                    </h3>

                                    <div class="entry-meta-content">
                                        <div class="entry-author">
                                            By <a href="#">Zohan Alex</a>
                                        </div>

                                        <div class="entry-date">
                                            On <span>Jan23 - 20</span>
                                        </div>

                                    </div>

                                    <div class="entry-content">
                                        <div class="entry-summary">
                                            <p>
                                                When it comes to creating is a website for your
                                                business, an attractive design will only get you
                                                far. With people increasingly using their tablets
                                                and smartph
                                            </p>
                                        </div>
                                        <div class="read-more-wrap">
                                            <a class="read-more" href="single-post.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6 col-md-6 grid-item">
                            <article class="post hentry post-grid style-two">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="single-post.html">
                                            <img src="{{ asset('images/blog/grid/post3.jpg') }}" alt="post" />
                                        </a>
                                    </figure>
                                </div>
                                <div class="content-entry-wrap">
                                    <div class="entry-category">
                                        <a class="cat" href="#">Design</a>
                                        <a class="cat" href="#">Travel</a>
                                        <a class="cat" href="#">Photography</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="single-post.html">Best WordPress Theme of 2021</a>
                                    </h3>
                                    <div class="entry-meta-content">
                                        <div class="entry-author">
                                            By <a href="#">Zohan Alex</a>
                                        </div>

                                        <div class="entry-date">
                                            On <span>Jan23 - 20</span>
                                        </div>

                                    </div>

                                    <div class="entry-content">
                                        <div class="entry-summary">
                                            <p>
                                                When it comes to creating is a website for your
                                                business, an attractive design will only get you
                                                far. With people increasingly using their tablets
                                                and smartph
                                            </p>
                                        </div>
                                        <div class="read-more-wrap">
                                            <a class="read-more" href="single-post.html">Read More</a>
                                        </div>
                                    </div>

                                </div>

                            </article>
                        </div>

                        <div class="col-lg-6 col-md-6 grid-item">
                            <article class="post hentry post-grid style-two">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="single-post.html">
                                            <img src="{{ asset('images/blog/grid/post4.jpg') }}" alt="post" />
                                        </a>
                                    </figure>

                                </div>

                                <div class="content-entry-wrap">
                                    <div class="entry-category">
                                        <a class="cat" href="#">Design</a>
                                        <a class="cat" href="#">Travel</a>
                                        <a class="cat" href="#">Photography</a>
                                    </div>
                                    <h3 class="entry-title">
                                        <a href="single-post.html">Nature Photography Best Focus</a>
                                    </h3>
                                    <div class="entry-meta-content">
                                        <div class="entry-author">
                                            By <a href="#">Zohan Alex</a>
                                        </div>
                                        <div class="entry-date">
                                            On <span>Jan23 - 20</span>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-summary">
                                            <p>
                                                When it comes to creating is a website for your
                                                business, an attractive design will only get you
                                                far. With people increasingly using their tablets
                                                and smartph
                                            </p>
                                        </div>
                                        <div class="read-more-wrap">
                                            <a class="read-more" href="single-post.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </main>
                <nav class="navigation paging-navigation style-one pd-t-15">
                    <ul class="nav-links">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#" class="page-numbers">2</a></li>
                        <li><a href="#" class="page-numbers">3</a></li>
                        <li class="nav-next">
                            <a href="#"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-items style-two">
                    <aside class="widget bt-about-me-widget">
                        <h4 class="widget-title">
                            About Unikey
                        </h4>
                        <div class="widget-content">
                            <div class="author-thumb">
                                <a href="#"><img src="{{ asset('images/unikey-logo.png') }}" alt="img" /></a>
                            </div>
                            <div class="info">
                                <h3 class="designation">Writer & Photographer</h3>
                                <p>
                                    When it comes to creating is a website for your
                                    business, an attractive design
                                </p>
                                <div class="author-sign">
                                    <img src="{{ asset('images/blog/signature.png') }}" alt="img" />
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget bt-socail-widget">
                        <h4 class="widget-title">
                            Social
                        </h4>
                        <div class="widget-content">
                            <div class="bt-socail-profile">
                                <a class="bt-facebook-icon icon" href="#" target="_blank">
                                    <span class="social-icon">
                                        <i class="fab fa-facebook-square"></i>
                                    </span>
                                    <span class="bt-name">facebook</span>
                                </a>
                            </div>

                            <div class="bt-socail-profile">
                                <a class="bt-twitter-icon icon" href="#" target="_blank">
                                    <span class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                    <span class="bt-name">twitter</span>
                                </a>
                            </div>

                            <div class="bt-socail-profile">
                                <a class="bt-linkedin-icon icon" href="#" target="_blank">
                                    <span class="social-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </span>
                                    <span class="bt-name">linkedin</span>
                                </a>
                            </div>

                            <div class="bt-socail-profile">
                                <a class="bt-youtube-icon icon" href="#" target="_blank">
                                    <span class="social-icon">
                                        <i class="fab fa-youtube"></i>
                                    </span>
                                    <span class="bt-name">youtube</span>
                                </a>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-post-list">
                        <h4 class="widget-title">Recent Post</h4>

                        <div class="widget-content">
                            <article class="post">
                                <div class="thumb-wrap">
                                    <a href="single-post.html">
                                        <img src="{{ asset('images/blog/wp_1.jpg') }}" alt="post" />
                                    </a>
                                </div>
                                <div class="content-entry-wrap">
                                    <h3 class="entry-title">
                                        <a href="single-post.html">Best Wordpress Theme of 2021</a>
                                    </h3>
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                            August 23, 2015
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post">
                                <div class="thumb-wrap">
                                    <a href="single-post.html">
                                        <img src="{{ asset('images/blog/wp_2.jpg') }}" alt="post" />
                                    </a>
                                </div>
                                <div class="content-entry-wrap">
                                    <h3 class="entry-title">
                                        <a href="single-post.html">Dating While Studying Minimize Heartbreak</a>
                                    </h3>
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                            August 23, 2015
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post">
                                <div class="thumb-wrap">
                                    <a href="single-post.html">
                                        <img src="{{ asset('images/blog/wp_3.jpg') }}" alt="post" />
                                    </a>
                                </div>
                                <div class="content-entry-wrap">
                                    <h3 class="entry-title">
                                        <a href="single-post.html">Nature Photography Best Place Focus</a>
                                    </h3>
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                            August 23, 2015
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post">
                                <div class="thumb-wrap">
                                    <a href="single-post.html">
                                        <img src="{{ asset('images/blog/wp_4.jpg') }}" alt="post" />
                                    </a>
                                </div>
                                <div class="content-entry-wrap">
                                    <h3 class="entry-title">
                                        <a href="single-post.html">Best Wordpress Theme of 2021</a>
                                    </h3>
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                            August 23, 2015
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </aside>
                    <aside class="widget widget_advertisement">
                        <div class="widget-content">
                            <a href="#"><img src="{{ asset('images/blog/ads.jpg') }}" alt="Advertisement" /></a>
                        </div>

                    </aside>

                </div>

            </div>

        </div>
    </div>
</div>

{{-- footer
................................................................................................................................................................ --}}

 <!-- upper footer section start -->
 <section class="upper-footer-section">
    <div class="container-fluid">
        <div class="upper-footer-section-img" style="background-image:{{ asset('imsges/Rectangle11907.jpg') }}">
            <h1 class="upper-footer-section-h1">Get Started With Us</h1>
            <button id="upper-footer-section-btn"><span class="upper-footer-section-btn-span">BOOK AN APPOINTMENT &nbsp;<i class="bi bi-arrow-up-right" id="uppder-button-icon"></i></span></button>
        </div>
    </div>
</section>
  <!-- upper-footer section end -->

        <!-- Footer section one start -->
        <section class="footer-section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 col-xl-3 col-md-6" id="col-lg-3-footer">
                        <img src="{{  asset('images/unikey-logo.png') }}" class="footer-section-logo">
                        <p class="footer-p">A leading Education and Migration agency that provides a platform for students
                            seeking higher Education in australia, whilst assuring quality service and reliability
                            that enventually help Students select a desired career oriented field of study, paving
                            the way to a bright future 
                        </p>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6" id="col-lg-3-footer">
                        <h3 class="footer-headers" id="footer-section-h3">QUICK LINKS</h3>
                        <p class="footer-p-bottom"><a href="index.html">Home</a></p>
                        <p class="footer-p-bottom"><a href="aboutUs.html">About</a></p>
                        <p class="footer-p-bottom"><a href="ourteam.html">Team</a></p>
                        <p class="footer-p-bottom"><a href="promotion.html">Services</a></p>
                        <p class="footer-p-bottom"><a href="whystudy.html">Why Study in Australia</a></p>
                        <p class="footer-p-bottom"><a href="contactus.html">Contact</a></p>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6" id="col-lg-3-footer">
                        <h3 class="footer-headers" id="footer-section-h3">SRILANKA BRANCH</h3>
                        <p>438, 1st floor, Jazimaz complex, Galle Road, Colombo 3, Srilanka.</p>
                        <p><i class="bi bi-telephone-fill"></i><a href="tel:+94112593540">&nbsp; +94 112 593 540</a></p>
                        <p><i class="bi bi-telephone-fill"></i><a href="tel:+94779717577">&nbsp; +94 779 717 577</a></p>
                        <p><i class="bi bi-envelope-fill"></i><a href="mailto:info@unikeyglobal.com.au">&nbsp; info@unikeyglobal.com.au</a></p>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6" id="col-lg-3-footer">
                        <h3 class="footer-headers" id="footer-section-h3">AUSTRALIA BRANCH</h3>
                        <p class="footer-p-bottom">Suite 1603/530 Little collins st, Melbourne VIC 3000, Australia</p>
                        <p><i class="bi bi-telephone-fill"></i><a href="tel:+61392842999">&nbsp; +61 392 842 999</a></p>
                        <p><i class="bi bi-telephone-fill"></i><a href="tel:+61403788905">&nbsp; +61 403 788 905</a></p>
                        <p><i class="bi bi-envelope-fill"></i><a href="mailto:info@unikeyglobal.com.au">&nbsp; info@unikeyglobal.com.au</a></p>
                </div>
                </div>
            </div>
        </section>
        <!-- Footer section one end -->
 
        <!-- Footer section two start -->
        <section class="footer-section-two">
            <div class="container">
                <div class="row" id="footer-section-two">
                    <div class="col-lg-8">
                        <p class="last-word-on-footer">&copy; 2022 All Rights Reserved. Unikey Global</p>
                        <p class="design-word-on-footer">Design By <a href="https://xessglobal.com">XESS GLOBAL</a></p>
                    </div>
                    <div class="col-lg-4">
                        <div class="icons-footer">
                            <i class="bi bi-facebook" id="footer-section-two-icons"></i>
                            <i class="bi bi-twitter" id="footer-section-two-icons"></i>
                            <i class="bi bi-linkedin" id="footer-section-two-icons"></i>
                            <i class="bi bi-youtube" id="footer-section-two-icons"></i>
                            <i class="bi bi-instagram" id="footer-section-two-icons"></i>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Footer section two end  -->

@endsection