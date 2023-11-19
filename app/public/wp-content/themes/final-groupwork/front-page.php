<?php


get_header();
?>
<main class="homepage">
<!-- First Section -->
<section class="first-section">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/first-section-background.png'?>" alt="BG">
    <div class="first-section-content">
        <h1 class="first-section-title">
            Your Imagination Is 
            Your Only Limit
        </h1>
        <p class="first-section-text">
            We always try to make our customer Happy. We provide all kind of facilities. 
            Your Satisfaction is our main priority
        </p>
        <a href="#" class="first-section-button">
        Discover more
        </a>
    </div>
</section>
<!-- Second Section -->
<section class="second-section">
    <h2 class="second-section-title">
            Our Service
        </h2>
        <div class="container">
            <div class="second-section-cards">
                <div class="second-section-card">
                    <div class="second-section-card-header">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/section2-header-image1.png'?>" alt="">
                    </div>
                    <div class="second-section-card-content">
                        <div class="second-section-card-title">
                            Ticket Booking
                        </div>
                        <div class="second-section-card-text">
                        We book all kind of national or international
                        ticket for your destinaion.
                        </div>
                    </div>
                </div>
                <div class="second-section-card">
                    <div class="second-section-card-header">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/section2-header-image2.png'?>" alt="">
                    </div>
                    <div class="second-section-card-content">
                        <div class="second-section-card-title">
                        Hotel Booking
                        </div>
                        <div class="second-section-card-text">
                        You can easily book your according to your
budget hotel by our website.
                        </div>
                    </div>
                </div>
                <div class="second-section-card">
                    <div class="second-section-card-header">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/section2-header-image3.png'?>" alt="">
                    </div>
                    <div class="second-section-card-content">
                        <div class="second-section-card-title">
                        Tour Plan
                        </div>
                        <div class="second-section-card-text">
                        We provide you the best plan within a short
time explore more.
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</main>




<?php
get_footer();