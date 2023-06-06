<?php
/**
 * Template Name: Terms Condition
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage thirty_two_give
 * @since Thirty Two-Give 1.0
 */

 get_header(); 
?>
<!-- header end -->
    <!-- hero-inner section start -->
    <section class="hero-innrer-section py-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading-title big-heading-title"><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-inner section end -->
    <!-- details section start -->
    <section class="privacy-terms-section section-big-pt">
        <div class="container">
            <div class="row">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>