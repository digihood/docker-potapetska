<?php get_header(); ?>

<section class="pt-[140px] pb-[60px] bg-[linear-gradient(135deg,_#033869_0%,_#022d5e_100%)]">
    <div class="container-main">
        <h1 class="text-white">
            <?php printf(__('Vysledky hledani: %s', 'potapetska'), '<span class="text-yellow">' . get_search_query() . '</span>'); ?>
        </h1>
    </div>
</section>

<div class="container-main py-[60px]">
    <?php if (have_posts()) : ?>
    <div class="max-w-3xl">
        <?php while (have_posts()) : the_post(); ?>
        <article class="py-6 border-b border-primary/[0.08]">
            <h3 class="text-[1.15rem] mb-2">
                <a href="<?php the_permalink(); ?>" class="no-underline text-primary"><?php the_title(); ?></a>
            </h3>
            <p class="text-[0.88rem] text-gray-body leading-relaxed">
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
        </article>
        <?php endwhile; ?>
    </div>
    <?php the_posts_pagination(); ?>
    <?php else : ?>
    <p class="text-[1.1rem] text-gray-body"><?php _e('Nebyly nalezeny zadne vysledky.', 'potapetska'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
