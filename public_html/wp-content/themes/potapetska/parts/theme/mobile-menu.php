<?php
$cta_text = get_field('header_cta_text', 'option');
$cta_link = get_field('header_cta_link', 'option');
$top_bar_phone = get_field('header_top_bar_phone', 'option');
?>
<div class="mobile-menu lg:hidden fixed top-0 left-0 right-0 z-[49] pt-[140px] px-6 pb-6">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'mobile',
        'container' => false,
        'fallback_cb' => false,
    ));
    ?>
    <div class="mt-5 flex flex-col gap-3">
        <?php if ($top_bar_phone) : ?>
        <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $top_bar_phone)); ?>" class="flex items-center gap-2 no-underline text-yellow text-base font-bold">
            <?php echo esc_html($top_bar_phone); ?>
        </a>
        <?php endif; ?>
        <?php if ($cta_text) :
            $cta_url = $cta_link ? $cta_link['url'] : '#kontakt';
        ?>
        <a href="<?php echo esc_url($cta_url); ?>" class="btn-primary text-center">
            <?php echo esc_html($cta_text); ?>
        </a>
        <?php endif; ?>
    </div>
</div>
