<?php get_header(); ?>

<section style="padding:140px 0 60px;background:linear-gradient(135deg, #033869 0%, #022d5e 100%);">
    <div class="container-main">
        <h1 style="color:#ffffff;"><?php _e('Blog', 'potapetska'); ?></h1>
    </div>
</section>

<div class="container-main" style="padding:60px 0;">
    <?php if (have_posts()) : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while (have_posts()) : the_post(); ?>
        <article class="project-card">
            <?php if (has_post_thumbnail()) : ?>
            <div style="height:200px;overflow:hidden;">
                <?php the_post_thumbnail('medium_large', array('style' => 'width:100%;height:100%;object-fit:cover;display:block;')); ?>
            </div>
            <?php endif; ?>
            <div style="padding:24px;">
                <h3 style="font-size:1.15rem;margin-bottom:8px;">
                    <a href="<?php the_permalink(); ?>" class="no-underline" style="color:#033869;">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p style="font-size:0.88rem;color:#6b7280;line-height:1.6;">
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                </p>
            </div>
        </article>
        <?php endwhile; ?>
    </div>
    <?php the_posts_pagination(); ?>
    <?php else : ?>
    <p><?php _e('Zadne prispevky.', 'potapetska'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
