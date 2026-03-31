<?php get_header(); ?>

<section style="padding:140px 0 60px;background:linear-gradient(135deg, #033869 0%, #022d5e 100%);">
    <div class="container-main">
        <h1 style="color:#ffffff;">
            <?php printf(__('Vysledky hledani: %s', 'potapetska'), '<span style="color:#fcdb00;">' . get_search_query() . '</span>'); ?>
        </h1>
    </div>
</section>

<div class="container-main" style="padding:60px 0;">
    <?php if (have_posts()) : ?>
    <div class="max-w-3xl">
        <?php while (have_posts()) : the_post(); ?>
        <article style="padding:24px 0;border-bottom:1px solid rgba(3,56,105,0.08);">
            <h3 style="font-size:1.15rem;margin-bottom:8px;">
                <a href="<?php the_permalink(); ?>" class="no-underline" style="color:#033869;"><?php the_title(); ?></a>
            </h3>
            <p style="font-size:0.88rem;color:#6b7280;line-height:1.6;">
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
        </article>
        <?php endwhile; ?>
    </div>
    <?php the_posts_pagination(); ?>
    <?php else : ?>
    <p style="font-size:1.1rem;color:#6b7280;"><?php _e('Nebyly nalezeny zadne vysledky.', 'potapetska'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
