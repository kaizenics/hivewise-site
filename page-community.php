<?php
/**
 * The template for displaying the Community page
 *
 * This is used automatically for a page with the slug "community"
 * 
 * @package hivewise
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="bg-white text-black relative">
        <div class="container mx-auto px-4 min-h-[60vh] flex items-center justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Left Content -->
                <div class="max-w-xl">
                    <h1 class="font-manrope text-5xl font-bold mb-6">Join Our Beekeeping Community PAGE 2</h1>
                    <p class="font-manrope text-xl mb-8">Connect with fellow beekeepers, share insights, and learn from experts in our growing community of apiculture enthusiasts.</p>
                    <a href="#community-features">
                        <button class="border-none bg-red-600 text-white px-8 py-3 rounded-lg hover:bg-red-700 transition-colors">
                            Explore Community
                        </button>
                    </a>
                </div>
                <!-- Right Image -->
                <div class="relative h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/community-hero.jpg" 
                         alt="Beekeeping Community" 
                         class="w-full h-auto object-cover rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Community Features Section -->
    <section id="community-features" class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Community Features</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover all the ways you can engage with fellow beekeepers and expand your knowledge.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature Cards -->
                <!-- Feature Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="relative h-48">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/forum.jpg" 
                             alt="Discussion Forums" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-6">
                            <h3 class="text-white text-2xl font-bold">Discussion Forums</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 mb-6">Engage in conversations about beekeeping techniques, equipment, and challenges with beekeepers from around the world.</p>
                        <a href="#forums" class="inline-block w-full bg-red-500 text-white text-center px-6 py-3 rounded-xl hover:bg-red-600 transition-colors font-semibold">
                            Join Discussions
                        </a>
                    </div>
                </div>

                <!-- Additional feature cards and content -->
                <!-- ... -->
            </div>
        </div>
    </section>
</main>

<?php
get_footer();