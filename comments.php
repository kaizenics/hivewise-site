<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hivewise
 */

/**
 * Custom comment callback
 */
if (!function_exists('hivewise_comment_callback')) :
    function hivewise_comment_callback($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
        <li id="comment-<?php comment_ID(); ?>" <?php comment_class('pt-6 first:pt-0'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                <div class="comment-meta flex items-start mb-4">
                    <div class="comment-author vcard mr-4">
                        <?php echo get_avatar($comment, $args['avatar_size'], '', '', array('class' => 'rounded-full')); ?>
                    </div>
                    <div>
                        <div class="font-medium text-gray-900">
                            <?php echo get_comment_author_link(); ?>
                        </div>
                        <div class="comment-metadata text-sm text-gray-500 mt-1">
                            <time datetime="<?php comment_time('c'); ?>">
                                <?php
                                printf(
                                    /* translators: 1: Comment date, 2: Comment time */
                                    __('%1$s at %2$s', 'hivewise'),
                                    get_comment_date(),
                                    get_comment_time()
                                );
                                ?>
                            </time>
                            <?php edit_comment_link(__('Edit', 'hivewise'), ' <span class="mx-1">•</span> <span class="edit-link text-red-600 hover:text-red-800">', '</span>'); ?>
                        </div>
                    </div>
                </div>

                <div class="comment-content prose max-w-none mb-4">
                    <?php comment_text(); ?>
                </div>

                <div class="reply">
                    <?php
                    comment_reply_link(
                        array_merge(
                            $args,
                            array(
                                'add_below' => 'div-comment',
                                'depth'     => $depth,
                                'max_depth' => $args['max_depth'],
                                'before'    => '<span class="text-sm text-red-600 hover:text-red-800 font-medium">',
                                'after'     => '</span>',
                            )
                        )
                    );
                    ?>
                </div>
            </article>
        </li>
        <?php
    }
endif;

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area bg-white rounded-xl shadow-sm p-6 md:p-8">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title text-2xl font-bold mb-6">
			<?php
			$hivewise_comment_count = get_comments_number();
			if ( '1' === $hivewise_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'hivewise' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $hivewise_comment_count, 'comments title', 'hivewise' ) ),
					number_format_i18n( $hivewise_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<?php 
		the_comments_navigation(array(
			'prev_text' => '<span class="inline-flex items-center text-red-600 hover:text-red-800"><svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Older Comments</span>',
			'next_text' => '<span class="inline-flex items-center text-red-600 hover:text-red-800">Newer Comments <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>',
		)); 
		?>

		<ol class="comment-list space-y-6 mb-8 divide-y divide-gray-100">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 60,
					'callback'    => 'hivewise_comment_callback',
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation(array(
			'prev_text' => '<span class="inline-flex items-center text-red-600 hover:text-red-800"><svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Older Comments</span>',
			'next_text' => '<span class="inline-flex items-center text-red-600 hover:text-red-800">Newer Comments <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>',
		));

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments bg-yellow-50 text-yellow-800 p-4 rounded-lg"><?php esc_html_e( 'Comments are closed.', 'hivewise' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	// Custom comment form
	$commenter = wp_get_current_commenter();
	$consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	
	$fields = array(
		'author' => '<div class="comment-form-author mb-4">
						<label for="author" class="block text-sm font-medium text-gray-700 mb-1">' . __( 'Name', 'hivewise' ) . ' <span class="required text-red-600">*</span></label>
						<input id="author" name="author" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" required />
					</div>',
		'email'  => '<div class="comment-form-email mb-4">
						<label for="email" class="block text-sm font-medium text-gray-700 mb-1">' . __( 'Email', 'hivewise' ) . ' <span class="required text-red-600">*</span></label>
						<input id="email" name="email" type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" required />
					</div>',
		'url'    => '<div class="comment-form-url mb-4">
						<label for="url" class="block text-sm font-medium text-gray-700 mb-1">' . __( 'Website', 'hivewise' ) . '</label>
						<input id="url" name="url" type="url" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />
					</div>',
		'cookies' => '<div class="comment-form-cookies-consent mb-4 flex items-start">
						<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" class="mt-1 mr-2" value="yes"' . $consent . ' />
						<label for="wp-comment-cookies-consent" class="text-sm text-gray-600">' . __( 'Save my name, email, and website in this browser for the next time I comment.', 'hivewise' ) . '</label>
					</div>',
	);
	
	$comments_args = array(
		'fields'               => $fields,
		'comment_field'        => '<div class="comment-form-comment mb-4">
									<label for="comment" class="block text-sm font-medium text-gray-700 mb-1">' . _x( 'Comment', 'noun', 'hivewise' ) . ' <span class="required text-red-600">*</span></label>
									<textarea id="comment" name="comment" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent" rows="6" required></textarea>
								</div>',
		'class_form'           => 'comment-form bg-gray-50 p-6 rounded-xl mt-8',
		'title_reply'          => '<span class="text-2xl font-bold block mb-4">' . __( 'Leave a Comment', 'hivewise' ) . '</span>',
		'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h3>',
		'class_submit'         => 'submit bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-lg transition-colors',
		'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
		'comment_notes_before' => '<p class="comment-notes text-sm text-gray-600 mb-4">' . __( 'Your email address will not be published. Required fields are marked *', 'hivewise' ) . '</p>',
	);
	
	comment_form( $comments_args );
	?>

</div><!-- #comments -->
