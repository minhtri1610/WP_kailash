<?php
/**
 * Template Name: Archive Services
 *
 * Trang này hiển thị danh sách tất cả "Dịch vụ".
 *
 * @package kailash
 */

get_header(); // Tải file header.php
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="bg-gray-100 py-16">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-center text-gray-800">
                    <?php post_type_archive_title(); // Tự động lấy tên CPT (ví dụ: "Dịch vụ") ?>
                </h1>
                </div>
        </div>

        <div class="container mx-auto px-4 py-12">

            <?php if ( have_posts() ) : ?>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <?php
                    /* Bắt đầu Vòng lặp (The Loop) */
                    while ( have_posts() ) :
                        the_post();
                    ?>
                        
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-shadow duration-300 hover:shadow-xl">
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover']); ?>
                                </a>
                            <?php endif; ?>

                            <div class="p-6">
                                <h2 class="text-2xl font-bold mb-2">
                                    <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-blue-600">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                
                                <div class="text-gray-700 mb-4">
                                    <?php the_excerpt(); // Hiển thị mô tả ngắn ?>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="inline-block text-blue-600 font-semibold hover:text-blue-800">
                                    <?php pll_e('Xem thêm'); // Dùng hàm Polylang để dịch "Xem thêm" ?>
                                </a>
                            </div>
                        </div>
                        <?php endwhile; ?>

                </div><?php
                // Thêm Phân trang (Pagination)
                the_posts_pagination( array(
                    'prev_text' => '<span class="p-2">' . __( '&laquo; Trang trước', 'kailash' ) . '</span>',
                    'next_text' => '<span class="p-2">' . __( 'Trang sau &raquo;', 'kailash' ) . '</span>',
                ) );
                ?>

            <?php else : ?>

                <p><?php esc_html_e( 'Rất tiếc, không tìm thấy dịch vụ nào.', 'kailash' ); ?></p>

            <?php endif; ?>

        </div></main></div><?php
get_footer(); // Tải file footer.php
?>
