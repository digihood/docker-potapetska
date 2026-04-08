<?php
$label = get_field('about_label');
$heading = get_field('about_heading');
$text = get_field('about_text');
$cta_text = get_field('about_cta_text');
$cta_link = get_field('about_cta_link');
$image = get_field('about_image');
$badge_num = get_field('about_badge_number');
$badge_text = get_field('about_badge_text');
$certs = get_field('about_certifications');
$bg = get_field('about_bg_color') ?: 'white';

$is_dark = $bg === 'dark';
$bg_class = match($bg) {
    'dark' => 'bg-primary',
    'light' => 'bg-gray-bg',
    default => 'bg-white',
};
?>
<section id="o-nas" class="<?php echo $bg_class; ?> py-[100px] overflow-hidden">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <?php if ($label) : ?>
                <div class="section-label mb-4">
                    <div class="section-label-line"></div>
                    <span class="section-label-text <?php echo $is_dark ? 'text-yellow' : 'text-primary'; ?>"><?php echo esc_html($label); ?></span>
                </div>
                <?php endif; ?>
                <?php if ($heading) : ?>
                <h2 class="<?php echo $is_dark ? 'text-white' : 'text-primary'; ?> mb-6"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>
                <?php if ($text) : ?>
                <div class="<?php echo $is_dark ? 'text-slate-300/85' : 'text-gray-body'; ?> text-base leading-[1.8] mb-9">
                    <?php echo $text; ?>
                </div>
                <?php endif; ?>
                <?php if ($cta_text) :
                    $url = $cta_link ? (is_array($cta_link) ? $cta_link['url'] : $cta_link) : '#kontakt';
                ?>
                <a href="<?php echo esc_url($url); ?>" class="btn-secondary">
                    <?php echo esc_html($cta_text); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <?php endif; ?>
            </div>

            <div>
                <?php if ($image) : ?>
                <div class="relative rounded overflow-hidden mb-6 h-[300px]">
                    <img src="<?php echo esc_url(is_array($image) ? $image['url'] : $image); ?>" alt="<?php echo esc_attr(is_array($image) ? ($image['alt'] ?? '') : ''); ?>" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-[linear-gradient(to_top,rgba(3,56,105,0.7)_0%,transparent_60%)]"></div>
                    <?php if ($badge_num) : ?>
                    <div class="absolute flex items-end gap-2 bottom-5 left-5">
                        <span class="font-heading text-[3.5rem] font-black text-yellow leading-none"><?php echo esc_html($badge_num); ?></span>
                        <?php if ($badge_text) : ?>
                        <span class="text-white text-[0.85rem] font-medium pb-2"><?php echo esc_html($badge_text); ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if ($certs) : ?>
                <div class="flex items-center gap-4 rounded px-5 py-4 bg-gray-light border border-primary/[0.08]">
                    <span class="text-gray-muted text-[0.68rem] font-bold tracking-[0.1em] uppercase whitespace-nowrap shrink-0"><?php _e('Certifikace:', 'potapetska'); ?></span>
                    <div class="flex items-center gap-3">
                        <?php foreach ($certs as $cert) : if (!empty($cert['image'])) : ?>
                        <div class="flex flex-col items-center gap-1" title="<?php echo esc_attr($cert['label'] . ' – ' . ($cert['description'] ?? '')); ?>">
                            <img src="<?php echo esc_url(is_array($cert['image']) ? $cert['image']['url'] : $cert['image']); ?>" alt="<?php echo esc_attr($cert['label']); ?>" class="h-[60px] w-[60px] object-contain opacity-85">
                            <span class="text-[0.65rem] font-bold text-gray-body tracking-[0.04em] uppercase"><?php echo esc_html($cert['label']); ?></span>
                        </div>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
