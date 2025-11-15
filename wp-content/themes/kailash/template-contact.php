<?php
    /**
     * Template Name: Trang Liên Hệ
     * @package kailash
     */
    get_header(); // Tải file header.php
?>

<h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
<div class="my-custom-tailwind-wrapper">
    <?php echo do_shortcode('[contact-form-7 id="123" title="Form Liên Hệ"]'); ?>
</div>
