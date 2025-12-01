<section class="bg-[#0e5644] mt-[3em] relative" id="people">
    <div class="wapper-people grid grid-cols-4">
        <div class="wapper-slide-people col-span-2" id="slides-top-people">
            <div class="bp-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people/p_01.jpg" alt="" class="h-auto w-auto min-h-[800px] min-w-full relative max-h-100">
            </div>
            <div class="bp-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people/p_02.jpg" alt="" class="h-auto w-auto min-h-[800px] min-w-full relative max-h-100">
            </div>
            <div class="bp-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people/p_03.jpg" alt="" class="h-auto w-auto min-h-[800px] min-w-full relative max-h-100">
            </div>
        </div>
        <div class="wapper-info-people mt-[5rem] col-span-2 ">
            <div class="content-info-people flex flex-col items-center justify-center">
                <h2 class="text-5xl text-white font-extrabold">Tiêu đề</h2>
                <div class="content-info text-white p-5 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus fuga libero dignissimos labore, magnam commodi possimus eos vel? Dicta perspiciatis quisquam accusantium impedit veniam delectus ad expedita facilis fugit ratione.
                </div>
            </div>
        </div>
    </div>
    <div class="absolute flex w-full min-h-[400px] top-[14rem] text-center z-[2] m-auto items-center">
        <!-- <div class="line-count flex w-full text-center my-0 mx-auto"> -->
        <div class="line-count flex w-full justify-center items-baseline gap-15 mx-auto">
            <div class="text-gray-700 flex items-baseline gap-2">
                <span class="text-white font-gilda text-[3rem] mr-2 -translate-y-1"><?php pll_e('Địa điểm'); ?></span>
                
                <span class="text-white font-gilda text-[12rem] leading-none" counter-element="number">22</span>
                
                <span class="text-white font-gilda text-[8rem] -translate-y-2">+</span>

                <!--  -->
            </div>
            <div class="w-[1px] h-[10rem] bg-white rotate-[20deg] translate-y-8 ml-4"></div>

            <div class="text-gray-700 ml-4 flex items-baseline gap-2">
                <span class="text-white font-gilda text-[3rem] mr-2 -translate-y-1"><?php pll_e('Chuyên gia'); ?></span>
                
                <span class="text-white font-gilda text-[12rem] leading-none" counter-element="number">100</span>
                
                <span class="text-white font-gilda text-[8rem] -translate-y-2">+</span>
            </div>

        </div>
    </div>

    <div class="list-people bg-white absolute w-[90%] min-h-[400px] bottom-[5rem] text-center z-[10]">
        <div id="list-people" class="p-[3rem]">
            <div class="p-item mt-[2.5em]">
                <div class="overflow-hidden mb-4 relative flex justify-center">
                    <img src="https://dummyimage.com/200x250/737373/fff&text=200x250px" 
                        alt="Nguyen Van A"
                        class="w-[200px] h-[250px] object-cover transition-transform duration-500 group-hover:scale-105 border border-gray-300"
                    >
                </div>

                <h3 class="text-2xl font-gilda text-gray-900 mb-1">Doãn Đức Thành 1</h3>
                <p class="text-sm font-nunito font-bold text-gray-400 uppercase tracking-widest">CEO & Founder</p>
            </div>
            <div class="p-item mt-[2.5em]">
                <div class="overflow-hidden mb-4 w-full relative flex justify-center">
                    <img src="https://dummyimage.com/200x250/737373/fff&text=200x250px" 
                        alt="Nguyen Van A"
                        class="w-[200px] h-[250px] object-cover transition-transform duration-500 group-hover:scale-105"
                    >
                </div>

                <h3 class="text-2xl font-gilda text-gray-900 mb-1">Doãn Đức Thành 2</h3>
                <p class="text-sm font-nunito font-bold text-gray-400 uppercase tracking-widest">CEO & Founder</p>
            </div>
            <div class="p-item mt-[2.5em]">
                <div class="overflow-hidden mb-4 w-full relative flex justify-center">
                    <img src="https://dummyimage.com/200x250/737373/fff&text=200x250px" 
                        alt="Nguyen Van A"
                        class="w-[200px] h-[250px] object-cover transition-transform duration-500 group-hover:scale-105"
                    >
                </div>

                <h3 class="text-2xl font-gilda text-gray-900 mb-1">Doãn Đức Thành 3</h3>
                <p class="text-sm font-nunito font-bold text-gray-400 uppercase tracking-widest">CEO & Founder</p>
            </div>

            <div class="p-item mt-[2.5em]">
                <div class="overflow-hidden mb-4 w-full relative flex justify-center">
                    <img src="https://dummyimage.com/200x250/737373/fff&text=200x250px" 
                        alt="Nguyen Van A"
                        class="w-[200px] h-[250px] object-cover transition-transform duration-500 group-hover:scale-105"
                    >
                </div>

                <h3 class="text-2xl font-gilda text-gray-900 mb-1">Doãn Đức Thành 4</h3>
                <p class="text-sm font-nunito font-bold text-gray-400 uppercase tracking-widest">CEO & Founder</p>
            </div>

            <div class="p-item mt-[2.5em]">
                <div class="overflow-hidden mb-4 w-full relative flex justify-center">
                    <img src="https://dummyimage.com/200x250/737373/fff&text=200x250px" 
                        alt="Nguyen Van A"
                        class="w-[200px] h-[250px] object-cover transition-transform duration-500 group-hover:scale-105"
                    >
                </div>

                <h3 class="text-2xl font-gilda text-gray-900 mb-1">Doãn Đức Thành 5</h3>
                <p class="text-sm font-nunito font-bold text-gray-400 uppercase tracking-widest">CEO & Founder</p>
            </div>
        </div>
    </div>
</section>
