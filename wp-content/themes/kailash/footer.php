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
	<footer id="site-footer" class="bg-gradient-to-b from-[#016549] to-[#003425] pt-10 relative">
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

		<a id="backToTop" href="#" class="fixed right-10 z-50 hidden p-3 transition-opacity duration-300"
    style="bottom: 20px;">Page Top</a>
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
<script>
	document.addEventListener('DOMContentLoaded', () => {
		const backToTopBtn = document.getElementById('backToTop');
		const footer = document.getElementById('site-footer');
		
		// Cấu hình khoảng cách
		const defaultBottom = 20; // Cách đáy màn hình 20px khi ở trạng thái bình thường
		const offsetFromFooter = 20; // Cách mép trên của footer 20px khi chạm footer

		// Hàm cập nhật vị trí nút
		const updateButtonPosition = () => {
			// 1. Logic Ẩn/Hiện
			if (window.scrollY > 300) {
				backToTopBtn.classList.remove('hidden');
				// Thêm chút delay nhỏ để transition opacity hoạt động nếu muốn
			} else {
				backToTopBtn.classList.add('hidden');
			}

			// 2. Logic Tránh Footer (Quan trọng)
			if (footer) {
				// Lấy vị trí của footer so với viewport hiện tại
				const footerRect = footer.getBoundingClientRect();
				const windowHeight = window.innerHeight;

				// Nếu đỉnh của footer nằm trong vùng nhìn thấy (viewport)
				if (footerRect.top < windowHeight) {
					// Tính toán khoảng cách nút bị đẩy lên
					// Công thức: (Chiều cao màn hình - Vị trí đỉnh footer) + Khoảng cách mong muốn
					const newBottom = (windowHeight - footerRect.top) + offsetFromFooter;
					backToTopBtn.style.bottom = `${newBottom}px`;
				} else {
					// Nếu chưa thấy footer, reset về vị trí mặc định
					backToTopBtn.style.bottom = `${defaultBottom}px`;
				}
			}
		};

		// Hàm cuộn mượt (Custom Animation) - Đảm bảo mượt trên mọi trình duyệt
		const smoothScrollToTop = () => {
			const startPosition = window.scrollY;
			const targetPosition = 0;
			const distance = targetPosition - startPosition;
			const duration = 500; // Tốc độ cuộn (ms)
			let startTime = null;

			function animation(currentTime) {
				if (startTime === null) startTime = currentTime;
				const timeElapsed = currentTime - startTime;
				const run = easeOutCubic(timeElapsed, startPosition, distance, duration);
				window.scrollTo(0, run);
				if (timeElapsed < duration) requestAnimationFrame(animation);
			}

			function easeOutCubic(t, b, c, d) {
				t /= d;
				t--;
				return c * (t * t * t + 1) + b;
			}

			requestAnimationFrame(animation);
		};

		// Gắn sự kiện
		window.addEventListener('scroll', updateButtonPosition);
		window.addEventListener('resize', updateButtonPosition); // Cập nhật khi xoay màn hình/resize
		backToTopBtn.addEventListener('click', smoothScrollToTop);
	});
</script>
</body>
</html>
