<?php
$label = get_field('equipment_label');
$heading = get_field('equipment_heading');
$heading2 = get_field('equipment_heading2');
$desc = get_field('equipment_description');
$benefit = get_field('equipment_benefit_text');
$rental_heading = get_field('equipment_rental_heading');
$rental_desc = get_field('equipment_rental_description');
$rental_items = get_field('equipment_rental_items');
$rental_cta = get_field('equipment_rental_cta_text');
$rental_cta_link = get_field('equipment_rental_cta_link');
$sale_heading = get_field('equipment_sale_heading');
$sale_desc = get_field('equipment_sale_description');
$sale_items = get_field('equipment_sale_items');
$sale_cta = get_field('equipment_sale_cta_text');
$sale_cta_link = get_field('equipment_sale_cta_link');
?>
<section id="technika" class="bg-primary pt-[100px] pb-0 overflow-hidden">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'heading2' => $heading2,
            'description' => $desc,
            'scheme' => 'dark',
        )); ?>

        <?php if ($benefit) : ?>
        <div class="flex items-center gap-4 flex-wrap rounded mb-12 bg-yellow px-8 py-5">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#033869" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            <p class="text-primary font-bold text-base m-0"><?php echo esc_html($benefit); ?></p>
        </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-2 rounded overflow-hidden bg-primary-dark">
            <!-- Rental -->
            <div class="p-[52px]">
                <?php if ($rental_heading) : ?>
                <div class="section-label mb-3">
                    <div class="w-7 h-[3px] bg-yellow"></div>
                    <span class="text-yellow text-[0.72rem] font-bold tracking-[0.16em] uppercase"><?php _e('Půjčovna techniky', 'potapetska'); ?></span>
                </div>
                <h3 class="font-heading text-[1.8rem] font-extrabold text-white uppercase mb-4"><?php echo nl2br(esc_html($rental_heading)); ?></h3>
                <?php endif; ?>
                <?php if ($rental_desc) : ?>
                <p class="text-[rgba(226,232,240,0.6)] text-[0.9rem] leading-[1.7] mb-7"><?php echo esc_html($rental_desc); ?></p>
                <?php endif; ?>
                <?php if ($rental_items) : ?>
                <p class="text-white text-[0.8rem] font-bold tracking-[0.12em] uppercase mb-3"><?php _e('K pronájmu nabízíme', 'potapetska'); ?></p>
                <ul class="list-none p-0 mb-8">
                    <?php foreach ($rental_items as $item) : ?>
                    <li class="flex items-center justify-between py-2.5 border-b border-[rgba(255,255,255,0.08)] text-[rgba(226,232,240,0.85)] text-[0.9rem]">
                        <span class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 bg-yellow rounded-full shrink-0"></span>
                            <?php echo esc_html($item['name']); ?>
                        </span>
                        <span class="text-yellow font-bold text-[0.82rem] whitespace-nowrap ml-3"><?php echo esc_html($item['price']); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <?php if ($rental_cta) :
                    $r_url = $rental_cta_link ? $rental_cta_link['url'] : '#kontakt';
                ?>
                <a href="<?php echo esc_url($r_url); ?>" class="btn-primary py-[13px] px-7 text-[0.85rem]">
                    <?php echo esc_html($rental_cta); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <?php endif; ?>
            </div>

            <!-- Sale -->
            <div class="p-[52px] bg-primary">
                <?php if ($sale_heading) : ?>
                <div class="section-label mb-3">
                    <div class="w-7 h-[3px] bg-yellow"></div>
                    <span class="text-yellow text-[0.72rem] font-bold tracking-[0.16em] uppercase"><?php _e('Odprodej techniky', 'potapetska'); ?></span>
                </div>
                <h3 class="font-heading text-[1.8rem] font-extrabold text-white uppercase mb-4"><?php echo nl2br(esc_html($sale_heading)); ?></h3>
                <?php endif; ?>
                <?php if ($sale_desc) : ?>
                <p class="text-[rgba(226,232,240,0.6)] text-[0.9rem] leading-[1.7] mb-7"><?php echo esc_html($sale_desc); ?></p>
                <?php endif; ?>
                <?php if ($sale_items) : ?>
                <p class="text-white text-[0.8rem] font-bold tracking-[0.12em] uppercase mb-3"><?php _e('K prodeji nabízíme', 'potapetska'); ?></p>
                <ul class="list-none p-0 mb-8">
                    <?php foreach ($sale_items as $item) : ?>
                    <li class="flex items-center justify-between py-2.5 border-b border-[rgba(255,255,255,0.08)] text-[rgba(226,232,240,0.85)] text-[0.9rem]">
                        <span class="flex items-center gap-2.5">
                            <span class="w-1.5 h-1.5 bg-yellow rounded-full shrink-0"></span>
                            <?php echo esc_html($item['name']); ?>
                        </span>
                        <span class="text-yellow font-bold text-[0.82rem] whitespace-nowrap ml-3"><?php echo esc_html($item['price']); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <?php if ($sale_cta) :
                    $s_url = $sale_cta_link ? $sale_cta_link['url'] : '#kontakt';
                ?>
                <a href="<?php echo esc_url($s_url); ?>" class="btn-primary py-[13px] px-7 text-[0.85rem]">
                    <?php echo esc_html($sale_cta); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="h-20"></div>
    </div>
</section>
