<?php get_header(); ?>

<section style="padding:140px 0 60px;background:linear-gradient(135deg, #033869 0%, #022d5e 100%);">
    <div class="container-main">
        <h1 style="color:#ffffff;"><?php the_title(); ?></h1>
    </div>
</section>

<div class="container-main" style="padding:60px 0;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content max-w-3xl">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
