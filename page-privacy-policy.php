<?php
/**
 * Template Name: Privacy Policy
 * 
 * The template for displaying the Privacy Policy page
 *
 * @package hivewise
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="bg-gray-900 text-white py-16 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Privacy Policy</h1>
                <p class="text-xl text-gray-300">Last updated: <?php echo get_the_modified_date(); ?></p>
                <div class="w-24 h-1 bg-red-600 mx-auto mt-8"></div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-6 md:p-10">
                    <!-- Table of Contents -->
                    <div class="mb-10 p-6 bg-gray-50 rounded-lg">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Table of Contents</h2>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#information-collection" class="hover:text-red-600 transition-colors">Information Collection</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#information-use" class="hover:text-red-600 transition-colors">Use of Information</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#information-sharing" class="hover:text-red-600 transition-colors">Information Sharing</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#cookies" class="hover:text-red-600 transition-colors">Cookies and Tracking</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#data-security" class="hover:text-red-600 transition-colors">Data Security</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#your-rights" class="hover:text-red-600 transition-colors">Your Rights</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#policy-changes" class="hover:text-red-600 transition-colors">Changes to Policy</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#contact" class="hover:text-red-600 transition-colors">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Main Content -->
                    <div class="prose prose-lg max-w-none">
                        <?php the_content(); ?>
                        
                        <!-- Fallback content if the page is empty -->
                        <?php if (!have_posts() || empty(get_the_content())) : ?>
                            <div id="information-collection" class="mb-10">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Information Collection</h2>
                                <p>We collect information when you register on our site, place an order, subscribe to a newsletter, respond to a survey, fill out a form, or enter information on our site. The information collected may include your name, email address, mailing address, phone number, or credit card information.</p>
                                <p>We may also collect information about your computer and your visits to this website such as your IP address, geographical location, browser type, referral source, length of visit and pages viewed.</p>
                            </div>
                            
                            <div id="information-use" class="mb-10">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Use of Information</h2>
                                <p>Any information we collect from you may be used in one of the following ways:</p>
                                <ul>
                                    <li>To personalize your experience (your information helps us to better respond to your individual needs)</li>
                                    <li>To improve our website (we continually strive to improve our website offerings based on the information and feedback we receive from you)</li>
                                    <li>To improve customer service (your information helps us to more effectively respond to your customer service requests and support needs)</li>
                                    <li>To process transactions</li>
                                    <li>To send periodic emails</li>
                                </ul>
                            </div>
                            
                            <div id="information-sharing" class="mb-10">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Information Sharing</h2>
                                <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential.</p>
                            </div>
                            
                            <div id="cookies" class="mb-10">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Cookies and Tracking</h2>
                                <p>We use cookies to understand and save your preferences for future visits and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</p>
                            </div>
                            
                            <div id="data-security" class="mb-10">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Security</h2>
                                <p>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information.</p>
                            </div>
                            
                            <div id="your-rights" class="mb-10">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Your Rights</h2>
                                <p>You have the right to access, correct, or delete your personal data. You can also object to processing of your personal data, ask us to restrict processing of your personal data or request portability of your personal data.</p>
                            </div>
                            
                            <div id="policy-changes" class="mb-10">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Changes to Policy</h2>
                                <p>If we decide to change our privacy policy, we will post those changes on this page. This policy was last modified on <?php echo get_the_modified_date(); ?>.</p>
                            </div>
                            
                            <div id="contact" class="mb-10">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Contact Us</h2>
                                <p>If you have any questions regarding this privacy policy, you may contact us using the information below:</p>
                                <div class="mt-4">
                                    <p><strong>HiveWise</strong></p>
                                    <p>123 Business Avenue, Suite 500</p>
                                    <p>San Francisco, CA 94107</p>
                                    <p>Email: privacy@hivewise.com</p>
                                    <p>Phone: +1 (234) 567-890</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Still have questions about your privacy?</h2>
                <p class="text-lg text-gray-600 mb-8">Our team is here to help you understand how we protect your data.</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors">
                    Contact Us
                    <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>