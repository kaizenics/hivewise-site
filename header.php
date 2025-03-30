<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wazoku
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site flex flex-col">
        <a class="skip-link screen-reader-text sr-only"
            href="#primary"><?php esc_html_e('Skip to content', 'hivewise'); ?></a>

        <header class="fixed w-full top-0 left-0 right-0 bg-white shadow-sm z-50">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <?php
                    if (has_custom_logo()) :
                        the_custom_logo();
                    else :
                    ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold text-gray-900">
                            <?php bloginfo('name'); ?>
                        </a>
                        <?php endif; ?>
                    </div>

                    <!-- Desktop Navigation -->
                    <nav id="site-navigation" class="hidden md:flex items-center space-x-8">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200">
                                Home
                            </div>
                        </a>
                        
                        <!-- Our Values link (moved from dropdown) -->
                        <a href="<?php echo esc_url(home_url('/values')); ?>">
                            <div class="font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200">
                                Values
                            </div>
                        </a>

                        <!-- Blog link -->
                    <!--    <a href="<?php echo esc_url(home_url('/blog')); ?>"
                            class="font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200">
                            Blog
                        </a> -->

                        <!-- Survey link - Added new menu item -->
                        <a href="<?php echo esc_url(home_url('/survey')); ?>"
                            class="font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200">
                            Survey
                        </a>

                        <a href="<?php echo esc_url(home_url('/contact')); ?>">
                            <div
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-red-600 hover:bg-red-700 transition-colors">
                                Contact Us</div>
                        </a>
                    </nav>

                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-button"
                        class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed -->
                        <svg id="menu-closed-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open -->
                        <svg id="menu-open-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Add a spacer div to prevent content from hiding under fixed header -->
        <div class="h-20"></div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden fixed top-20 left-0 right-0 bg-white shadow-lg rounded-b-xl transform transition-all duration-300 ease-in-out z-40">
            <div class="px-4 py-3 space-y-2 max-h-[80vh] overflow-y-auto">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-900 hover:bg-gray-50 transition-colors">
                    Home
                </a>
                
                <!-- Mobile About Us Dropdown -->
                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-4 py-2.5 rounded-lg text-base font-medium text-gray-900 hover:bg-gray-50 transition-colors">
                        <span>About Us</span>
                        <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden pl-4 mt-1 space-y-1 bg-gray-50 rounded-lg">
                    
                        <a href="<?php echo esc_url(home_url('/values')); ?>" class="block px-4 py-2.5 text-base font-medium text-gray-700 hover:bg-gray-100 transition-colors">Our Values</a>
                    </div>
                </div>

               

                <!-- Blog link for mobile menu -->
             <!--   <a href="<?php echo esc_url(home_url('/blog')); ?>" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-900 hover:bg-gray-50 transition-colors">
                    Blog
                </a> -->

                <!-- Survey link for mobile menu -->
                <a href="<?php echo esc_url(home_url('/survey')); ?>" class="block px-4 py-2.5 rounded-lg text-base font-medium text-gray-900 hover:bg-gray-50 transition-colors">
                    Survey
                </a>

                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block px-4 py-2.5 rounded-lg text-base font-medium text-white bg-red-600 hover:bg-red-700 transition-colors">
                    Contact Us
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuClosedIcon = document.getElementById('menu-closed-icon');
            const menuOpenIcon = document.getElementById('menu-open-icon');
            const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');

            // Add initial transform for animation
            mobileMenu.style.transform = 'translateY(-1rem)';
            mobileMenu.style.opacity = '0';

            // Toggle mobile menu with slide animation
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                
                // Use requestAnimationFrame to ensure the transition works
                requestAnimationFrame(() => {
                    if (!mobileMenu.classList.contains('hidden')) {
                        // Show menu
                        mobileMenu.style.transform = 'translateY(0)';
                        mobileMenu.style.opacity = '1';
                    } else {
                        // Hide menu
                        mobileMenu.style.transform = 'translateY(-1rem)';
                        mobileMenu.style.opacity = '0';
                    }
                });

                menuClosedIcon.classList.toggle('hidden');
                menuOpenIcon.classList.toggle('hidden');
            });

            // Handle mobile dropdowns with smooth animation
            mobileDropdowns.forEach(dropdown => {
                const button = dropdown.querySelector('button');
                const content = dropdown.querySelector('div');
                const arrow = button.querySelector('svg');

                button.addEventListener('click', () => {
                    const isHidden = content.classList.contains('hidden');
                    
                    // Toggle hidden class
                    content.classList.toggle('hidden');
                    
                    // Animate the arrow
                    if (isHidden) {
                        arrow.style.transform = 'rotate(180deg)';
                        content.style.maxHeight = content.scrollHeight + 'px';
                        content.style.opacity = '1';
                    } else {
                        arrow.style.transform = 'rotate(0)';
                        content.style.maxHeight = '0';
                        content.style.opacity = '0';
                    }
                });
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileMenu.contains(event.target) && 
                    !mobileMenuButton.contains(event.target) && 
                    !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.style.transform = 'translateY(-1rem)';
                    mobileMenu.style.opacity = '0';
                    menuClosedIcon.classList.remove('hidden');
                    menuOpenIcon.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>