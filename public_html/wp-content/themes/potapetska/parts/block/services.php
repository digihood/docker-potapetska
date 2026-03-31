<?php
$label = get_field('services_label');
$heading = get_field('services_heading');
$heading2 = get_field('services_heading2');
$desc = get_field('services_description');
$items = get_field('services_items');
$cta_text = get_field('services_cta_text');
$cta_link = get_field('services_cta_link');
if (!$items) return;
?>
<section id="sluzby" style="background:#f8f9fb;padding:100px 0;">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'heading2' => $heading2,
            'description' => $desc,
        )); ?>

        <div class="grid gap-5" style="grid-template-columns:repeat(auto-fill,minmax(320px,1fr));">
            <?php foreach ($items as $service) :
                $highlight = !empty($service['highlight']);
                $tags = !empty($service['tags']) ? array_map('trim', explode(',', $service['tags'])) : array();
                $link = !empty($service['button_link']) ? $service['button_link']['url'] : '#kontakt';
            ?>
            <div class="service-card<?php echo $highlight ? ' service-card--highlight' : ''; ?>">
                <h3 class="service-card-title"><?php echo esc_html($service['title']); ?></h3>
                <?php if ($tags) : ?>
                <div class="flex flex-wrap gap-1 mb-3.5">
                    <?php foreach ($tags as $tag) : ?>
                    <span class="service-card-tag"><?php echo esc_html($tag); ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <p class="service-card-desc"><?php echo esc_html($service['description']); ?></p>
                <a href="<?php echo esc_url($link); ?>" class="service-card-cta">
                    <?php echo esc_html($service['button_label'] ?: __('Více informací', 'potapetska')); ?>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <div class="service-card-accent"></div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if ($cta_text) :
            $cta_url = $cta_link ? $cta_link['url'] : '#kontakt';
        ?>
        <div class="flex justify-center" style="margin-top:52px;">
            <a href="<?php echo esc_url($cta_url); ?>" class="btn-primary">
                <?php echo esc_html($cta_text); ?>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>
