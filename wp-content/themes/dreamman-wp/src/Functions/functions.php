<?php 

function return_category ($post_id, $category_type, $first_item = true) {
    $return_cat = [];
    $categories = get_the_terms($post_id, $category_type);

    if (!empty($categories)) {
        foreach($categories as $category) {
            $return_cat[] = [
                'id' => $category->term_id,
                'title' => $category->name,
                'slug'  => $category->slug,
                'link'  => get_term_link($category->term_id),
            ];
        }
    } else return [];

    if ($first_item) {
        return $return_cat[0];
    } else return $return_cat;
}