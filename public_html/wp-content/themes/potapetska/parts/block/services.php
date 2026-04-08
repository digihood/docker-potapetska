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
<section id="sluzby" class="bg-gray-light py-[100px]">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'heading2' => $heading2,
            'description' => $desc,
        )); ?>

        <div class="grid gap-5 grid-cols-[repeat(auto-fill,minmax(320px,1fr))]">
            <?php foreach ($items as $service) :
                $tags = !empty($service['tags']) ? array_map('trim', explode(',', $service['tags'])) : array();
                $link = !empty($service['button_link']) ? (is_array($service['button_link']) ? $service['button_link']['url'] : $service['button_link']) : '#kontakt';
            ?>
            <div class="group rounded border-2 border-primary/[0.08] bg-white p-8 cursor-default transition-all duration-300 relative overflow-hidden flex flex-col hover:bg-primary-dark hover:border-primary-dark hover:-translate-y-1 hover:shadow-[0_16px_48px_rgba(3,56,105,0.18)]">
                <h3 class="font-heading text-[1.2rem] font-bold uppercase tracking-wide mb-2.5 leading-tight transition-colors duration-300 text-primary pr-10 group-hover:text-white"><?php echo esc_html($service['title']); ?></h3>
                <?php if ($tags) : ?>
                <div class="flex flex-wrap gap-1 mb-3.5">
                    <?php foreach ($tags as $tag) : ?>
                    <span class="text-[0.62rem] font-semibold tracking-wide uppercase px-2 py-[3px] rounded-sm transition-all duration-300 bg-primary/[0.06] text-primary group-hover:bg-yellow/15 group-hover:text-yellow"><?php echo esc_html($tag); ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <p class="text-[0.9rem] leading-relaxed mb-5 transition-colors duration-300 flex-1 text-gray-body group-hover:text-slate-200/85"><?php echo esc_html($service['description']); ?></p>
                <a href="<?php echo esc_url($link); ?>" class="inline-flex items-center gap-2 rounded-[3px] px-4 py-2.5 text-[0.78rem] font-bold tracking-wide no-underline transition-all duration-200 self-start bg-primary text-white hover:bg-primary-dark hover:shadow-[0_4px_16px_rgba(3,56,105,0.25)] group-hover:bg-yellow group-hover:text-primary">
                    <?php echo esc_html($service['button_label'] ?: __('Více informací', 'potapetska')); ?>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <div class="absolute bottom-0 left-0 right-0 h-[3px] transition-transform duration-300 bg-yellow scale-x-0 origin-left group-hover:scale-x-100"></div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if ($cta_text) :
            $cta_url = $cta_link ? (is_array($cta_link) ? $cta_link['url'] : $cta_link) : '#kontakt';
        ?>
        <div class="flex justify-center mt-[52px]">
            <a href="<?php echo esc_url($cta_url); ?>" class="btn-primary">
                <?php echo esc_html($cta_text); ?>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>
