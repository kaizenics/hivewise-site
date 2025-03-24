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
                    <h1 class="font-manrope text-5xl font-bold mb-6 mt-12 sm:mt-0">Data-Driven Regional Insights</h1>
                    <p class="font-manrope text-xl mb-8">HiveWise, a startup, set out to transform research by combining
                        automated data collection
                        methods with community-driven insights to deliver targeted, actionable insights.</p>
                    <a href="#about">
                        <button
                            class="border-none bg-red-600 text-white px-8 py-3 rounded-lg hover:bg-red-700 transition-colors">
                            Access Reports
                        </button>
                    </a>
                </div>
                <!-- Right Image -->
                <div class="relative h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-right.png" alt="Hero Image"
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
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover how our reports can provide valuable
                    insights for your organization or research needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Individual Users Card -->
                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative h-64">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/keeping.jpg"
                            alt="Individual analyzing reports" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <h3 class="text-white text-2xl font-bold">For Individual Researchers</h3>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Access to regional trend reports
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Contribute your own observations
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Personalized data insights
                            </li>
                        </ul>
                        <a href="#start-solving"
                            class="inline-block w-full bg-red-500 text-white text-center px-6 py-4 rounded-xl hover:bg-red-600 transition-colors font-semibold">
                            Access Reports
                        </a>
                    </div>
                </div>

                <!-- Organizations & Institutions Card -->
                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative h-64">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/commercial.png"
                            alt="Organization using data analytics" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <h3 class="text-white text-2xl font-bold">For Organizations & Institutions</h3>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Comprehensive data analysis
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Custom research collaborations
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-red-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Enterprise-level reporting
                            </li>
                        </ul>
                        <a href="#learn-more"
                            class="inline-block w-full bg-red-500 text-white text-center px-6 py-4 rounded-xl hover:bg-red-600 transition-colors font-semibold">
                            Request Custom Reports
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- Our Beginning Section -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-beginning.jpg"
                            alt="Our Beginning" class="rounded-xl shadow-xl w-full h-auto">
                    </div>
                    <div class="md:w-1/2">
                        <span
                            class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Our
                            Beginning</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">From Humble Beginnings</h2>
                        <div class="prose prose-lg max-w-none text-gray-600">
                            <p>We believe in the power of collective wisdom and have built a platform where industry
                                experts can contribute their specialized knowledge while our AI systems analyze vast
                                amounts of data to identify emerging trends and opportunities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <span
                        class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Our
                        Process</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">How We Work</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our streamlined approach combines expert
                        knowledge with data-driven insights to deliver valuable intelligence for your needs.</p>
                </div>

                <div class="relative">
                    <!-- Mobile Timeline -->
                    <div class="md:hidden">
                        <!-- Vertical Line -->
                        <div class="absolute left-6 top-0 h-full w-0.5 bg-red-200"></div>

                        <div class="space-y-8">
                            <!-- First milestone -->
                            <div class="relative pl-16">
                                <div class="absolute left-0 top-0">
                                    <div
                                        class="w-12 h-12 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                        <span class="text-red-600 font-bold text-sm">01</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-sm p-6">
                                    <h3 class="text-xl font-bold text-red-600 mb-3">Expert Insights Collection</h3>
                                    <p class="text-gray-600">We gather valuable insights from industry specialists with
                                        deep expertise in their respective fields, ensuring high-quality foundational
                                        knowledge.</p>
                                </div>
                            </div>

                            <!-- Second milestone -->
                            <div class="relative pl-16">
                                <div class="absolute left-0 top-0">
                                    <div
                                        class="w-12 h-12 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                        <span class="text-red-600 font-bold text-sm">02</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-sm p-6">
                                    <h3 class="text-xl font-bold text-red-600 mb-3">Data Analysis Integration</h3>
                                    <p class="text-gray-600">Our advanced algorithms analyze vast amounts of internet
                                        data, identifying patterns and trends that complement our expert insights.</p>
                                </div>
                            </div>

                            <!-- Third milestone -->
                            <div class="relative pl-16">
                                <div class="absolute left-0 top-0">
                                    <div
                                        class="w-12 h-12 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                        <span class="text-red-600 font-bold text-sm">03</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-sm p-6">
                                    <h3 class="text-xl font-bold text-red-600 mb-3">Customized Report Creation</h3>
                                    <p class="text-gray-600">We transform the combined intelligence into tailored
                                        reports that address your specific needs, delivering actionable insights for
                                        informed decision-making.</p>
                                </div>
                            </div>

                            <!-- Fourth milestone -->
                            <div class="relative pl-16">
                                <div class="absolute left-0 top-0">
                                    <div
                                        class="w-12 h-12 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                        <span class="text-red-600 font-bold text-sm">04</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg shadow-sm p-6">
                                    <h3 class="text-xl font-bold text-red-600 mb-3">Continuous Improvement</h3>
                                    <p class="text-gray-600">We regularly update our methodologies and data sources to
                                        ensure our reports remain relevant, accurate, and valuable to your evolving
                                        needs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Desktop Timeline -->
                    <div class="hidden md:block">
                        <!-- Timeline Line -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-red-200"></div>

                        <!-- Timeline Items -->
                        <div class="space-y-16">
                            <!-- 2015 -->
                            <div class="flex">
                                <div class="w-1/2 pr-12">
                                    <div class="bg-white rounded-lg shadow-sm p-6">
                                        <h3 class="text-xl font-bold text-red-600 mb-3">Expert Insights Collection</h3>
                                        <p class="text-gray-600">We gather valuable insights from industry specialists
                                            with deep expertise in their respective fields, ensuring high-quality
                                            foundational knowledge.</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-16 h-16 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                        <span class="text-red-600 font-bold">01</span>
                                    </div>
                                    <div
                                        class="absolute h-full w-0.5 bg-red-200 left-1/2 transform -translate-x-1/2 top-16">
                                    </div>
                                </div>
                                <div class="w-1/2 pl-12"></div>
                            </div>

                            <!-- 2017 -->
                            <div class="flex">
                                <div class="w-1/2 pr-12"></div>
                                <div class="relative">
                                    <div
                                        class="w-16 h-16 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                        <span class="text-red-600 font-bold">02</span>
                                    </div>
                                    <div
                                        class="absolute h-full w-0.5 bg-red-200 left-1/2 transform -translate-x-1/2 top-16">
                                    </div>
                                </div>
                                <div class="w-1/2 pl-12">
                                    <div class="bg-white rounded-lg shadow-sm p-6">
                                        <h3 class="text-xl font-bold text-red-600 mb-3">Data Analysis Integration</h3>
                                        <p class="text-gray-600">Our advanced algorithms analyze vast amounts of
                                            internet data, identifying patterns and trends that complement our expert
                                            insights.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2019 -->
                            <div class="flex">
                                <div class="w-1/2 pr-12">
                                    <div class="bg-white rounded-lg shadow-sm p-6">
                                        <h3 class="text-xl font-bold text-red-600 mb-3">Customized Report Creation</h3>
                                        <p class="text-gray-600">We transform the combined intelligence into tailored
                                            reports that address your specific needs, delivering actionable insights for
                                            informed decision-making.
                                        </p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-16 h-16 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                        <span class="text-red-600 font-bold">03</span>
                                    </div>
                                    <div
                                        class="absolute h-full w-0.5 bg-red-200 left-1/2 transform -translate-x-1/2 top-16">
                                    </div>
                                </div>
                                <div class="w-1/2 pl-12"></div>
                            </div>

                            <!-- 2023 -->
                            <div class="flex">
                                <div class="w-1/2 pr-12"></div>
                                <div class="relative">
                                    <div
                                        class="w-16 h-16 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                        <span class="text-red-600 font-bold">04</span>
                                    </div>
                                </div>
                                <div class="w-1/2 pl-12">
                                    <div class="bg-white rounded-lg shadow-sm p-6">
                                        <h3 class="text-xl font-bold text-red-600 mb-3">Continuous Improvement</h3>
                                        <p class="text-gray-600">We regularly update our methodologies and data sources
                                            to ensure our reports remain relevant, accurate, and valuable to your
                                            evolving needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Values Section -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <span
                        class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Our
                        Values</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">What Drives Us</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our core values shape everything we do, from how
                        we develop our products to how we interact with our clients and each other.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Value 1 -->
                    <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Innovation</h3>
                        <p class="text-gray-600">We constantly push boundaries and explore new ways to solve complex
                            problems, never settling for the status quo.</p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Collaboration</h3>
                        <p class="text-gray-600">We believe in the power of diverse perspectives and work together
                            across teams, with clients, and with partners.</p>
                    </div>

                    <!-- Value 3 -->
                    <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Integrity</h3>
                        <p class="text-gray-600">We operate with transparency and honesty in all our dealings, building
                            trust with our clients through ethical business practices.</p>
                    </div>
                </div>
            </div>
            </div>
        </section>
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
                            alt="Economic Trends Report" class="w-full h-full object-cover">
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
                            alt="Regional Development Report" class="w-full h-full object-cover">
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
                            alt="Social Trends Report" class="w-full h-full object-cover">
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
                            alt="Market Analysis Report" class="w-full h-full object-cover">
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

                <h2 class="max-w-4xl mx-auto text-4xl md:text-5xl font-bold mb-8">HiveWise: The Future
                    of<br>Crowdsourcing Insights</h2>
                <p class="max-w-4xl mx-auto text-lg text-gray-600 mb-8">
                    A startup, set out to transform research by combining automated data collection methods with
                    community-driven insights to deliver targeted, actionable insights.
                </p>
                <p class="max-w-4xl mx-auto text-lg text-gray-600 mb-8">
                    We aspire to deliver high-quality, customized reports at a fraction of the cost, while fostering a
                    vibrant community of experts dedicated to supporting each other’s growth through the sharing of
                    knowledge, insights, and expertise.
                </p>
            </div>
        </div>
    </section>
</main>