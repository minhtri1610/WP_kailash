<?php
/**
 * Template Name: Trang Chủ
 *
 * Đây là template cho trang chủ, nó sẽ tự động được
 * WordPress sử dụng khi file này tồn tại.
 *
 * @package kailash
 */

get_header(); // Tải file header.php
?>

<main id="primary" class="site-main">

<?php get_template_part('template-parts/banner'); ?>

    <!-- search -->
    <section id="search" class="container relative h-[180px]">
        <div class="wapper-search grid grid-cols-3 bg-[#2b2b2b] gap-1 absolute -top-[60px]">
            <div class="col-span-1 p-4 border-r border-[#555555]"> 
                <div class="p-4 text-white">
                    <h2 class="text-3xl font-bold mb-4"><?php pll_e('Tìm Kiếm'); ?></h2>
                    <div class="desc-find">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nemo atque corporis. Quod id dignissimos dicta totam sint placeat delectus expedita natus?
                    </div>
                </div>
            </div>
            <div class="col-span-2 p-4 flex align-center justify-center items-center">
                <div class="el-search flex align-center items-center w-[80%] relative">
                    <input type="text" class="w-full px-4 py-4 bg-[#414141] text-white text-base outline-none" placeholder="<?php pll_e('Tìm theo tên, từ khóa...'); ?>">
                    <button type="submit" class="text-white absolute right-4">
                        <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        width="24" 
                        height="24" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round"
                        >
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Danh sách dịch vụ -->
    <section class="container mt-[2em]" id="insight">
        <h2 class="text-4xl font-bold text-black mb-6">Insight</h2>
        <div class="wapper-insight grid grid-cols-3 gap-4">
            <div class="left-insight col-span-2 h-full">
                <a class="insight-item relative h-full" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insights/insight-1.jpg" alt="" class="w-full h-full opacity-100 hover:opacity-60 transition-opacity duration-300 ease-out">
                    <div class="ins-title absolute bottom-0 left-0 text-2xl bg-[#00000062] p-2 w-full">
                        <h3 class="text-white pl-2 ">Insight 1</h3>
                    </div>
                </a>
            </div>
            <div class="right-insight grid grid-rows-2 gap-4">
                <a class="insight-item relative" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insights/insight-2.jpg" alt="" class="w-full opacity-100 hover:opacity-60 transition-opacity duration-300 ease-out">
                    <div class="ins-title absolute bottom-0 left-0 text-2xl bg-[#00000062] p-2 w-full">
                        <h3 class="text-white pl-2 ">Insight 2</h3>
                    </div>
                </a>

                <a class="insight-item relative" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insights/insight-3.jpg" alt="" class="w-full opacity-100 hover:opacity-60 transition-opacity duration-300 ease-out">
                    <div class="ins-title absolute bottom-0 left-0 text-2xl bg-[#00000062] p-2 w-full">
                        <h3 class="text-white pl-2 ">Insight 3</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Danh sách bài viết trong dịch vụ, lấy 3 bài mới nhất, 3 đề tài mới nhất -->
    <section id="knowledge" class="container mt-[2em]">
        <div class="wapper-knowledge grid grid-cols-3 gap-4">
            <div class="kn-items">
                <div class="kn-head">
                    <h2 class="text-4xl font-bold text-black mb-6">Knowledge</h2>
                    <a href="#" class="text-black">View All</a>
                </div>
                <div class="kn-content">
                    <div class="kn-item">
                        
                    </div>
                </div>
                <h2 class="text-4xl font-bold text-black mb-6">Knowledge</h2>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 py-16">
        <div class="max-w-3xl mx-auto text-center prose lg:prose-xl">
            <?php
            // Vòng lặp để lấy nội dung bạn gõ trong admin của trang "Trang chủ"
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile; 
            ?>
        </div>
    </section>

    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">
                <?php pll_e('Dịch vụ nổi bật'); // Lấy chuỗi đã dịch ?>
            </h2>
            
            <?php
            // Thiết lập Query
            $args_services = array(
                'post_type'      => 'service', // Tên CPT
                'posts_per_page' => 3,         // Lấy 3 dịch vụ
                'orderby'        => 'date',
                'order'          => 'DESC',
                'lang'           => pll_current_language() // QUAN TRỌNG: Chỉ lấy bài của ngôn ngữ hiện tại
            );
            $service_query = new WP_Query( $args_services );
            ?>

            <?php if ( $service_query->have_posts() ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
                        <div class="bg-white p-6 shadow-lg rounded-lg">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 object-cover mb-4 rounded']); ?>
                                </a>
                            <?php endif; ?>
                            <h3 class="text-xl font-bold mb-2">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="text-gray-700">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                
                </div>
            <?php
                wp_reset_postdata(); // Reset query, rất quan trọng!
            else :
            ?>
                <p class="text-center"><?php esc_html_e( 'Chưa có dịch vụ nào.', 'kailash' ); ?></p>
            <?php endif; ?>
            
        </div>
    </section>

    <section class="bg-blue-800 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <span class="text-4xl font-bold">50+</span>
                    <p>Cộng sự</p>
                </div>
                <div>
                    <span class="text-4xl font-bold">100+</span>
                    <p>Dự án</p>
                </div>
                </div>
        </div>
    </section>

    </main>

<?php
get_footer(); // Tải file footer.php
?>
