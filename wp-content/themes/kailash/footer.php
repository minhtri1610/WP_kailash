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
				<p class="text-[#dfdfdf] text-base pb-3"><i class="fa-solid fa-barcode"></i> <?php pll_e('Mã số thuế'); ?> : <a href="tel:+84901234567" class="underline underline-offset-1">0123456789</a></p>
				<p class="text-[#dfdfdf] text-base pb-3"><i class="fa-solid fa-mobile-screen-button"></i> <?php pll_e('Liên hệ'); ?>: <a href="tel:+84901234567" class="underline underline-offset-1">012 345 6789</a> | <i class="fa-regular fa-envelope"></i> <?php pll_e('Email'); ?>: <a href="mailto:xxx@xxx" class="underline underline-offset-1">xxx@xxx</a></p>
				<p class="text-[#dfdfdf] text-base pb-3"><i class="fa-regular fa-building"></i> <?php pll_e('Địa chỉ'); ?>: xxx - xxx - Hồ Chí Minh</p>
			</div>
			<div class="list-social-media">
				<ul class="flex flex-row">
					<li class="mr-3"><a href=""><i class="fa-brands fa-facebook text-[#dfdfdf] text-3xl"></i></a></li>
					<li ><a href=""><i class="fa-brands fa-linkedin text-[#dfdfdf] text-3xl"></i></a></li>
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
			autoplay: true,
			autoplaySpeed: 3000,
        });

		$('#slides-top-people').slick({
			fade: true,
			dotsClass: 'slick-dots',
			arrows: false,
			autoplay: true,
			autoplaySpeed: 1000,
        });

		$('#list-people').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1000,
		});

		$('#slides-recent-work').slick({
			slidesToShow: 3,
			slidesToScroll: 3,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 1000,
        });
		
		
    });
	(function() {
		const animateNumber = (element, target, duration) => {
			let startTime;
			const initialNumber = 0;

			const easingFunction = t => 1 - Math.pow(1 - t, 4);

			const animate = time => {
			if (!startTime) startTime = time;
			const elapsedTime = time - startTime;
			const t = Math.min(elapsedTime / duration, 1);
			const newValue = initialNumber + (target - initialNumber) * easingFunction(t);

			element.textContent = Math.round(newValue);

			if (elapsedTime < duration) {
				requestAnimationFrame(animate);
			} else {
				element.textContent = target;
			}
			};

			requestAnimationFrame(animate);
		};

		const onIntersection = entries => {
			entries.forEach(entry => {
			if (entry.isIntersecting) {
				const el = entry.target;
				const finalNumber = parseInt(el.textContent, 10);
				const animDuration = parseInt(el.getAttribute('duration'), 10) || 2000;

				animateNumber(el, finalNumber, animDuration);
				observer.unobserve(el);
			}
			});
		};

		const observer = new IntersectionObserver(onIntersection);
		
		document.addEventListener("DOMContentLoaded", () => {
			document.querySelectorAll('[counter-element="number"]').forEach(el => {
			observer.observe(el);
			});
		});

		document.addEventListener("DOMContentLoaded", function() {
    
			// 1. Lấy tất cả các tab link và tab content
			const tabLinks = document.querySelectorAll(".tab-link");
			const tabContents = document.querySelectorAll(".tab-content");

			// Các class cho trạng thái Active (Đang chọn)
			const activeClasses = ["text-[#125f4b]", "border-b-2", "border-[#125f4b]"];
			
			// Các class cho trạng thái Inactive (Không chọn)
			const inactiveClasses = ["text-gray-500", "border-transparent", "hover:text-[#125f4b]", "hover:border-gray-300"];

			tabLinks.forEach(link => {
				link.addEventListener("click", (e) => {
					e.preventDefault(); // Ngăn chặn nhảy trang

					// A. XỬ LÝ STYLE CHO TAB LINK
					// Reset tất cả các tab về trạng thái inactive
					tabLinks.forEach(tab => {
						tab.classList.remove(...activeClasses);
						tab.classList.add(...inactiveClasses);
					});

					// Set tab được click thành active
					link.classList.remove(...inactiveClasses);
					link.classList.add(...activeClasses);

					// B. XỬ LÝ HIỂN THỊ CONTENT
					// Ẩn tất cả nội dung
					tabContents.forEach(content => {
						content.classList.add("hidden");
					});

					// Hiện nội dung tương ứng (Dựa vào data-target)
					const targetId = link.getAttribute("data-target");
					const targetContent = document.querySelector(targetId);
					if (targetContent) {
						targetContent.classList.remove("hidden");
					}
				});
			});
		});
	})();
</script>
</body>
</html>
