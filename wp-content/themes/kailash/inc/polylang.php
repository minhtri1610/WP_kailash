<?php
/**
 * Tất cả các chức năng liên quan đến Polylang
 *
 * @package kailash
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Thoát nếu truy cập trực tiếp.
}

/**
 * Đăng ký chuỗi văn bản (strings) cho Polylang
 */
add_action('init', function() {
    // Chỉ chạy khi plugin Polylang được kích hoạt
    if ( ! function_exists('pll_register_string') ) {
        return;
    }
    
    // Đăng ký chuỗi và nhóm chúng vào 'kailash' (tên theme)
    $group = 'kailash';

    pll_register_string('Recent Projects', 'Dự án gần đây', $group);
    pll_register_string('Featured Services', 'Dịch vụ nổi bật', $group);
    pll_register_string('Our Partners', 'Đối tác tiêu biểu', $group);
    pll_register_string('Read More', 'Xem thêm', $group);
    pll_register_string('Contact Us', 'Liên hệ', $group);
    
    // Các chuỗi bạn vừa thêm cho front-page
    pll_register_string('Homepage Hero Title', 'Viện Kailash', $group);
    pll_register_string('Homepage Hero Subtitle', 'Tư vấn chuyên nghiệp - Giải pháp tin cậy', $group);
    pll_register_string('Associates', 'Cộng sự', $group);
    pll_register_string('Projects', 'Dự án', $group);
    pll_register_string('No services found', 'Chưa có dịch vụ nào.', $group);

});
