<?php
$top_bar_text = get_field('header_top_bar_text', 'option');
$top_bar_phone = get_field('header_top_bar_phone', 'option');
$top_bar_email = get_field('header_top_bar_email', 'option');
$cta_text = get_field('header_cta_text', 'option');
$cta_link = get_field('header_cta_link', 'option');
?>
<header class="site-header" role="banner">
    <?php if ($top_bar_text || $top_bar_phone || $top_bar_email) : ?>
    <div class="top-bar">
        <div class="container-main flex items-center justify-between">
            <?php if ($top_bar_text) : ?>
            <span style="color:#033869;font-size:0.8rem;letter-spacing:0.04em;font-weight:500;">
                <?php echo esc_html($top_bar_text); ?>
            </span>
            <?php endif; ?>
            <div class="flex items-center gap-6">
                <?php if ($top_bar_phone) : ?>
                <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $top_bar_phone)); ?>" class="flex items-center gap-1.5 no-underline" style="color:#033869;font-size:0.85rem;font-weight:700;letter-spacing:0.06em;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.12 1.18 2 2 0 012.11 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                    <?php echo esc_html($top_bar_phone); ?>
                </a>
                <?php endif; ?>
                <?php if ($top_bar_email) : ?>
                <a href="mailto:<?php echo esc_attr($top_bar_email); ?>" class="hidden sm:flex items-center gap-1.5 no-underline" style="color:#033869;font-size:0.85rem;font-weight:700;letter-spacing:0.06em;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <?php echo esc_html($top_bar_email); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="container-main flex items-center justify-between" style="height:76px;">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex-shrink-0 no-underline">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" style="height:56px;width:auto;display:block;">
        </a>

        <nav class="hidden lg:flex items-center" style="gap:0;justify-content:flex-end;">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new Potapetska_Nav_Walker(),
                'fallback_cb' => false,
            ));
            ?>
            <div style="width:1px;height:28px;background:rgba(255,255,255,0.15);margin:0 16px;"></div>
            <?php if ($cta_text) :
                $cta_url = $cta_link ? $cta_link['url'] : '#kontakt';
                $cta_target = ($cta_link && !empty($cta_link['target'])) ? $cta_link['target'] : '_self';
            ?>
            <a href="<?php echo esc_url($cta_url); ?>" target="<?php echo esc_attr($cta_target); ?>" class="btn-primary" style="margin-left:16px;padding:10px 22px;font-size:0.85rem;">
                <?php echo esc_html($cta_text); ?>
            </a>
            <?php endif; ?>
        </nav>

        <button class="js-mobile-toggle lg:hidden" style="color:#fcdb00;background:none;border:none;cursor:pointer;padding:8px;" aria-label="<?php esc_attr_e('Menu', 'potapetska'); ?>">
            <svg class="hamburger-open" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            <svg class="hamburger-close" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:none;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
    </div>
</header>
