<?php get_header(); ?>

<section class="pt-[140px] pb-[60px] bg-[linear-gradient(135deg,_#033869_0%,_#022d5e_100%)]">
    <div class="container-main">
        <h1 class="text-white"><?php _e('Blog', 'potapetska'); ?></h1>
    </div>
</section>

<div class="container-main py-[60px]">
    <?php if (have_posts()) : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while (have_posts()) : the_post(); ?>
        <article class="project-card">
            <?php if (has_post_thumbnail()) : ?>
            <div class="h-[200px] overflow-hidden">
                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover block')); ?>
            </div>
            <?php endif; ?>
            <div class="p-6">
                <h3 class="text-[1.15rem] mb-2">
                    <a href="<?php the_permalink(); ?>" class="no-underline text-primary">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p class="text-[0.88rem] text-gray-body leading-relaxed">
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
