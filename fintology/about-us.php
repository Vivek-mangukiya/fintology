<?php
/**
 * Template Name: About Us
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
                    <div class="col-12 d-lg-flex align-items-center position-relative z-1">
                        <div class="hero-content-col position-relative z-1">
                            <h1 class="heading-title text-white big-heading-title text-center text-lg-start">Our Journey and Goal is to Build High Quality Experiences for Every <span class="primary-text">B2B</span> Client we Assist</h1>
<!--                             <div  data-aos="fade-up"
                            data-aos-duration="1000">
                            <a href="https://calendly.com/fintology/learnmore?month=2023-04" class="primary-btn gap-2 content-mt-primary-btn w-max-content mx-auto mx-lg-0" target="_blank">
                                Book a Demo
                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
                                    <path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"/>
                                </svg>                                
                            </a>

                            </div> -->
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
                    </a>
					   <a href="<?php echo get_site_url(); ?>/pricing/" class="primary-btn emptiness-btn gap-2 content-mt-primary-btn w-max-content price-btn" >
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
                        <div class="hero-content-img-col text-center ms-lg-auto text-lg-end"   data-aos="fade-up"
                        data-aos-duration="1000">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/about-hero-mockup.png" class="img-fluid about-hero-mockup-img" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->
    </div>
    <!-- count numbar start -->
    <section class="count-number-section section-big-pt">
        <div class="container">
            <div class="row">
                <div class="col-12 d-lg-flex align-items-center">
                    <div class="count-number-head-wrap">
                        <p class="fw-400 mb-0">A trusted fast moving company with teams centered within the United States</p>
                    </div>
                    <div class="count-number-content-wrap d-grid ms-auto mt-4 mt-lg-0">
                        <div class="count-number-col">
                            <h3 class="fw-600 position-relative d-flex align-items-center"><div class="count-number">4</div>M+</h3>
                            <span class="d-block fw-400 mb-0">Consumers Lended</span>
                        </div>
                        <div class="count-number-col">
                            <h3 class="fw-600 position-relative d-flex align-items-center"><div class="count-number">18</div>M+</h3>
                            <span class="d-block fw-400 mb-0">Staffed Locations</span>
                        </div>
                        <div class="count-number-col">
                            <h3 class="fw-600 position-relative d-flex align-items-center"><div class="count-number">26</div>M+</h3>
                            <span class="d-block fw-400 mb-0">Years of experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- count numbar end -->
    <!-- AI solution section start -->
    <section class="ai-solution-section section-big-pt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading-title text-center mx-auto"><span class="primary-text">Fintology</span> is an Industry Disrupting AI Solution that Benefits Every Lending Institution, Product, and Niche</span></h2>
                    <div class="ai-solution-box-row d-lg-flex justify-content-center flex-wrap flex-lg-wrap-0">
                        <div class="ai-solution-box-col text-center text-lg-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ai-icon0.svg" class="img-fluid" alt=""  data-aos="fade-up"
                            data-aos-duration="1000" />
                            <h4 class="fw-600">What we do</h4>
                            <p class="mb-0">
							<span class="" id="merchant-view-short">
							 Finotology delvers advanced lending products along with delivering insurance and tax strategy with every consumer lended for their business or personal life. Fintology also
							</span>
							<span class="d-none" id="merchant-view-all"
							  >Finotology delvers advanced lending products along with delivering insurance and tax strategy with every consumer lended for their business or personal life. Fintology also offers autonomous repair & monitoring services for those that do not qualify for lending products while still delivering other forms of capital through insurance, tax, and alternative lending strategies.  Fintology is an all in one financial wheelhouse for all businesses and consumers.</span>
							<a href="javascript:void(0)"
							  class="primary-text hover-txt-black text-decoration-underline"
							  id="view-more0"
							  >View More</a>
							</p>
                        </div>
                        <div class="ai-solution-box-col text-center text-lg-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ai-technology.svg" class="img-fluid" alt=""   data-aos="fade-up"
                            data-aos-duration="1000"/>
                            <h4 class="fw-600">Technology</h4>
                            <p class="mb-0">
								<span class="" id="tax-view-short">
								 We use the latest technologies backed by some of the most compliant lending practices from our partners. Our monolith tech stack includes the most secure systems available to
								</span>
								<span class="d-none" id="tax-view-all"

								  >We use the latest technologies backed by some of the most compliant lending practices from our partners. Our monolith tech stack includes the most secure systems available to create the best experiences possible.
								</span>
								<a
								  href="javascript:void(0)"
								  class="primary-text hover-txt-black text-decoration-underline"
								  id="view-more1"
								  >View More</a>
							</p>
                        </div>
                        <div class="ai-solution-box-col text-center text-lg-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ai-team.svg" class="img-fluid" alt=""   data-aos="fade-up"
                            data-aos-duration="1000" />
                            <h4 class="fw-600">Team</h4>
                            <p class="mb-0">Veterans with decades of combined experience in SaaS technology.</p>
                        </div>
                    </div>
                    <div class="ai-solution-box-row d-lg-flex justify-content-center flex-wrap flex-lg-wrap-0">
                        <div class="ai-solution-box-col text-center text-lg-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ai-goal.svg" class="img-fluid" alt=""  data-aos="fade-up"
                            data-aos-duration="1000"/>
                            <h4 class="fw-600">Mission</h4>
                            <p class="mb-0">Our goal is to ensure that every business and consumer has access to every financial resource and product available to ensure the success of their financial future!</p>
                        </div>
                        <div class="ai-solution-box-col text-center text-lg-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ai-icon1.svg" class="img-fluid" alt=""  data-aos="fade-up"
                            data-aos-duration="1000" />
                            <h4 class="fw-600">Goal</h4>
                            <p class="mb-0">Ensuring that user we know has access to the Fintology platform</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- AI solution section end -->
    <!-- contact us section start -->
    <section class="we-offer-section contact-us-section section-big-mt pb-0" id="contactUSForm">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="contact-head-wrap d-flex flex-column h-100">
                        <h2 class="heading-title text-white light-head-color">Contact us</h2>
                        <p class="heading-label-p light-label-p">Any questions? Reach out to us and one of the Fintology team members will get back to you as soon as possible.</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/contact-subscribe.png" class="img-fluid mt-auto d-none d-lg-block" alt=""   data-aos="fade-up"
                        data-aos-duration="1000"/>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 mt-3 mt-sm-4 mt-lg-0">
                    <form>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="form-label">First Name</div>
                                <input type="text" name="" value="" class="form-control custom-input" placeholder="First name"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-label">Last Name</div>
                                <input type="text" name="" value="" class="form-control custom-input" placeholder="Last name"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-label">Email</div>
                                <input type="text" name="" value="" class="form-control custom-input" placeholder="Email"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-label">Mobile</div>
                                <input type="text" name="" value="" class="form-control custom-input" placeholder="Mobile number"/>
                            </div>
                            <div class="col-12 form-group">
                                <div class="form-label">Message</div>
                                <textarea class="form-control custom-input" placeholder="Write here"></textarea>
                            </div>
                            <div class="col-12">
                            <div data-aos="fade-up"
                            data-aos-duration="1000">
                            <button class="primary-btn w-100">
                                Send
                            </button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us section end -->
    <!-- Interested in Investing? start -->
    <section class="interested-in-investing-section section-big-py">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="interested-in-investing-content-wrap mx-auto">
                        <h2 class="heading-title text-center">Interested in Investing?</h2>
                        <p class="heading-label-p text-center">Our board of members has decades of knowledge and experience building successful tech startups. soon, we will IPO and now is the time where we will be interested in additional capital partners that can have added value and experience to our technology.</p>
                        <div  data-aos="fade-up"
                        data-aos-duration="1000">
                        <a class="primary-btn gap-2 content-mt-primary-btn mx-auto w-max-content" href="mailto:info@fintology.io">
                            Email Us
                            <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-arrow">
                                <path d="M18.9222 6.41077L13.0888 0.577433C12.9317 0.425634 12.7212 0.341639 12.5027 0.343537C12.2842 0.345436 12.0752 0.433077 11.9207 0.587584C11.7662 0.742091 11.6785 0.951101 11.6766 1.1696C11.6747 1.3881 11.7587 1.5986 11.9105 1.75577L16.3213 6.1666H1.66634C1.44533 6.1666 1.23337 6.2544 1.07709 6.41068C0.920805 6.56696 0.833008 6.77892 0.833008 6.99993C0.833008 7.22095 0.920805 7.43291 1.07709 7.58919C1.23337 7.74547 1.44533 7.83327 1.66634 7.83327H16.3213L11.9105 12.2441C11.8309 12.321 11.7674 12.4129 11.7238 12.5146C11.6801 12.6163 11.6571 12.7256 11.6561 12.8363C11.6552 12.9469 11.6763 13.0566 11.7182 13.1591C11.7601 13.2615 11.8219 13.3545 11.9002 13.4328C11.9784 13.511 12.0715 13.5729 12.1739 13.6148C12.2763 13.6567 12.386 13.6778 12.4967 13.6768C12.6073 13.6758 12.7167 13.6529 12.8183 13.6092C12.92 13.5655 13.012 13.502 13.0888 13.4224L18.9222 7.5891C19.0784 7.43283 19.1662 7.2209 19.1662 6.99993C19.1662 6.77896 19.0784 6.56704 18.9222 6.41077Z" fill="currentColor"/>
                            </svg>                                
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Interested in Investing? end -->
    <?php get_footer(); ?>