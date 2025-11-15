<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kailash
 */

?>
	<footer class="bg-gradient-to-b from-[#016549] to-[#003425] pt-10 relative">
		<div class="wapper-footer container">
			<div class="list-menu border-b border-b-[#C4C4C4]/20">
				<?php
					wp_nav_menu(array(
						'menu_id'        => 'footer-menu',
						'theme_location' => 'footer_menu',
						'container'      => false,
						'menu_class'     => 'top-menu flex flex-row content-center justify-start space-x-4',
						'fallback_cb'    => false,
					));
				?>
			</div>
			<div class="footer-info my-4">
				<h2 class="font-bold text-3xl text-white">Kailash</h2>
				<p class="text-white text-base pb-5">Investment & Corporate Governance Counsel</p>
				<p class="text-[#dfdfdf] text-base pb-3"><i class="fa-solid fa-barcode"></i> Tax Code: 0123456789</p>
				<p class="text-[#dfdfdf] text-base pb-3"><i class="fa-solid fa-mobile-screen-button"></i> Hotline: 0900 123 456 | <i class="fa-regular fa-envelope"></i> Email: xxx@xxx</p>
				<p class="text-[#dfdfdf] text-base pb-3"><i class="fa-regular fa-building"></i> Địa chỉ: xxx - xxx - Hồ Chí Minh</p>
			</div>
			<div class="list-social-media">
				<ul class="flex flex-row">
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb.svg" alt=""></a></li>

					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/linkedin.svg" alt=""></a></li>

					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/zalo.svg" alt=""></a></li>
				</ul>
			</div>
			<div class="copyright text-center pb-3">
				<p class="text-[#dfdfdf] text-base">© 2025 Kailash. All rights reserved.</p>
			</div>
		</div>
		<div class="footer-arrows">

		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.banner-header').slick({
			fade: true,
			dotsClass: 'slick-dots',
			arrows: false,
			autoplay: false,
			autoplaySpeed: 3000,
        });
    });
</script>
</body>
</html>
