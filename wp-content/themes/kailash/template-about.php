<?php
/**
 * Template Name: About Us
 * Description: Trang giới thiệu với cấu trúc Grid hiển thị các mục con (Giống Nishimura & Asahi)
 *
 * @package kailash
 */

get_header(); 

// Lấy ID trang hiện tại
$current_id = get_the_ID();
?>

<div class="wrapper-about-us bg-white min-h-screen">
    <!-- 1. HERO BANNER & BREADCRUMB -->
    <div class="relative w-full h-[400px] bg-gray-900 overflow-hidden">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover opacity-60']); ?>
        <?php else : ?>
            <img src="https://dummyimage.com/1920x600/125f4b/fff&text=About+Us" class="w-full h-full object-cover opacity-60">
        <?php endif; ?>
        
        <!-- <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 z-10">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 uppercase tracking-widest">
                <?php the_title(); ?>
            </h1>
        </div> -->
    </div>

    <div class="container mx-auto px-4 pt-4 pb-16 lg:pb-24">
        <!-- Breadcrumb đơn giản -->
        <?php
            if (function_exists('kailash_breadcrumbs')) {
                kailash_breadcrumbs();
            } else {
                // Fallback nếu chưa include file breadcrumbs
                ?>
                <div class="breadcrumb text-sm text-gray-500 mb-6">
                    <a href="<?php echo home_url(); ?>">Home</a> / 
                    <span class="text-gray-900"><?php the_title(); ?></span>
                </div>
                <?php
            }
        ?>
        <!-- 2. MAIN MESSAGE (Lời ngỏ / Giới thiệu chung) -->
        <div class=" mb-20">
            <div class="head-list-experience">
                <h2 class="text-4xl font-semibold text-black my-[3rem]"><?php pll_e('Giới thiệu') ?> </h2>
            </div>
            <div class="text-base md:text-xl text-gray-700 leading-relaxed font-light">
                <?php 
                // Hiển thị nội dung nhập trong Editor
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="w-24 h-1 bg-[#125f4b] mx-auto mt-10"></div>
        </div>

    </div>


    // 3 triết lý kinh doanh

    // Danh sách CEO

    //Danh sách cộng SỰ

    <!-- 4. KEY FACTS SECTION (Phần thống kê giống các web luật) -->
    <div class="bg-[#f8f9fa] py-16 border-t border-gray-200">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-200">
                
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold text-[#125f4b] mb-2 font-gilda">1966</div>
                    <div class="text-sm text-gray-500 uppercase tracking-widest"><?php pll_e('Năm thành lập'); ?></div>
                </div>
                
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold text-[#125f4b] mb-2 font-gilda">800+</div>
                    <div class="text-sm text-gray-500 uppercase tracking-widest"><?php pll_e('Luật sư & Chuyên gia'); ?></div>
                </div>

                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold text-[#125f4b] mb-2 font-gilda">20+</div>
                    <div class="text-sm text-gray-500 uppercase tracking-widest"><?php pll_e('Văn phòng toàn cầu'); ?></div>
                </div>

                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-bold text-[#125f4b] mb-2 font-gilda">TOP 1</div>
                    <div class="text-sm text-gray-500 uppercase tracking-widest"><?php pll_e('Hãng luật uy tín'); ?></div>
                </div>

            </div>
        </div>
    </div>

    //Gắn map google

</div>

<?php
get_footer(); // Tải file footer.php
?>
