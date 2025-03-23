<?php
/**
 * Template Name: Team
 * 
 * The template for displaying the Our Team page
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-team.jpg" alt="Our Team Background" class="w-full h-full object-cover opacity-40">
        </div>
        
        <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Our Team</h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8">Meet the passionate individuals behind HiveWise's success</p>
                <div class="w-24 h-1 bg-red-600"></div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Leadership</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Meet Our Leaders</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">The visionaries guiding our company towards excellence</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Leader 1 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jane-smith.jpg" alt="Leader Name" class="w-full aspect-[4/5] object-cover transform group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-60 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <div class="flex gap-4">
                                <a href="#" class="text-white hover:text-red-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                                <a href="#" class="text-white hover:text-red-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Jane Smith</h3>
                    <p class="text-red-600 font-medium mb-4">Chief Executive Officer</p>
                    <p class="text-gray-600">With over 15 years of experience in data analytics and business intelligence.</p>
                </div>

                <!-- Leader 2 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/john-doe.jpg" alt="Leader Name" class="w-full aspect-[4/5] object-cover transform group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-60 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <div class="flex gap-4">
                                <a href="#" class="text-white hover:text-red-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                                <a href="#" class="text-white hover:text-red-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">John Doe</h3>
                    <p class="text-red-600 font-medium mb-4">Chief Technology Officer</p>
                    <p class="text-gray-600">Leading our technical innovation with expertise in AI and machine learning.</p>
                </div>

                <!-- Leader 3 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sarah-johnson.jpg" alt="Leader Name" class="w-full aspect-[4/5] object-cover transform group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-60 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <div class="flex gap-4">
                                <a href="#" class="text-white hover:text-red-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                                <a href="#" class="text-white hover:text-red-400"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Sarah Johnson</h3>
                    <p class="text-red-600 font-medium mb-4">Chief Operations Officer</p>
                    <p class="text-gray-600">Streamlining operations and ensuring excellence in service delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Grid Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold mb-4">Our Team</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">The People Behind Our Success</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Each member brings unique skills and perspectives to our mission</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member Card Template -->
                <?php
                $team_members = array(
                    array(
                        'name' => 'Michael Brown',
                        'role' => 'Senior Data Analyst',
                        'image' => 'michael-brown.jpg'
                    ),
                    array(
                        'name' => 'Emily Chen',
                        'role' => 'UX Designer',
                        'image' => 'emily-chen.jpg'
                    ),
                    array(
                        'name' => 'David Wilson',
                        'role' => 'Software Engineer',
                        'image' => 'david-willson.jpg'
                    ),
                    array(
                        'name' => 'Lisa Anderson',
                        'role' => 'Marketing Manager',
                        'image' => 'lisa-anderson.jpg'
                    ),
                    array(
                        'name' => 'James Taylor',
                        'role' => 'Product Manager',
                        'image' => 'james-taylor.jpg'
                    ),
                    array(
                        'name' => 'Maria Garcia',
                        'role' => 'Data Scientist',
                        'image' => 'maria-garcia.jpg'
                    ),
                    array(
                        'name' => 'Robert Kim',
                        'role' => 'Backend Developer',
                        'image' => 'robert-kim.jpg'
                    ),
                    array(
                        'name' => 'Sophie Martin',
                        'role' => 'Customer Success',
                        'image' => 'sophie-martin.jpg'
                    )
                );

                foreach ($team_members as $member) : ?>
                    <div class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="relative overflow-hidden rounded-lg mb-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $member['image']; ?>" 
                                 alt="<?php echo $member['name']; ?>" 
                                 class="w-full aspect-square object-cover transform group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1"><?php echo $member['name']; ?></h3>
                        <p class="text-red-600 font-medium"><?php echo $member['role']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>