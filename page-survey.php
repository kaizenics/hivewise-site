<?php
/**
 * Template Name: Survey Page
 * 
 * The template for displaying the survey page
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/survey.jpg" alt="Survey Background" class="w-full h-full object-cover opacity-40">
        </div>
        
        <div class="container mx-auto px-4 py-20 md:py-28 relative z-10">
            <div class="max-w-3xl">
                <!-- Hero Section text changes -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Customer Survey</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8">Share your feedback to help us improve our services and better meet your needs.</p>
                
            
              
            </div>
        </div>
    </section>

    <!-- Survey Benefits -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Quick -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Quick & Easy</h3>
                    <p class="text-gray-600">Complete the survey in just 5 minutes</p>
                </div>

                <!-- Feedback -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Your Opinion Matters</h3>
                    <p class="text-gray-600">Help shape our future products and services</p>
                </div>

                <!-- Reward -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Get Rewarded</h3>
                    <p class="text-gray-600">Chance to win exclusive discounts and offers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Survey Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Start Survey</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Customer Feedback Survey</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Your feedback helps us understand your needs better and improve our services.</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 md:p-10">
                    <?php 
                    if (class_exists('WPForms')) {
                        // Get all available forms
                        $forms = wpforms()->form->get('', array('orderby' => 'modified', 'order' => 'DESC'));
                        
                        if (!empty($forms)) {
                            // Use the most recently modified form
                            $form_id = $forms[0]->ID;
                            echo do_shortcode('[wpforms id="' . $form_id . '" class="wpforms-tailwind"]');
                            
                            // Show admin notice about which form is being displayed
                            if (current_user_can('edit_posts')) {
                                echo '<div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mt-6" role="alert">';
                                echo '<p class="font-bold">Admin Notice (only visible to editors):</p>';
                                echo '<p>Currently displaying: <strong>' . esc_html($forms[0]->post_title) . '</strong> (ID: ' . $form_id . ')</p>';
                                echo '<p>This page automatically displays your most recently modified form. To change the displayed form, simply edit the form you want to display in WPForms.</p>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p class="text-center text-gray-600">No forms found. Please create a form in WPForms.</p>';
                        }
                    } else {
                        echo '<p class="text-center text-gray-600">Please install and activate WPForms plugin.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Notice -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-900">Privacy Notice</h3>
                </div>
                <p class="text-gray-600 text-sm">Your privacy is important to us. All responses are confidential and will be used only for service improvement purposes.</p>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>