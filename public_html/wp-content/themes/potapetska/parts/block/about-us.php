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

$bg_colors = array('white' => '#ffffff', 'light' => '#f0f2f5', 'dark' => '#033869');
$bg_color = $bg_colors[$bg] ?? '#ffffff';
$is_dark = $bg === 'dark';
$text_color = $is_dark ? 'rgba(226,232,240,0.85)' : '#6b7280';
$heading_color = $is_dark ? '#ffffff' : '#033869';
$scheme = $is_dark ? 'dark' : 'light';
?>
<section id="o-nas" style="background:<?php echo $bg_color; ?>;padding:100px 0;overflow:hidden;">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <?php if ($label) : ?>
                <div class="section-label" style="margin-bottom:16px;">
                    <div class="section-label-line"></div>
                    <span class="section-label-text" style="color:<?php echo $is_dark ? '#fcdb00' : '#033869'; ?>;"><?php echo esc_html($label); ?></span>
                </div>
                <?php endif; ?>
                <?php if ($heading) : ?>
                <h2 style="color:<?php echo $heading_color; ?>;margin-bottom:24px;"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>
                <?php if ($text) : ?>
                <div style="color:<?php echo $text_color; ?>;font-size:1rem;line-height:1.8;margin-bottom:36px;">
                    <?php echo $text; ?>
                </div>
                <?php endif; ?>
                <?php if ($cta_text) :
                    $url = $cta_link ? $cta_link['url'] : '#kontakt';
                ?>
                <a href="<?php echo esc_url($url); ?>" class="btn-secondary">
                    <?php echo esc_html($cta_text); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <?php endif; ?>
            </div>

            <div>
                <?php if ($image) : ?>
                <div class="relative rounded overflow-hidden mb-6" style="height:300px;">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width:100%;height:100%;object-fit:cover;">
                    <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(3,56,105,0.7) 0%,transparent 60%);"></div>
                    <?php if ($badge_num) : ?>
                    <div class="absolute flex items-end gap-2" style="bottom:20px;left:20px;">
                        <span class="font-heading" style="font-size:3.5rem;font-weight:900;color:#fcdb00;line-height:1;"><?php echo esc_html($badge_num); ?></span>
                        <?php if ($badge_text) : ?>
                        <span style="color:#ffffff;font-size:0.85rem;font-weight:500;padding-bottom:8px;"><?php echo esc_html($badge_text); ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if ($certs) : ?>
                <div class="flex items-center gap-4 rounded" style="padding:16px 20px;background:#f8f9fb;border:1px solid rgba(3,56,105,0.08);">
                    <span style="color:#9ca3af;font-size:0.68rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;white-space:nowrap;flex-shrink:0;"><?php _e('Certifikace:', 'potapetska'); ?></span>
                    <div class="flex items-center gap-3">
                        <?php foreach ($certs as $cert) : if (!empty($cert['image'])) : ?>
                        <div class="flex flex-col items-center gap-1" title="<?php echo esc_attr($cert['label'] . ' – ' . ($cert['description'] ?? '')); ?>">
                            <img src="<?php echo esc_url($cert['image']['url']); ?>" alt="<?php echo esc_attr($cert['label']); ?>" style="height:60px;width:60px;object-fit:contain;opacity:0.85;">
                            <span style="font-size:0.65rem;font-weight:700;color:#6b7280;letter-spacing:0.04em;text-transform:uppercase;"><?php echo esc_html($cert['label']); ?></span>
                        </div>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
