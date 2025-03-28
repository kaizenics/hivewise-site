<?php
/**
 * Template Name: Values
 * 
 * The template for displaying the Values page
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/values.jpg" alt="Our Values Background" class="w-full h-full object-cover opacity-40">
        </div>
        
        <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Our Values</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8">The principles that guide everything we do</p>
                <div class="w-24 h-1 bg-red-600"></div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Core Values</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">What We Stand For</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our values shape our culture and guide our decisions every day</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Innovation -->
                <div class="group bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Innovation</h3>
                    <p class="text-gray-600 mb-6">We embrace new ideas and technologies, constantly pushing boundaries to create better solutions for our clients.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Continuous improvement
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Creative problem-solving
                        </li>
                    </ul>
                </div>

                <!-- Integrity -->
                <div class="group bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Integrity</h3>
                    <p class="text-gray-600 mb-6">We conduct our business with honesty, transparency, and ethical behavior in all interactions.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Ethical practices
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Transparent communication
                        </li>
                    </ul>
                </div>

                <!-- Excellence -->
                <div class="group bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600 mb-6">We strive for excellence in everything we do, setting high standards and consistently delivering quality.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Quality assurance
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Continuous learning
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Values in Action Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Values in Action</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Living Our Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">See how our values come to life in everything we do</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Value Story 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/innovation.jpg" alt="Innovation in Action" class="w-full h-64 object-cover">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Innovation in Action</h3>
                        <p class="text-gray-600">Our team developed a groundbreaking solution that helped clients reduce processing time by 50%, showcasing our commitment to innovation.</p>
                    </div>
                </div>

                <!-- Value Story 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/excellence.jpg" alt="Excellence in Practice" class="w-full h-64 object-cover">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Excellence in Practice</h3>
                        <p class="text-gray-600">Through rigorous quality assurance and continuous improvement, we've maintained a 98% client satisfaction rate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
