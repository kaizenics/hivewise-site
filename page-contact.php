<?php
/**
 * Template Name: Contact Page
 * 
 * The template for displaying the contact page
 *
 * @package hivewise
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gray-900 text-white">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.jpg" alt="Contact Us Background" class="w-full h-full object-cover opacity-40">
        </div>
        
        <div class="container mx-auto px-4 py-20 md:py-28 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Contact Us</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8">We'd love to hear from you. Reach out to our team with any questions or inquiries.</p>
                <div class="w-24 h-1 bg-red-600"></div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Get In Touch</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Have a specific question or inquiry? Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
    
                <div class="bg-white rounded-xl shadow-lg p-8 md:p-10">
                    <?php 
                    if (class_exists('WPForms')) {
                        // Get specifically the Contact Form
                        $forms = wpforms()->form->get('', ['post_title' => 'Contact Form']);
                        
                        if (!empty($forms)) {
                            $form = $forms[0];
                            echo do_shortcode('[wpforms id="' . $form->ID . '" class="wpforms-tailwind"]');
                        } else {
                            echo '<p class="text-center text-gray-600">Contact form not found. Please create a form named "Contact Form" in WPForms.</p>';
                        }
                    } else {
                        echo '<p class="text-center text-gray-600">Please install and activate WPForms plugin.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>
