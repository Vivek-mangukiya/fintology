<?php
/**
 * Template Name: Coming Soon
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage fintology
 * @since fintology
 */

get_header(); 

 ?>
<!-- hero start -->
 <section class="hero-section coming-soon-section secondary-bg">
    <div class="container">
    <div class="row min-h-inherit v">
        <div
        class="col-12 position-relative z-1 min-h-inherit d-flex align-items-center justify-content-center flex-column"
        >
        <h1 class="fw-600 text-primary mb-2 text-center">
            Coming <span class="text-white">Soon</span>
        </h1>
        <p class="fw-400 mb-0 text-white text-center">
            We're currently working hard on this feature.
        </p>
        <a
            href="<?php echo get_site_url(); ?>"
            class="primary-btn gap-2 content-mt-primary-btn w-max-content hover-btn-svg"
        >
            <svg
            width="19"
            height="14"
            viewBox="0 0 19 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
                d="M0.576849 6.41077L6.41018 0.577433C6.56735 0.425634 6.77785 0.341639 6.99635 0.343537C7.21485 0.345436 7.42386 0.433077 7.57836 0.587584C7.73287 0.742091 7.82051 0.951101 7.82241 1.1696C7.82431 1.3881 7.74031 1.5986 7.58852 1.75577L3.17768 6.1666H17.8327C18.0537 6.1666 18.2657 6.2544 18.4219 6.41068C18.5782 6.56696 18.666 6.77892 18.666 6.99993C18.666 7.22095 18.5782 7.43291 18.4219 7.58919C18.2657 7.74547 18.0537 7.83327 17.8327 7.83327H3.17768L7.58852 12.2441C7.66811 12.321 7.73159 12.4129 7.77527 12.5146C7.81894 12.6163 7.84193 12.7256 7.84289 12.8363C7.84385 12.9469 7.82277 13.0566 7.78087 13.1591C7.73897 13.2615 7.67709 13.3545 7.59884 13.4328C7.5206 13.511 7.42756 13.5729 7.32514 13.6148C7.22273 13.6567 7.113 13.6778 7.00235 13.6768C6.8917 13.6758 6.78235 13.6529 6.68068 13.6092C6.57901 13.5655 6.48705 13.502 6.41018 13.4224L0.576849 7.5891C0.420624 7.43283 0.332861 7.2209 0.332861 6.99993C0.332861 6.77896 0.420624 6.56704 0.576849 6.41077Z"
                fill="#001419"
            />
            </svg>

            Back to Home
        </a>
        </div>
    </div>
    </div>
</section>
</div>
<!-- hero end -->
<?php get_footer(); ?>