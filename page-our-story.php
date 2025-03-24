<?php
/**
 * Template Name: Our Story
 * 
 * The template for displaying the Our Story page
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-story.jpg" alt="Our Story Background" class="w-full h-full object-cover opacity-40">
        </div>
        
        <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Our Story</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8">How we started, where we've been, and where we're going</p>
                <div class="w-24 h-1 bg-red-600"></div>
            </div>
        </div>
    </section>

    <!-- Our Beginning Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-beginning.jpg" alt="Our Beginning" class="rounded-xl shadow-xl w-full h-auto">
                </div>
                <div class="md:w-1/2">
                    <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Our Beginning</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">From Humble Beginnings</h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p>HiveWise, a startup, set out to transform research by combining automated data collection methods with community-driven insights to deliver targeted, actionable insights.</p>
                        <p>We aspire to deliver high-quality, customized reports at a fraction of the cost, while fostering a vibrant community of experts dedicated to supporting each other’s growth through the sharing of knowledge, insights, and expertise.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Our Journey</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Key Milestones</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">The path that led us to where we are today has been filled with innovation, growth, and learning.</p>
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
                                <div class="w-12 h-12 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                    <span class="text-red-600 font-bold text-sm">2015</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm p-6">
                                <h3 class="text-xl font-bold text-red-600 mb-3">Company Founded</h3>
                                <p class="text-gray-600">Launched HiveWise with a small team of 5 dedicated professionals, focusing on providing regional market analysis for local businesses.</p>
                            </div>
                        </div>
                        
                        <!-- Second milestone -->
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0">
                                <div class="w-12 h-12 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                    <span class="text-red-600 font-bold text-sm">2017</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm p-6">
                                <h3 class="text-xl font-bold text-red-600 mb-3">Platform Launch</h3>
                                <p class="text-gray-600">Released our first data analytics platform, transforming our consulting services into a scalable software solution.</p>
                            </div>
                        </div>
                        
                        <!-- Third milestone -->
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0">
                                <div class="w-12 h-12 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                    <span class="text-red-600 font-bold text-sm">2019</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm p-6">
                                <h3 class="text-xl font-bold text-red-600 mb-3">National Expansion</h3>
                                <p class="text-gray-600">Expanded operations nationwide, opening offices in major cities and reaching 250+ business clients across different sectors.</p>
                            </div>
                        </div>
                        
                        <!-- Fourth milestone -->
                        <div class="relative pl-16">
                            <div class="absolute left-0 top-0">
                                <div class="w-12 h-12 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                    <span class="text-red-600 font-bold text-sm">2023</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm p-6">
                                <h3 class="text-xl font-bold text-red-600 mb-3">AI Integration</h3>
                                <p class="text-gray-600">Introduced advanced AI capabilities to our platform, revolutionizing how businesses access and interpret regional market data.</p>
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
                                    <h3 class="text-xl font-bold text-red-600 mb-3">Company Founded</h3>
                                    <p class="text-gray-600">Launched HiveWise with a small team of 5 dedicated professionals, focusing on providing regional market analysis for local businesses.</p>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="w-16 h-16 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                    <span class="text-red-600 font-bold">2015</span>
                                </div>
                                <div class="absolute h-full w-0.5 bg-red-200 left-1/2 transform -translate-x-1/2 top-16"></div>
                            </div>
                            <div class="w-1/2 pl-12"></div>
                        </div>
                    
                        <!-- 2017 -->
                        <div class="flex">
                            <div class="w-1/2 pr-12"></div>
                            <div class="relative">
                                <div class="w-16 h-16 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                    <span class="text-red-600 font-bold">2017</span>
                                </div>
                                <div class="absolute h-full w-0.5 bg-red-200 left-1/2 transform -translate-x-1/2 top-16"></div>
                            </div>
                            <div class="w-1/2 pl-12">
                                <div class="bg-white rounded-lg shadow-sm p-6">
                                    <h3 class="text-xl font-bold text-red-600 mb-3">Platform Launch</h3>
                                    <p class="text-gray-600">Released our first data analytics platform, transforming our consulting services into a scalable software solution.</p>
                                </div>
                            </div>
                        </div>
                    
                        <!-- 2019 -->
                        <div class="flex">
                            <div class="w-1/2 pr-12">
                                <div class="bg-white rounded-lg shadow-sm p-6">
                                    <h3 class="text-xl font-bold text-red-600 mb-3">National Expansion</h3>
                                    <p class="text-gray-600">Expanded operations nationwide, opening offices in major cities and reaching 250+ business clients across different sectors.</p>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="w-16 h-16 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                    <span class="text-red-600 font-bold">2019</span>
                                </div>
                                <div class="absolute h-full w-0.5 bg-red-200 left-1/2 transform -translate-x-1/2 top-16"></div>
                            </div>
                            <div class="w-1/2 pl-12"></div>
                        </div>
                    
                        <!-- 2023 -->
                        <div class="flex">
                            <div class="w-1/2 pr-12"></div>
                            <div class="relative">
                                <div class="w-16 h-16 rounded-full bg-white shadow-lg border-2 border-red-600 flex items-center justify-center">
                                    <span class="text-red-600 font-bold">2023</span>
                                </div>
                            </div>
                            <div class="w-1/2 pl-12">
                                <div class="bg-white rounded-lg shadow-sm p-6">
                                    <h3 class="text-xl font-bold text-red-600 mb-3">AI Integration</h3>
                                    <p class="text-gray-600">Introduced advanced AI capabilities to our platform, revolutionizing how businesses access and interpret regional market data.</p>
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
                <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Our Values</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">What Drives Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our core values shape everything we do, from how we develop our products to how we interact with our clients and each other.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Innovation</h3>
                    <p class="text-gray-600">We constantly push boundaries and explore new ways to solve complex problems, never settling for the status quo.</p>
                </div>
                
                <!-- Value 2 -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Collaboration</h3>
                    <p class="text-gray-600">We believe in the power of diverse perspectives and work together across teams, with clients, and with partners.</p>
                </div>
                
                <!-- Value 3 -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Integrity</h3>
                    <p class="text-gray-600">We operate with transparency and honesty in all our dealings, building trust with our clients through ethical business practices.</p>
                </div>
                </div>
            </div>
        </div>
    </section>

</main>


       