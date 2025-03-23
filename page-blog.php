<?php
/**
 * Template Name: Blog Page
 * 
 * The template for displaying the Blog page
 *
 * @package hivewise
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Blog Hero Section -->
    <section class="bg-gradient-to-r from-gray-50 to-gray-100 py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">HiveWise Blog</h1>
                <p class="text-xl text-gray-600 mb-8">Insights, analysis, and the latest regional reports from our expert team</p>
                
                <!-- Search Form -->
                <div class="max-w-xl mx-auto">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="relative">
                            <input type="search" class="w-full px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" 
                                   placeholder="Search articles..." 
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
            </div>
        </div>
    </section>

    <!-- Blog Content Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <!-- Main Content -->
                <div class="w-full lg:w-2/3 px-4">
                    <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 10,
                        'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                    );

                    // The Query
                    $blog_query = new WP_Query($args);

                    // The Loop
                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('mb-12 pb-12 border-b border-gray-200'); ?>>
                            <div class="flex flex-wrap md:flex-nowrap">
                                <?php if (has_post_thumbnail()) : ?>
                                <div class="w-full md:w-1/3 mb-6 md:mb-0 md:pr-6">
                                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden rounded-xl">
                                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-auto hover:scale-105 transition-transform duration-300')); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                                
                                <div class="<?php echo has_post_thumbnail() ? 'w-full md:w-2/3' : 'w-full'; ?>">
                                    <header class="entry-header mb-4">
                                        <?php
                                        // Display categories
                                        $categories = get_the_category();
                                        if (!empty($categories)) :
                                        ?>
                                        <div class="mb-3">
                                            <?php foreach ($categories as $category) : ?>
                                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="inline-block bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">
                                                    <?php echo esc_html($category->name); ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <h2 class="entry-title text-2xl md:text-3xl font-bold mb-3">
                                            <a href="<?php the_permalink(); ?>" class="hover:text-red-600 transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                        
                                        <div class="entry-meta text-gray-500 text-sm mb-4">
                                            <span class="inline-flex items-center mr-4">
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
                                    </header>

                                    <div class="entry-content prose max-w-none mb-4">
                                        <?php the_excerpt(); ?>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center font-medium text-red-600 hover:text-red-800">
                                            Read More
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                    <?php
                        endwhile;
                        
                        // Pagination
                        echo '<div class="pagination flex justify-center mt-12">';
                        echo paginate_links(array(
                            'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'total'        => $blog_query->max_num_pages,
                            'current'      => max(1, get_query_var('paged')),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>',
                            'next_text'    => '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>',
                            'add_args'     => false,
                            'add_fragment' => '',
                            'class'        => 'pagination',
                        ));
                        echo '</div>';
                        
                        // Restore original Post Data
                        wp_reset_postdata();
                    else :
                    ?>
                        <div class="bg-gray-50 rounded-xl p-8 text-center">
                            <h3 class="text-xl font-semibold mb-2">No Posts Found</h3>
                            <p class="text-gray-600">We haven't published any posts yet. Check back soon!</p>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Sidebar -->
                <div class="w-full lg:w-1/3 px-4 mt-12 lg:mt-0">
                    <div class="sticky top-24">
                        <!-- Categories Widget -->
                        <div class="bg-gray-50 rounded-xl p-6 mb-8">
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
                        
                        <!-- Recent Posts Widget -->
                        <div class="bg-gray-50 rounded-xl p-6 mb-8">
                            <h3 class="text-xl font-bold mb-4">Recent Posts</h3>
                            <ul class="space-y-4">
                                <?php
                                $recent_posts = wp_get_recent_posts(array(
                                    'numberposts' => 5,
                                    'post_status' => 'publish'
                                ));
                                
                                foreach ($recent_posts as $post) :
                                ?>
                                <li class="border-b border-gray-200 pb-4 last:border-0 last:pb-0">
                                    <a href="<?php echo get_permalink($post['ID']); ?>" class="hover:text-red-600 transition-colors">
                                        <h4 class="font-medium line-clamp-2"><?php echo $post['post_title']; ?></h4>
                                        <span class="text-sm text-gray-500"><?php echo get_the_date('', $post['ID']); ?></span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- Tags Widget -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-4">Tags</h3>
                            <div class="flex flex-wrap gap-2">
                                <?php
                                $tags = get_tags(array(
                                    'orderby' => 'count',
                                    'order'   => 'DESC',
                                    'number'  => 20
                                ));
                                
                                if ($tags) :
                                    foreach ($tags as $tag) :
                                ?>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="inline-block bg-white text-gray-700 text-sm px-3 py-1 rounded-full border border-gray-300 hover:bg-gray-100 transition-colors">
                                    <?php echo esc_html($tag->name); ?>
                                </a>
                                <?php 
                                    endforeach;
                                else :
                                    echo '<p class="text-gray-500">No tags found</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();