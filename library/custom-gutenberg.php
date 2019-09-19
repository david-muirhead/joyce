<?php

function add_new_posts_admin_column($column) {
    $column['year'] = 'year';

    return $column;
}

add_filter('manage_posts_columns', 'add_new_posts_admin_column');

function add_new_posts_admin_column_show_value($column_name) {
    if ($column_name == 'year') {
        echo get_field('year');
    }
}

add_action('manage_posts_custom_column', 'add_new_posts_admin_column_show_value', 10, 2);

function add_new_posts_admin_columns_make_sortable($columns)
{
    $columns['year'] = 'year';

    return $columns;
}

add_filter("manage_edit-post_sortable_columns", "add_new_posts_admin_columns_make_sortable" );
