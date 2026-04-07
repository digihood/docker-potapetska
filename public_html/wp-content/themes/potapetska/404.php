<?php get_header(); ?>

<section class="pt-[160px] pb-[60px] bg-[linear-gradient(135deg,_#033869_0%,_#022d5e_100%)]">
    <div class="container-main">
        <div class="section-label mb-4">
            <div class="section-label-line"></div>
            <span class="section-label-text text-yellow">404</span>
        </div>
        <h1 class="text-white"><?php _e('Stranka nenalezena', 'potapetska'); ?></h1>
    </div>
</section>

<div class="container-main py-[80px] text-center">
    <p class="text-[1.1rem] text-gray-body mb-8 max-w-[500px] mx-auto">
        <?php _e('Omlouvame se, ale stranka, kterou hledate, neexistuje nebo byla presunuta.', 'potapetska'); ?>
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
        <?php _e('Zpet na uvod', 'potapetska'); ?>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
</div>

<?php get_footer(); ?>
