<?php
function inc_pagination($loop)
{
    $total_pages = $loop->max_num_pages;
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        $url = rtrim(get_pagenum_link(1), '/');
        $url = explode('?',$url);
        echo paginate_links(array(
            // 'base'      => '/work%_%',
            // 'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => __('Prev'),
            'next_text' => __('Next'),
        ));
    }

}

function inc_pagination_insights($loop)
{
    $total_pages = $loop->max_num_pages;
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        $url = rtrim(get_pagenum_link(1), '/');
        $url = explode('?',$url);
        echo paginate_links(array(
            'base'      => '/insights%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => __('Prev'),
            'next_text' => __('Next'),
        ));
    }

}

/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @global WP_Query $wp_query
 * @since  1.6.0
 * @uses  [the_posts_pagination](https://developer.wordpress.org/reference/functions/the_posts_pagination/)
 *
 * @param array $args (optional) Post pagination arguments.
 */
function informatics_pagination($args = array())
{

    global $wp_query;

    if (empty($wp_query->max_num_pages) || (int) $wp_query->max_num_pages < 2) {

        return;

    }

    global $post;

    $post_type_labels = get_post_type_labels(get_post_type_object($post->post_type));
    $post_type_label = isset($post_type_labels->singular_name) ? $post_type_labels->singular_name : $post->post_type;

    /**
     * Filter the default post pagination args.
     *
     * @since 1.6.0
     *
     * @param int $current The current page number.
     * @param int $total   The total number of pages.
     *
     * @var array
     */
    $defaults = (array) apply_filters('informatics_pagination_default_args', array(
        'prev_text' => __('&larr; Previous', 'primer'),
        'next_text' => __('Next &rarr;', 'primer'),
        'screen_reader_text' => sprintf( /* translators: post type singular label */esc_html__('%1$s navigation', 'primer'), esc_html($post_type_label)),
    ), max(1, get_query_var('paged')), absint($wp_query->max_num_pages));

    $args = wp_parse_args($args, $defaults);

    the_posts_pagination($args);

}

/* Upload Size */
@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );


