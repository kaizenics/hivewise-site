<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hivewise
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Single Post Hero Section -->
    <section class="bg-gradient-to-r from-gray-50 to-gray-100 py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <?php
                // Display categories
                $categories = get_the_category();
                if (!empty($categories)) :
                ?>
                <div class="mb-4 text-center">
                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="inline-block bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-center"><?php the_title(); ?></h1>
                
                <div class="flex items-center justify-center text-gray-500 text-sm mb-8">
                    <span class="inline-flex items-center mr-6">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                        <?php echo get_the_date(); ?>
                    </span>
                    
                    <span class="inline-flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        <?php the_author(); ?>
                    </span>
                </div>
                
                <?php if (has_post_thumbnail()) : ?>
                <div class="mb-8 rounded-xl overflow-hidden shadow-lg">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Post Content Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <!-- Main Content -->
                <div class="w-full lg:w-2/3 px-4">
                    <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-xl shadow-sm p-6 md:p-8'); ?>>
                        <div class="entry-content prose prose-lg max-w-none mb-8">
                            <?php the_content(); ?>
                        </div>

                        <div class="entry-footer mt-8 pt-8 border-t border-gray-200">
                            <?php
                            // Display tags
                            $tags = get_the_tags();
                            if ($tags) : ?>
                                <div class="flex flex-wrap items-center mb-6">
                                    <span class="text-gray-700 font-medium mr-3">Tags:</span>
                                    <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="inline-block bg-gray-100 text-gray-800 text-sm px-3 py-1 rounded-full mr-2 mb-2 hover:bg-gray-200 transition-colors">
                                            <?php echo esc_html($tag->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Post Navigation -->
                            <div class="flex flex-wrap justify-between mt-8 pt-8 border-t border-gray-200">
                                <?php
                                $prev_post = get_previous_post();
                                $next_post = get_next_post();
                                ?>
                                
                                <div class="w-1/2 pr-2">
                                    <?php if (!empty($prev_post)) : ?>
                                        <span class="block text-sm text-gray-500 mb-1">Previous Post</span>
                                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="text-red-600 hover:text-red-800 font-medium">
                                            <?php echo esc_html(get_the_title($prev_post->ID)); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="w-1/2 pl-2 text-right">
                                    <?php if (!empty($next_post)) : ?>
                                        <span class="block text-sm text-gray-500 mb-1">Next Post</span>
                                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="text-red-600 hover:text-red-800 font-medium">
                                            <?php echo esc_html(get_the_title($next_post->ID)); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Comments Section -->
                    <div class="mt-12">
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                
                <!-- Sidebar -->
                <div class="w-full lg:w-1/3 px-4 mt-12 lg:mt-0">
                    <div class="sticky top-24">
                        <!-- Author Widget -->
                        <div class="bg-gray-50 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4">About the Author</h3>
                            <div class="flex items-center mb-4">
                                <?php echo get_avatar(get_the_author_meta('ID'), 60, '', '', array('class' => 'rounded-full mr-4')); ?>
                                <div>
                                    <h4 class="font-medium"><?php the_author(); ?></h4>
                                    <?php if (get_the_author_meta('description')) : ?>
                                        <p class="text-sm text-gray-600"><?php the_author_meta('description'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="inline-block w-full bg-gray-200 text-gray-800 text-center px-4 py-2 rounded-lg hover:bg-gray-300 transition-colors">
                                View All Posts
                            </a>
                        </div>
                        
                        <!-- Recent Posts Widget -->
                        <div class="bg-gray-50 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4">Recent Posts</h3>
                            <ul class="space-y-4">
                                <?php
                                $recent_posts = wp_get_recent_posts(array(
                                    'numberposts' => 5,
                                    'post_status' => 'publish',
                                    'exclude' => get_the_ID() // Exclude current post
                                ));
                                
                                foreach ($recent_posts as $post_item) :
                                ?>
                                <li class="border-b border-gray-200 pb-4 last:border-0 last:pb-0">
                                    <a href="<?php echo get_permalink($post_item['ID']); ?>" class="hover:text-red-600 transition-colors">
                                        <h4 class="font-medium line-clamp-2"><?php echo $post_item['post_title']; ?></h4>
                                        <span class="text-sm text-gray-500"><?php echo get_the_date('', $post_item['ID']); ?></span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- Categories Widget -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-4">Categories</h3>
                            <ul class="space-y-2">
                                <?php
                                $categories = get_categories(array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC'
                                ));
                                
                                foreach ($categories as $category) :
                                ?>
                                <li>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="flex items-center justify-between text-gray-700 hover:text-red-600 transition-colors">
                                        <span><?php echo esc_html($category->name); ?></span>
                                        <span class="bg-gray-200 text-gray-700 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                            <?php echo esc_html($category->count); ?>
                                        </span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
