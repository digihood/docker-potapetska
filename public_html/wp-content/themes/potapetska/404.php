<?php get_header(); ?>

<section style="padding:160px 0 60px;background:linear-gradient(135deg, #033869 0%, #022d5e 100%);">
    <div class="container-main">
        <div class="section-label" style="margin-bottom:16px;">
            <div class="section-label-line"></div>
            <span class="section-label-text" style="color:#fcdb00;">404</span>
        </div>
        <h1 style="color:#ffffff;"><?php _e('Stranka nenalezena', 'potapetska'); ?></h1>
    </div>
</section>

<div class="container-main" style="padding:80px 0;text-align:center;">
    <p style="font-size:1.1rem;color:#6b7280;margin-bottom:32px;max-width:500px;margin-left:auto;margin-right:auto;">
        <?php _e('Omlouvame se, ale stranka, kterou hledate, neexistuje nebo byla presunuta.', 'potapetska'); ?>
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
        <?php _e('Zpet na uvod', 'potapetska'); ?>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
</div>

<?php get_footer(); ?>
