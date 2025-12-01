<?php
/**
 * Template Name: Archive People
 *
 * Trang này hiển thị danh sách tất cả "Cộng sự".
 *
 * @package kailash
 */

get_header(); 
?>

<div class="wapper-list-member">
    <div class="container c-list-member mb-[100px]">
        <div class="head-list-member">
            <h2 class="text-4xl font-semibold text-black my-[3rem]"><?php pll_e('Cộng sự') ?> </h2>
        </div>
        <div class="content-list-member">
            <div class="desc-list-member mb-[3rem]">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus saepe quas suscipit commodi voluptates, omnis sit repudiandae sed nobis! Illo, accusamus! Quidem reiciendis totam quas repellendus molestias excepturi vel magnam!
            </div>
            <div class="wapper-search grid grid-cols-3 bg-[#2b2b2b] gap-1 -top-[60px]">
                <div class="col-span-1 p-4 border-r border-[#555555]"> 
                    <div class="p-4 text-white">
                        <h2 class="text-3xl font-bold mb-4"><?php pll_e('s_tieu_de_tim_kiem'); ?></h2>
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

            <div class="result-member">
                <h4 class="my-[3rem]">Result 1 ~ 30 của 1000</h4>
                <div class="list-member grid grid-cols-4 gap-6">
                    <?php for ($i = 0; $i <= 15; $i++) { ?>
                        <div class="member-item my-3">
                            <a href="#" class="relative">
                                <img src="https://dummyimage.com/200x250/737373/fff&text=KaiLash(270x270px)" 
                                    alt="Nguyen Van A"
                                    class="w-full h-[270px] object-cover transition-transform duration-500 group-hover:scale-105 border border-gray-300"
                                >
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members/member-1.jpg" alt="" class="w-full"> -->
                                <div class="layer-gray absolute bottom-0 w-full h-full bg-[#000000] opacity-0 hover:opacity-50">
                                    <p class="text-white absolute p-4 top-1/2 max-w-[270px] max-h-[110px] line-clamp-4 text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, natus tenetur accusantium saepe suscipit voluptates veritatis eaque iste ullam cum! Dignissimos, a ipsa? Commodi autem aut ipsum laborum repellendus ipsam.
                                    </p>
                                </div>
                            </a>
                            <div class="member-info my-3">
                                <h3 class="text-[#125f4b] font-semibold text-3xl">Nguyễn Văn A</h3>
                                <p class="text-[#125f4b] my-3"><span>Partner</span> | <span>HCM</span></p>
                                <hr class="my-2 text-[#125f4b]">
                                <div class="m-contact flex flex-row justify-between items-center">
                                    <div class="m-phone ">
                                        <i class="fa-solid fa-phone"></i>
                                        <span><a href="tel:+84901234567" class="underline underline-offset-1">012 345 6789</a></span>
                                    </div>
                                    <div class="m-social">
                                        <i class="fa-brands fa-facebook p-3 rounded-full bg-[#f1f1f1] hover:bg-[#125f4b] hover:text-white"></i>
                                        <i class="fa-brands fa-linkedin p-3 rounded-full bg-[#f1f1f1] hover:bg-[#125f4b] hover:text-white"></i>
                                        <i class="fa-solid fa-envelope p-3 rounded-full bg-[#f1f1f1] hover:bg-[#125f4b] hover:text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
