<?php

/**
 * Đăng ký Custom Post Types (Dịch vụ & Cộng sự)
 */
function kailash_register_post_types() {
    
    // 1. CPT cho Dịch vụ (Service)
    $service_labels = array(
        'name'          => _x( 'Dịch vụ', 'Post Type General Name', 'kailash' ),
        'singular_name' => _x( 'Dịch vụ', 'Post Type Singular Name', 'kailash' ),
        'menu_name'     => __( 'Dịch vụ', 'kailash' ),
        'all_items'     => __( 'Tất cả dịch vụ', 'kailash' ),
        'add_new_item'  => __( 'Thêm dịch vụ mới', 'kailash' ),
        'add_new'       => __( 'Thêm mới', 'kailash' ),
    );
    $service_args = array(
        'label'         => __( 'Dịch vụ', 'kailash' ),
        'labels'        => $service_labels,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'public'        => true,
        'show_in_menu'  => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-briefcase',
        'has_archive'   => true, // Kích hoạt trang archive-service.php
        'rewrite'       => array( 'slug' => 'dich-vu' ), // Đường dẫn
    );
    register_post_type( 'service', $service_args );

    // 2. CPT cho Cộng sự (Team Member)
    $team_labels = array(
        'name'          => _x( 'Cộng sự', 'Post Type General Name', 'kailash' ),
        'singular_name' => _x( 'Cộng sự', 'Post Type Singular Name', 'kailash' ),
        'menu_name'     => __( 'Đội ngũ Cộng sự', 'kailash' ),
        'all_items'     => __( 'Tất cả cộng sự', 'kailash' ),
        'add_new_item'  => __( 'Thêm cộng sự mới', 'kailash' ),
        'add_new'       => __( 'Thêm mới', 'kailash' ),
    );
    $team_args = array(
        'label'         => __( 'Cộng sự', 'kailash' ),
        'labels'        => $team_labels,
        'supports'      => array( 'title', 'editor', 'thumbnail' ), // Tí nữa ta sẽ thêm custom fields
        'public'        => true,
        'show_in_menu'  => true,
        'menu_position' => 6,
        'menu_icon'     => 'dashicons-groups',
        'has_archive'   => true, // Kích hoạt trang archive-team_member.php
        'rewrite'       => array( 'slug' => 'cong-su' ), // Đường dẫn
    );
    register_post_type( 'team_member', $team_args );

}
add_action( 'init', 'kailash_register_post_types', 0 );
