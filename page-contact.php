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

    <!-- Contact Information Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Phone -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Call Us</h3>
                    <p class="text-gray-600 mb-4">Our support team is available Monday-Friday, 9am-5pm</p>
                    <a href="tel:+1234567890" class="text-red-600 font-medium hover:text-red-800 transition-colors">+1 (234) 567-890</a>
                </div>
                
                <!-- Email -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Email Us</h3>
                    <p class="text-gray-600 mb-4">We'll respond to your inquiry within 24 hours</p>
                    <a href="mailto:info@hivewise.com" class="text-red-600 font-medium hover:text-red-800 transition-colors">info@hivewise.com</a>
                </div>
                
                <!-- Location -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Visit Us</h3>
                    <p class="text-gray-600 mb-4">123 Business Avenue, Suite 500<br>San Francisco, CA 94107</p>
                    <a href="https://maps.google.com" target="_blank" class="text-red-600 font-medium hover:text-red-800 transition-colors">Get Directions</a>
                </div>
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

  

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">FAQ</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Find answers to common questions about our services and support.</p>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 text-left" aria-expanded="false">
                            <h3 class="text-xl font-bold text-gray-900">What are your business hours?</h3>
                            <svg class="w-6 h-6 text-red-600 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Our office is open Monday through Friday from 9:00 AM to 5:00 PM Pacific Time. Our support team is available during these hours to assist you.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 text-left" aria-expanded="false">
                            <h3 class="text-xl font-bold text-gray-900">How quickly can I expect a response?</h3>
                            <svg class="w-6 h-6 text-red-600 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">We strive to respond to all inquiries within 24 business hours. For urgent matters, please call our support line for immediate assistance.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 text-left" aria-expanded="false">
                            <h3 class="text-xl font-bold text-gray-900">Do you offer virtual consultations?</h3>
                            <svg class="w-6 h-6 text-red-600 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Yes, we offer virtual consultations via Zoom or other video conferencing platforms. Please indicate your preference when scheduling a meeting with our team.</p>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const toggles = document.querySelectorAll('.faq-toggle');
                        
                        toggles.forEach(toggle => {
                            toggle.addEventListener('click', () => {
                                const content = toggle.nextElementSibling;
                                const icon = toggle.querySelector('svg');
                                const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
                                
                                // Close all other FAQs
                                toggles.forEach(otherToggle => {
                                    if (otherToggle !== toggle) {
                                        otherToggle.setAttribute('aria-expanded', 'false');
                                        otherToggle.nextElementSibling.classList.add('hidden');
                                        otherToggle.querySelector('svg').classList.remove('rotate-180');
                                    }
                                });
                                
                                // Toggle current FAQ
                                toggle.setAttribute('aria-expanded', !isExpanded);
                                content.classList.toggle('hidden');
                                icon.classList.toggle('rotate-180');
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </section>
</main>
