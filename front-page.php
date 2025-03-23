<?php
/**
 * Template Name: Front Page
 */

get_header();
?>
<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="bg-white text-black relative">
        <div class="container mx-auto px-4 min-h-[80vh] flex items-center justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Left Content -->
                <div class="max-w-xl">
                    <h1 class="font-manrope text-5xl font-bold mb-6">Data-Driven Regional Insights</h1>
                    <p class="font-manrope text-xl mb-8">HiveWise delivers comprehensive reports on regional affairs and trends, powered by our extensive data collection network and community submissions.</p>
                    <a href="#about">
                        <button class="border-none bg-red-600 text-white px-8 py-3 rounded-lg hover:bg-red-700 transition-colors">
                            Access Reports
                        </button>
                    </a>
                </div>
                <!-- Right Image -->
                <div class="relative h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-right.png" 
                         alt="Hero Image" 
                         class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Comprehensive Regional Intelligence</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover how our reports can provide valuable insights for your organization or research needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Individual Users Card -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative h-64">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/keeping.jpg" 
                             alt="Individual analyzing reports" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <h3 class="text-white text-2xl font-bold">For Individual Researchers</h3>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Access to regional trend reports
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Contribute your own observations
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Personalized data insights
                            </li>
                        </ul>
                        <a href="#start-solving" class="inline-block w-full bg-red-500 text-white text-center px-6 py-4 rounded-xl hover:bg-red-600 transition-colors font-semibold">
                            Access Reports
                        </a>
                    </div>
                </div>

                <!-- Organizations & Institutions Card -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative h-64">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/commercial.png" 
                             alt="Organization using data analytics" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <h3 class="text-white text-2xl font-bold">For Organizations & Institutions</h3>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Comprehensive data analysis
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Custom research collaborations
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Enterprise-level reporting
                            </li>
                        </ul>
                        <a href="#learn-more" class="inline-block w-full bg-red-500 text-white text-center px-6 py-4 rounded-xl hover:bg-red-600 transition-colors font-semibold">
                            Request Custom Reports
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">Services</h2>
            <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">
                Explore our latest regional affairs reports and trend analyses from various regions and sectors.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Report Card 1 -->
                <div class="relative group rounded-2xl overflow-hidden">
                    <div class="aspect-[4/3] relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiative.jpg" 
                             alt="Economic Trends Report" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                     
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white text-xl font-semibold">Economic Trends Analysis</h3>
                        </div>
                    </div>
                </div>

                <!-- Report Card 2 -->
                <div class="relative group rounded-2xl overflow-hidden">
                    <div class="aspect-[4/3] relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hive-tech.jpg" 
                             alt="Regional Development Report" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white text-xl font-semibold">Regional Development Insights</h3>
                        </div>
                    </div>
                </div>

                <!-- Report Card 3 -->
                <div class="relative group rounded-2xl overflow-hidden">
                    <div class="aspect-[4/3] relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/conservation-project.jpg" 
                             alt="Social Trends Report" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white text-xl font-semibold">Social Trends Analysis</h3>
                        </div>
                    </div>
                </div>

            

                <!-- Report Card 5 -->
                <div class="relative group rounded-2xl overflow-hidden">
                    <div class="aspect-[4/3] relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solutions.jpg" 
                             alt="Market Analysis Report" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                       
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white text-xl font-semibold">Market Analysis Report</h3>
                        </div>
                    </div>
                </div>

            
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-8xl mx-auto text-center border border-gray-200 rounded-xl shadow-md p-12 bg-white">
           
                <h2 class="max-w-4xl mx-auto text-4xl md:text-5xl font-bold mb-8">HiveWise: The Future of<br>Crowdsourcing Insights</h2>
                <p class="max-w-4xl mx-auto text-lg text-gray-600 mb-8">
                A startup, set out to transform research by combining automated data collection methods with community-driven insights to deliver targeted, actionable insights.
                </p>
                <p class="max-w-4xl mx-auto text-lg text-gray-600 mb-8">
                We aspire to deliver high-quality, customized reports at a fraction of the cost, while fostering a vibrant community of experts dedicated to supporting each other’s growth through the sharing of knowledge, insights, and expertise.
                </p>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();