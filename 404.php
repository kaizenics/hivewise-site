<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hivewise
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="error-404 not-found py-20 md:py-32">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <!-- 404 Graphic -->
                <div class="mb-8">
                    <svg class="w-40 h-40 mx-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                
                <!-- Error Message -->
                <h1 class="text-6xl md:text-8xl font-bold text-gray-800 mb-4">404</h1>
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-700 mb-6">Page Not Found</h2>
                <p class="text-lg text-gray-600 mb-10">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                
                <!-- Search Form -->
                <div class="mb-10 max-w-md mx-auto">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="relative">
                            <input type="search" class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" 
                                   placeholder="Search..." 
                                   value="<?php echo get_search_query(); ?>" 
                                   name="s" />
                            <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Helpful Links -->
                <div class="mb-10">
                    <h3 class="text-xl font-semibold mb-4">You might want to check these pages:</h3>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center px-5 py-2 border border-transparent text-base font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Home
                        </a>
                        <a href="<?php echo esc_url(home_url('/survey')); ?>" class="inline-flex items-center px-5 py-2 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                            </svg>
                            Survey
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center px-5 py-2 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            Contact Us
                        </a>
                    </div>
                </div>
                
                <!-- Back Button -->
                <button onclick="history.back()" class="inline-flex items-center text-red-600 hover:text-red-800 font-medium">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                    </svg>
                    Go Back
                </button>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
