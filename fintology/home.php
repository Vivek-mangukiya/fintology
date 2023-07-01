<?php
/**
 * Template Name: Home
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
        <section class="hero-section secondary-bg">
          <div class="container">
            <div class="row">
              <div
                class="col-12 d-lg-flex align-items-center position-relative z-1"
              >
                <div class="hero-content-col position-relative z-1 pe-lg-3">
                  <h1
                    class="heading-title text-white big-heading-title text-center text-lg-start"
                  >
                    Fast & Unique
                    <span class="primary-text">Fintology</span> Delivers an
                    Exceptional AI Optimized Lending Experience
                  </h1>
                  <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3" data-aos="fade-up" data-aos-duration="1000">
                    <a
                      href="https://calendly.com/fintology/learnmore?month=2023-04"
                      class="primary-btn gap-2 content-mt-primary-btn w-max-content"
                      target="_blank"
                    >
                      Book a Demo
                      <svg
                        width="20"
                        height="14"
                        viewBox="0 0 20 14"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="left-arrow"
                      >
                        <path
                          d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z"
                          fill="currentColor"
                        />
                      </svg>
					<!-- 		transparent-btn	 secondary-btn			 -->
                    </a>
					   <a href="<?php echo get_site_url(); ?>/pricing/" class="primary-btn emptiness-btn gap-2 content-mt-primary-btn w-max-content price-btn">
                      Pricing
                      <svg
                        width="20"
                        height="14"
                        viewBox="0 0 20 14"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="left-arrow"
                      >
                        <path
                          d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z"
                          fill="currentColor"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
                <div
                  class="hero-content-img-col text-center"
                  data-aos="fade-up"
                  data-aos-duration="2000"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/home-hero-layer1.png" class="img-fluid
                  home-hero-layer-ani home-hero-layer1" alt="" />
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/home-hero-mockup0.png"
                    class="img-fluid home-hero-mockup-img mx-auto"
                    alt=""
                  />
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/home-hero-layer0.png"
                    class="img-fluid home-hero-layer-ani home-hero-layer0"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- hero end -->
      </div>
      <!-- company start -->
      <section
        class="company-section hero-company-logos-section section-big-pt"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div
                class="company-logos-img d-flex flex-wrap flex-md-wrap-0 align-items-center justify-content-center justify-content-md-between"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/company-logo4.svg"
                  class="img-fluid company-logo-img"
                  alt=""
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/company-logo0.svg"
                  class="img-fluid company-logo-img"
                  alt=""
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/company-logo1.svg"
                  class="img-fluid company-logo-img"
                  alt=""
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/company-logo2.svg"
                  class="img-fluid company-logo-img"
                  alt=""
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/company-logo3.svg"
                  class="img-fluid company-logo-img"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- company end -->
      <!-- Why Fintology? start -->
      <section class="Why-fintology-section section-big-pt">
        <div class="container position-relative z-1">
          <div class="row">
            <div class="col-12">
              <div
                class="Why-fintology-content-wrap"
                data-aos="fade-up"
                data-aos-duration="2000"
              >
                <h2 class="heading-title">
                  Why <span class="primary-text">Fintology?</span>
                </h2>
                <p class="heading-label-p">
                  Our  proprietary AI technology systems create an unrivaled lending experience for consumers, small, and midsized businesses. No matter the businesses industry or niche our unique lending experience allows businesses to scale and turn each consumer into a customer.
                </p>
                <a
                  href="<?php echo get_site_url(); ?>/how-it-work/"
                  class="primary-btn gap-2 content-mt-primary-btn w-max-content"
                >
                  How it Works
                  <svg
                    width="20"
                    height="14"
                    viewBox="0 0 20 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="left-arrow"
                  >
                    <path
                      d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z"
                      fill="currentColor"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="Why-fintologyWhy-fintology-img-contant-wrap">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/why-fintology.png"
            class="img-fluid w-100 d-none d-lg-block"
            alt=""
          />
          <div class="Why-fintology-content-grid d-grid">
            <div class="Why-fintology-content-col wf-col0">
              <div
                class="Why-fintology-img-box d-flex align-items-center justify-content-center mx-auto mx-lg-0"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cai.svg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <h5>Cloud AI Technology</h5>
              <p class="mb-0">
                True AI Technology hosted in the cloud to ensure a seamless
                backend experience.
              </p>
            </div>
            <div class="Why-fintology-content-col wf-col1">
              <div
                class="Why-fintology-img-box d-flex align-items-center justify-content-center mx-auto mx-lg-0"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sm.svg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <h5>For all Small and Midsized Businesses</h5>
              <p class="mb-0">
                Whether one employee or one hundred thousand, Fintology is
                applicable to businesses of all sizes.
              </p>
            </div>
            <div class="Why-fintology-content-col wf-col2">
              <div
                class="Why-fintology-img-box d-flex align-items-center justify-content-center mx-auto mx-lg-0"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sv.svg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <h5>Create a Seamless Verification</h5>
              <p class="mb-0">
                Experience military-grade verification that safeguards all consumers against fraud, ensuring your peace of mind. Say goodbye to compliance risks forever.
              </p>
            </div>
            <div class="Why-fintology-content-col wf-col3">
              <div
                class="Why-fintology-img-box d-flex align-items-center justify-content-center mx-auto mx-lg-0"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ub-service.svg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <h5>Unique B2B SaaS Services</h5>
              <p class="mb-0">
                Fintology provides cutting-edge solutions through Software-as-a-Service (SaaS) and Platform-as-a-Service (PaaS) offerings.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Why Fintology? end -->
      <!-- Lending Delivered start -->
      <section class="lending-delivered-section section-big-pt">
        <div class="container">
          <div class="row">
            <div
              class="col-12 d-flex flex-wrap flex-lg-wrap-0 align-items-center"
            >
              <div class="ld-content-col order-2 order-lg-1 mt-5 mt-lg-0">
                <h2 class="heading-title">
                  <span class="primary-text">$800M</span> in Lending Delivered
                  to Small and Midsize Businesses with Our Unique B2B Software
                  as a Service.
                </h2>
                <p class="heading-label-p">
                  With Fintology's AI-powered financial infrastructure technology, we have facilitated over $800 million in lending. Our platform empowers businesses and consumers alike to secure financing for any product or service they offer.
                </p>
                <!--                 <a
                  href="https://calendly.com/fintology/learnmore?month=2023-04"
                  class="primary-btn gap-2 content-mt-primary-btn w-max-content"
                  target="_blank"
                >
                  Book a Demo
                  <svg
                    width="20"
                    height="14"
                    viewBox="0 0 20 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="left-arrow"
                  >
                    <path
                      d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z"
                      fill="currentColor"
                    />
                  </svg>
                </a> -->
				  <div class="d-flex align-items-center gap-2 gap-sm-3">
					<a href="http://app.fintology.io/onboarding" class="primary-btn gap-2 content-mt-primary-btn w-max-content"  target="_blank">
					Get Funding
					<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
					  <path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"></path>
					</svg>
					</a>
					<a href="<?php echo get_site_url(); ?>/pricing/" class="primary-btn transparent-btn gap-2 content-mt-primary-btn w-max-content price-btn">
						Pricing
						<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
						<path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"></path>
						</svg>
					</a>
				</div>
              </div>
              <div
                class="ld-content-img-col mx-auto mx-lg-0 ms-lg-auto ps-lg-3 text-center text-lg-end order-1 order-lg-2"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/ld-mocup.png"
                  class="img-fluid ld-mockup-img"
                  alt=""
                  data-aos="fade-up"
                  data-aos-duration="2000"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Lending Delivered end -->
      <!-- company start -->
      <section class="company-section top-company-section section-big-pt">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div
                class="company-logos-img d-grid d-sm-flex align-items-sm-center justify-content-between"
              >
				 <a href="javascript:void(0)" target="_blank">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/Google-Review.png"
                  class="img-fluid company-logo-img"
                  alt=""
                />
				  </a>
				  <a href="javascript:void(0)" target="_blank">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/BBB-logo-horizontal-desktop-PNG.png"
                  class="img-fluid company-logo-img"
                  alt=""
                />
				  </a>
				   <a href="https://www.facebook.com/people/Fintology/100091794064816/?sk=reviews" target="_blank">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/Unknown.png"
                  class="img-fluid company-logo-img"
                  alt=""
                />
				  </a>
				 <a href="https://www.trustpilot.com/review/fintology.io" target="_blank">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/trustpilot-new.png"
                  class="img-fluid company-logo-img"
                  alt=""
                />
				  </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- company end -->
      <!-- Lending Delivered start -->
      <section class="lending-delivered-section section-big-pt">
        <div class="container">
          <div class="row">
            <div
              class="col-12 d-flex flex-wrap flex-lg-wrap-0 align-items-center"
            >
              <div class="ld-content-img-col mx-auto mx-lg-0 pe-lg-3">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/recent-post-mocup.png"
                  class="img-fluid ld-mockup-img"
                  alt=""
                  data-aos="fade-up"
                  data-aos-duration="2000"
                />
              </div>
              <div class="ld-content-col ms-auto ps-lg-2 mt-5 mt-lg-0">
                <h2 class="heading-title">
                  Direct Data Integration Using AI Technology
                </h2>
                <ul class="list-data">
                  <li class="d-flex align-items-baseline">
                    <div
                      class="arrow-fill-currect d-flex align-items-center justify-content-center"
                    >
                      <svg
                        width="10"
                        height="8"
                        viewBox="0 0 10 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M3.55908 7.38666C3.47152 7.38675 3.38481 7.36954 3.30392 7.33602C3.22304 7.3025 3.14957 7.25332 3.08774 7.19133L0.527744 4.63133C0.464071 4.56983 0.413283 4.49626 0.378343 4.41493C0.343404 4.33359 0.325013 4.24611 0.324244 4.15759C0.323475 4.06907 0.340342 3.98129 0.373863 3.89936C0.407384 3.81743 0.456886 3.74299 0.519481 3.6804C0.582076 3.6178 0.656511 3.5683 0.738442 3.53478C0.820372 3.50126 0.908159 3.48439 0.996678 3.48516C1.0852 3.48593 1.17268 3.50432 1.25401 3.53926C1.33535 3.5742 1.40891 3.62499 1.47041 3.68866L3.55908 5.77733L8.52774 0.808658C8.65348 0.68722 8.82188 0.620023 8.99668 0.621542C9.17148 0.623061 9.33869 0.693174 9.46229 0.81678C9.5859 0.940385 9.65601 1.10759 9.65753 1.28239C9.65905 1.45719 9.59185 1.62559 9.47041 1.75133L4.03041 7.19133C3.96859 7.25332 3.89512 7.3025 3.81423 7.33602C3.73335 7.36954 3.64663 7.38675 3.55908 7.38666Z"
                          fill="#001419"
                        />
                      </svg>
                    </div>
                    <p class="heading-label-p heading-text-color">
                      Fintology's AI technology is integrated with industry
                      leading core systems.
                    </p>
                  </li>
                  <li class="d-flex align-items-baseline">
                    <div
                      class="arrow-fill-currect d-flex align-items-center justify-content-center"
                    >
                      <svg
                        width="10"
                        height="8"
                        viewBox="0 0 10 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M3.55908 7.38666C3.47152 7.38675 3.38481 7.36954 3.30392 7.33602C3.22304 7.3025 3.14957 7.25332 3.08774 7.19133L0.527744 4.63133C0.464071 4.56983 0.413283 4.49626 0.378343 4.41493C0.343404 4.33359 0.325013 4.24611 0.324244 4.15759C0.323475 4.06907 0.340342 3.98129 0.373863 3.89936C0.407384 3.81743 0.456886 3.74299 0.519481 3.6804C0.582076 3.6178 0.656511 3.5683 0.738442 3.53478C0.820372 3.50126 0.908159 3.48439 0.996678 3.48516C1.0852 3.48593 1.17268 3.50432 1.25401 3.53926C1.33535 3.5742 1.40891 3.62499 1.47041 3.68866L3.55908 5.77733L8.52774 0.808658C8.65348 0.68722 8.82188 0.620023 8.99668 0.621542C9.17148 0.623061 9.33869 0.693174 9.46229 0.81678C9.5859 0.940385 9.65601 1.10759 9.65753 1.28239C9.65905 1.45719 9.59185 1.62559 9.47041 1.75133L4.03041 7.19133C3.96859 7.25332 3.89512 7.3025 3.81423 7.33602C3.73335 7.36954 3.64663 7.38675 3.55908 7.38666Z"
                          fill="#001419"
                        />
                      </svg>
                    </div>
                    <p class="heading-label-p heading-text-color">
                      Upon data submission, information is sent directly to our
                      AI servers to give the best decisions.
                    </p>
                  </li>
                </ul>
              <!--                 <a
                  href="https://calendly.com/fintology/learnmore?month=2023-04"
                  class="primary-btn gap-2 content-mt-primary-btn w-max-content"
                  target="_blank"
                >
                  Book a Demo
                  <svg
                    width="20"
                    height="14"
                    viewBox="0 0 20 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="left-arrow"
                  >
                    <path
                      d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z"
                      fill="currentColor"
                    />
                  </svg>
                </a> -->
				  <div class="d-flex align-items-center gap-2 gap-sm-3">
					<a href="http://app.fintology.io/onboarding" class="primary-btn gap-2 content-mt-primary-btn w-max-content"  target="_blank">
					Get Funding
					<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
					  <path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"></path>
					</svg>
					</a>
					<a href="<?php echo get_site_url(); ?>/pricing/" class="primary-btn transparent-btn gap-2 content-mt-primary-btn w-max-content price-btn">
						Pricing
						<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
						<path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"></path>
						</svg>
					</a>
				</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Lending Delivered end -->
      <!-- Lending Delivered start -->
      <section class="lending-delivered-section section-big-pt">
        <div class="container">
          <div class="row">
            <div
              class="col-12 d-flex flex-wrap flex-lg-wrap-0 align-items-center"
            >
              <div class="ld-content-col order-2 order-lg-1 mt-5 mt-lg-0">
                <h2 class="heading-title">
                  Smooth Visual <span class="primary-text">UI</span> Experiences
                </h2>
                <div class="mt-4">
                  <p
                    class="heading-label-p heading-text-color label-content-ani position-relative"
                  >
                    Simple no code solutions.
                  </p>
                  <p
                    class="heading-label-p heading-text-color label-content-ani position-relative"
                  >
                   Fintology's AI technology is integrated with industry leading systems.
                  </p>
                  <p
                    class="heading-label-p heading-text-color label-content-ani position-relative"
                  >
                    Fintology is the perfect solution for all users whether that be mobile or desktop.
                  </p>
                </div>
              </div>
              <div
                class="ld-content-img-col mx-auto mx-lg-0 ms-lg-auto ps-lg-3 order-1 order-lg-2"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/ui-experiences.png"
                  class="img-fluid ld-mockup-img"
                  alt=""
                  data-aos="fade-up"
                  data-aos-duration="2000"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Lending Delivered end -->
      <!-- Lending Delivered start -->
      <section class="lending-delivered-section section-big-pt">
        <div class="container">
          <div class="row">
            <div
              class="col-12 d-flex flex-wrap flex-lg-wrap-0 align-items-center"
            >
              <div class="ld-content-img-col pe-lg-3 mx-auto mx-lg-0">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/consumer-business-etc-mocup.png"
                  class="img-fluid ld-mockup-img"
                  alt=""
                  data-aos="fade-up"
                  data-aos-duration="2000"
                />
              </div>
              <div class="ld-content-col ms-lg-auto mt-5 mt-lg-0">
                <h2 class="heading-title">
                  Access to Over 5,000+ Consumer, Business, Automotive, and Home Lending Products.
                </h2>
                <ul class="list-data">
                  <li class="d-flex align-items-baseline">
                    <div
                      class="arrow-fill-currect d-flex align-items-center justify-content-center"
                    >
                      <svg
                        width="10"
                        height="8"
                        viewBox="0 0 10 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M3.55908 7.38666C3.47152 7.38675 3.38481 7.36954 3.30392 7.33602C3.22304 7.3025 3.14957 7.25332 3.08774 7.19133L0.527744 4.63133C0.464071 4.56983 0.413283 4.49626 0.378343 4.41493C0.343404 4.33359 0.325013 4.24611 0.324244 4.15759C0.323475 4.06907 0.340342 3.98129 0.373863 3.89936C0.407384 3.81743 0.456886 3.74299 0.519481 3.6804C0.582076 3.6178 0.656511 3.5683 0.738442 3.53478C0.820372 3.50126 0.908159 3.48439 0.996678 3.48516C1.0852 3.48593 1.17268 3.50432 1.25401 3.53926C1.33535 3.5742 1.40891 3.62499 1.47041 3.68866L3.55908 5.77733L8.52774 0.808658C8.65348 0.68722 8.82188 0.620023 8.99668 0.621542C9.17148 0.623061 9.33869 0.693174 9.46229 0.81678C9.5859 0.940385 9.65601 1.10759 9.65753 1.28239C9.65905 1.45719 9.59185 1.62559 9.47041 1.75133L4.03041 7.19133C3.96859 7.25332 3.89512 7.3025 3.81423 7.33602C3.73335 7.36954 3.64663 7.38675 3.55908 7.38666Z"
                          fill="#001419"
                        />
                      </svg>
                    </div>
                    <p class="heading-label-p heading-text-color">
                      Our AI technology gives businesses the power to lend at
                      every angle with lending resources directly from large
                      banks, regional banks, POS financing, and local CDFI
                      institutions
                    </p>
                  </li>
                </ul>
                <!--                 <a
                  href="https://calendly.com/fintology/learnmore?month=2023-04"
                  class="primary-btn gap-2 content-mt-primary-btn w-max-content"
                  target="_blank"
                >
                  Book a Demo
                  <svg
                    width="20"
                    height="14"
                    viewBox="0 0 20 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="left-arrow"
                  >
                    <path
                      d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z"
                      fill="currentColor"
                    />
                  </svg>
                </a> -->
				  <div class="d-flex align-items-center gap-2 gap-sm-3">
						<a href="http://app.fintology.io/onboarding" class="primary-btn gap-2 content-mt-primary-btn w-max-content"  target="_blank">
						Get Funding
						<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
						  <path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"></path>
						</svg>
						</a>
						<a href="<?php echo get_site_url(); ?>/pricing/" class="primary-btn transparent-btn gap-2 content-mt-primary-btn w-max-content price-btn">
							Pricing
							<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
							<path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"></path>
							</svg>
						</a>
					</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Lending Delivered end -->
      <!-- we offer section start -->
      <section class="we-offer-section we-offer-section-hero section-big-mt position-relative z-1" >
        <div class="container position-relative z-1">
          <div class="row">
            <div class="col-12">
              <h2 class="heading-title text-center text-white">
                What Else Do We Offer?
              </h2>
              <div class="we-offer-row">
                <div class="we-offer-col w-100">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/Merchant-Solutions.svg"
                    class="img-fluid"
                    alt=""
                    data-aos="fade-up"
                    data-aos-duration="2000"
                  />
                  <h4>Merchant Solutions</h4>
                  
					<p class="mb-0">
                    <span class="" id="merchant-view-short"
                      >At Fintology, we are with you every step of the way, providing comprehensive merchant solutions tailored to your specific needs and niche. Whether you operate a high-risk venture
                    </span>
                    <span class="d-none" id="merchant-view-all"
                      >At Fintology, we are with you every step of the way, providing comprehensive merchant solutions tailored to your specific needs and niche. Whether you operate a high-risk venture or a business with low entry barriers, we've got you covered.</span
                    >
                    <a
                      href="javascript:void(0)"
                      class="primary-text hover-txt-black text-decoration-underline"
                      id="view-more0"
                      >View More</a
                    >
                  </p>
                </div>
                <div
                  class="we-offer-col w-100 center-we-offer-col"
                  data-aos="fade-up"
                  data-aos-duration="2000"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/Tax-Strategy-Technology.svg"
                    class="img-fluid"
                    alt=""
                    data-aos="fade-up"
                    data-aos-duration="2000"
                  />
                  <h4>Tax Strategy Technology</h4>
                  <p class="mb-0">
                    <span class="" id="tax-view-short"
                      >Our technology allows us to create impactful tax strategy for our users. We garner the ability to see where additional capital can be gained
                    </span>
                    <span class="d-none" id="tax-view-all"
                      >Our technology allows us to create impactful tax strategy for our users. We garner the ability to see where additional capital can be gained through impactful tax strategy solutions offered autonomously.</span
                    >
                    <a
                      href="javascript:void(0)"
                      class="primary-text hover-txt-black text-decoration-underline"
                      id="view-more1"
                      >View More</a
                    >
                  </p>
                </div>
                <div class="we-offer-col w-100">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/Insurance-Strategy-Technology.svg"
                    class="img-fluid"
                    alt=""
                    data-aos="fade-up"
                    data-aos-duration="2000"
                  />
                  <h4>Insurance Strategy Technology</h4>
                  <p class="mb-0">
                    <span class="" id="insurance-view-short">
						Our software creates disruptive income through insurance strategy. Through insurance strategies our users have access to thousands of dollars with no dependency on their credit
					  </span>
                    <span class="d-none" id="insurance-view-all">
						Our software creates disruptive income through insurance strategy. Through insurance strategies our users have access to thousands of dollars with no dependency on their credit score or income.

					  </span>
                    <a
                      href="javascript:void(0)"
                      class="primary-text hover-txt-black text-decoration-underline"
                      id="view-more2"
                      >View More</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- we offer section end -->
      <!-- Lending Delivered start -->
      <section class="lending-delivered-section section-big-pt">
        <div class="container">
          <div class="row">
            <div class="col-12 d-md-flex align-items-md-center">
              <div
                class="ld-content-col free-demo-content-col"
                data-aos="fade-up"
                data-aos-duration="2000"
              >
                <h2 class="heading-title">
                  Ready for a <span class="primary-text">100%</span> Free Demo?
                </h2>
                <p class="heading-label-p">
                  Book a demo today at zero cost to you and see why Fintology is
                  the best no code AI lending solution for not only your
                  business but also for your consumers!
                </p>
                <!--                 <a
                  href="https://calendly.com/fintology/learnmore?month=2023-04"
                  class="primary-btn gap-2 content-mt-primary-btn w-max-content"
                  target="_blank"
                >
                  Book a Demo
                  <svg
                    width="20"
                    height="14"
                    viewBox="0 0 20 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="left-arrow"
                  >
                    <path
                      d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z"
                      fill="currentColor"
                    />
                  </svg>
                </a> -->
				  <div class="d-flex align-items-center gap-2 gap-sm-3">
						<a href="http://app.fintology.io/onboarding" class="primary-btn gap-2 content-mt-primary-btn w-max-content"  target="_blank">
						Get Funding
						<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
						  <path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"></path>
						</svg>
						</a>
						<a href="<?php echo get_site_url(); ?>/pricing/" class="primary-btn transparent-btn gap-2 content-mt-primary-btn w-max-content price-btn">
							Pricing
							<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
							<path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"></path>
							</svg>
						</a>
					</div>
              </div>
              <div
                class="ld-content-img-col text-center text-md-end ms-md-auto ps-md-3 mt-4 mt-sm-5 mt-md-0"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/free-demo.png"
                  class="img-fluid free-demo-mockup-img"
                  alt=""
                  data-aos="fade-up"
                  data-aos-duration="2000"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Lending Delivered end -->
<?php get_footer(); ?>
