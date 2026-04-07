<?php get_header(); ?>

<section class="pt-[140px] pb-[60px] bg-[linear-gradient(135deg,_#033869_0%,_#022d5e_100%)]">
    <div class="container-main">
        <div class="section-label mb-4">
            <div class="section-label-line"></div>
            <span class="section-label-text text-yellow"><?php echo get_post_type_object(get_post_type())->labels->singular_name; ?></span>
        </div>
        <h1 class="text-white"><?php the_title(); ?></h1>
    </div>
</section>

<div class="container-main py-[60px]">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content max-w-3xl">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
