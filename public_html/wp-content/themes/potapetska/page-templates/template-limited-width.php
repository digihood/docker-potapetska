<?php
/**
 * Template Name: Omezena sirka
 */
get_header();
?>

<section class="pt-[140px] pb-[60px] bg-[linear-gradient(135deg,_#033869_0%,_#022d5e_100%)]">
    <div class="container-main">
        <h1 class="text-white"><?php the_title(); ?></h1>
    </div>
</section>

<div class="container-main page-limited py-[60px]">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
