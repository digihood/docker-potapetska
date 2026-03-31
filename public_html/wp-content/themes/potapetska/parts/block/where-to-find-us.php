<?php
$label = get_field('wtfu_label');
$heading = get_field('wtfu_heading');
$map = get_field('wtfu_map_location');
$address = get_field('wtfu_address');
?>
<section style="background:#ffffff;padding:100px 0;">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'align' => 'center',
        )); ?>

        <div class="rounded overflow-hidden" style="border:1px solid rgba(3,56,105,0.1);">
            <?php if ($map) : ?>
            <div id="contact-map" style="width:100%;height:500px;background:#f0f2f5;">
                <iframe
                    src="https://www.google.com/maps/embed/v1/place?key=<?php echo defined('MAP_API_KEY') ? MAP_API_KEY : ''; ?>&q=<?php echo urlencode($map['address']); ?>&zoom=14"
                    width="100%" height="500" style="border:0;display:block;" allowfullscreen loading="lazy"
                    title="<?php echo esc_attr($heading ?: __('Kde nás najdete', 'potapetska')); ?>">
                </iframe>
            </div>
            <?php else : ?>
            <div class="flex items-center justify-center" style="width:100%;height:500px;background:#f0f2f5;">
                <div class="text-center">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#033869" stroke-width="1.5" style="margin:0 auto 16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <?php if ($address) : ?>
                    <p class="font-heading" style="font-size:1.2rem;font-weight:700;color:#033869;text-transform:uppercase;margin-bottom:8px;">
                        <?php echo nl2br(esc_html($address)); ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
