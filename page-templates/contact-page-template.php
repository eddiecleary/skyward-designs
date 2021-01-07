<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying a the contact page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<main id="contact">
    <section class="hero mt-3">
        <div class="container h-100">
            <div class="row h-100 d-flex justify-content-center align-items-center">
                <div class="col text-center">
                    <h1 class="text-secondary">Contact Us Today</h1>
                    <p class="text-white w-75 mx-auto">Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-boxes">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center">
                <div class="col-11 border d-flex flex-column align-items-center text-center contact-box bg-white">
                    <i class="fa fa-phone text-secondary"></i>
                    <h3 class="mt-25">Talk to Sales</h3>
                    <p class="w-75 mt-30">Interested in our services? Just pick up the phone to chat with a member of our sales team.</p>
                    <a href="tel:18002607062" class="d-block text-nav text-secondary-900 mt-25">+1 800 260 7062</a>
                    <p class="my-10">or</p>
                    <a href="mailto:info@skywarddesigns.com" class="d-block text-nav text-secondary-900">info@skywarddesigns.com</a>
                </div>
                <div class="col-11 border d-flex flex-column align-items-center text-center contact-box contact-box--2 bg-white">
                    <i class="fa fa-comments text-secondary"></i>
                    <h3 class="mt-25">Customer Support</h3>
                    <p class="w-75 mt-30">It’s easy to get in touch with us for help with any of your concerns. Chat, email, or call us now!</p>
                    <a href="#" class="d-block text-nav text-secondary-900 mt-25">Open Messenger</a>
                    <p class="my-6">or</p>
                    <a href="mailto:info@skywarddesigns.com" class="d-block text-nav text-secondary-900">info@skywarddesigns.com</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
