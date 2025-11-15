<?php
/**
 * Template Name: Archive Team Members
 *
 * Trang này hiển thị danh sách tất cả "Cộng sự".
 *
 * @package kailash
 */

get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="bg-gray-100 py-16">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-center text-gray-800">
                    <?php post_type_archive_title(); // Tự động lấy tên CPT (ví dụ: "Cộng sự") ?>
                </h1>
            </div>
        </div>

        <div class="container mx-auto px-4 py-12">

            <?php if ( have_posts() ) : ?>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <?php
                    /* Bắt đầu Vòng lặp (The Loop) */
                    while ( have_posts() ) :
                        the_post();
                        
                        // Lấy dữ liệu Custom Field (Chúng ta sẽ cần ACF cho việc này)
                        // $position = get_field('chuc_vu'); 
                    ?>
                        
                        <div class="bg-white text-center shadow-lg rounded-lg overflow-hidden">
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-64 object-cover object-top']); ?>
                                </a>
                            <?php endif; ?>

                            <div class="p-6">
                                <h2 class="text-2xl font-bold mb-1">
                                    <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-blue-600">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                
                                <?php // Hiển thị chức vụ (Sẽ cần ACF) ?>
                                <?php // if ( $position ) : ?>
                                <?php // endif; ?>
                                
                                </div>
                        </div>
                        <?php endwhile; ?>

                </div><?php
                // Phân trang
                the_posts_pagination();
                ?>

            <?php else : ?>

                <p><?php esc_html_e( 'Rất tiếc, không tìm thấy cộng sự nào.', 'kailash' ); ?></p>

            <?php endif; ?>

        </div></main></div><?php
get_footer();
?>
