<?php
$label = get_field('other_services_label');
$heading = get_field('other_services_heading');
$heading2 = get_field('other_services_heading2');
$items = get_field('other_services_items');
$cta_text = get_field('other_services_cta_text');
$cta_link = get_field('other_services_cta_link');
if (!$items) return;
?>
<section class="bg-white py-[100px]">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'heading2' => $heading2,
            'align' => 'center',
        )); ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-12">
            <?php foreach ($items as $service) :
                $tags = !empty($service['tags']) ? array_map('trim', explode(',', $service['tags'])) : array();
                $link = !empty($service['link']) ? $service['link'] : null;
            ?>
            <div class="rounded p-8 transition-all duration-300 relative card-hover bg-white border border-primary/[0.08]">
                <h3 class="font-heading text-[1.15rem] font-extrabold text-primary uppercase tracking-[0.02em] mb-[14px] leading-[1.2]">
                    <?php echo esc_html($service['title']); ?>
                </h3>
                <p class="text-gray-body text-[0.88rem] leading-[1.6] mb-5">
                    <?php echo esc_html($service['description']); ?>
                </p>
                <?php if ($tags) : ?>
                <div class="flex flex-wrap gap-1.5">
                    <?php foreach ($tags as $tag) : ?>
                    <span class="bg-primary/[0.06] text-primary text-[0.7rem] font-bold tracking-[0.05em] uppercase py-[5px] px-2.5 rounded-sm">
                        <?php echo esc_html($tag); ?>
                    </span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="absolute bottom-0 left-0 h-[3px] w-12 bg-yellow"></div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if ($cta_text) :
            $url = $cta_link ? (is_array($cta_link) ? $cta_link['url'] : $cta_link) : home_url('/#sluzby');
        ?>
        <div class="text-center">
            <a href="<?php echo esc_url($url); ?>" class="btn-secondary">
                <?php echo esc_html($cta_text); ?>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>
