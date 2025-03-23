<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hivewise
 */

get_header();
?>

<main id="primary" class="container mx-auto px-4 py-12">
    <?php if (have_posts()) : ?>
        <header class="text-center mb-16">
            <?php
            the_archive_title('<h1 class="text-5xl font-bold text-gray-900 mb-4">', '</h1>');
            the_archive_description('<div class="archive-description max-w-3xl mx-auto text-lg text-gray-600 mt-6">', '</div>');
            ?>
            <div class="w-24 h-1 bg-red-600 mx-auto"></div>
        </header>

        <!-- Archive Filter Bar -->
        <div class="flex flex-wrap items-center justify-between mb-10 p-4 bg-gray-50 rounded-xl">
            <div class="mb-4 md:mb-0">
                <span class="text-gray-700 font-medium">
                    <?php 
                    $total_posts = $wp_query->found_posts;
                    printf(_n('%s Result', '%s Results', $total_posts, 'hivewise'), number_format_i18n($total_posts)); 
                    ?>
                </span>
            </div>
            <div class="flex flex-wrap gap-3">
                <?php if (is_category()) : ?>
                    <?php
                    $current_cat = get_queried_object();
                    $child_cats = get_categories(array('parent' => $current_cat->term_id, 'hide_empty' => true));
                    
                    if (!empty($child_cats)) : ?>
                        <div class="relative inline-block">
                            <select class="appearance-none bg-white border border-gray-300 rounded-lg py-2 pl-4 pr-10 text-gray-700 cursor-pointer focus:outline-none focus:ring-2 focus:ring-red-500" 
                                    onchange="if (this.value) window.location.href=this.value">
                                <option value="<?php echo get_category_link($current_cat->term_id); ?>">
                                    <?php echo esc_html__('All Subcategories', 'hivewise'); ?>
                                </option>
                                <?php foreach ($child_cats as $child_cat) : ?>
                                    <option value="<?php echo get_category_link($child_cat->term_id); ?>">
                                        <?php echo esc_html($child_cat->name); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="aspect-w-16 aspect-h-9 bg-gray-100">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 object-cover hover:scale-105 transition-transform duration-300']); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="p-6">
                        <header class="mb-4">
                            <?php
                            $categories = get_the_category();
                            if ($categories) :
                            ?>
                                <div class="mb-3">
                                    <span class="inline-block px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            
                            <?php the_title('<h2 class="text-xl font-bold text-gray-900 hover:text-red-600 transition-colors"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                        </header>

                        <div class="prose text-gray-600 mb-4">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-sm text-gray-500">
                                <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', ['class' => 'rounded-full mr-2']); ?>
                                <span><?php the_author(); ?></span>
                            </div>
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                                Read More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </footer>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            <nav class="flex justify-center">
                <?php
                $pagination = get_the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    ',
                    'next_text' => '
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    ',
                    'class' => 'flex space-x-2',
                ));

                echo str_replace(
                    'page-numbers',
                    'page-numbers inline-flex items-center justify-center w-10 h-10 border border-gray-300 rounded-full text-sm font-medium text-gray-700 hover:bg-gray-50',
                    $pagination
                );
                ?>
            </nav>
        </div>

    <?php else :
        get_template_part('template-parts/content', 'none');
    endif; ?>
</main>

<?php
get_footer();
