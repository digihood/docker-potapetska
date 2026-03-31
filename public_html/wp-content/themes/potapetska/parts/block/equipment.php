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
<section id="technika" style="background:#033869;padding:100px 0 0;overflow:hidden;">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'heading2' => $heading2,
            'description' => $desc,
            'scheme' => 'dark',
        )); ?>

        <?php if ($benefit) : ?>
        <div class="flex items-center gap-4 flex-wrap rounded mb-12" style="background:#fcdb00;padding:20px 32px;">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#033869" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            <p style="color:#033869;font-weight:700;font-size:1rem;margin:0;"><?php echo esc_html($benefit); ?></p>
        </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-2 rounded overflow-hidden" style="background:#022d5e;">
            <!-- Rental -->
            <div style="padding:52px;">
                <?php if ($rental_heading) : ?>
                <div class="section-label" style="margin-bottom:12px;">
                    <div style="width:28px;height:3px;background:#fcdb00;"></div>
                    <span style="color:#fcdb00;font-size:0.72rem;font-weight:700;letter-spacing:0.16em;text-transform:uppercase;"><?php _e('Půjčovna techniky', 'potapetska'); ?></span>
                </div>
                <h3 class="font-heading" style="font-size:1.8rem;font-weight:800;color:#ffffff;text-transform:uppercase;margin-bottom:16px;"><?php echo nl2br(esc_html($rental_heading)); ?></h3>
                <?php endif; ?>
                <?php if ($rental_desc) : ?>
                <p style="color:rgba(226,232,240,0.6);font-size:0.9rem;line-height:1.7;margin-bottom:28px;"><?php echo esc_html($rental_desc); ?></p>
                <?php endif; ?>
                <?php if ($rental_items) : ?>
                <p style="color:#ffffff;font-size:0.8rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;margin-bottom:12px;"><?php _e('K pronájmu nabízíme', 'potapetska'); ?></p>
                <ul style="list-style:none;padding:0;margin:0 0 32px;">
                    <?php foreach ($rental_items as $item) : ?>
                    <li class="flex items-center justify-between" style="padding:10px 0;border-bottom:1px solid rgba(255,255,255,0.08);color:rgba(226,232,240,0.85);font-size:0.9rem;">
                        <span class="flex items-center gap-2.5">
                            <span style="width:6px;height:6px;background:#fcdb00;border-radius:50%;flex-shrink:0;"></span>
                            <?php echo esc_html($item['name']); ?>
                        </span>
                        <span style="color:#fcdb00;font-weight:700;font-size:0.82rem;white-space:nowrap;margin-left:12px;"><?php echo esc_html($item['price']); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <?php if ($rental_cta) :
                    $r_url = $rental_cta_link ? $rental_cta_link['url'] : '#kontakt';
                ?>
                <a href="<?php echo esc_url($r_url); ?>" class="btn-primary" style="padding:13px 28px;font-size:0.85rem;">
                    <?php echo esc_html($rental_cta); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <?php endif; ?>
            </div>

            <!-- Sale -->
            <div style="padding:52px;background:#033869;">
                <?php if ($sale_heading) : ?>
                <div class="section-label" style="margin-bottom:12px;">
                    <div style="width:28px;height:3px;background:#fcdb00;"></div>
                    <span style="color:#fcdb00;font-size:0.72rem;font-weight:700;letter-spacing:0.16em;text-transform:uppercase;"><?php _e('Odprodej techniky', 'potapetska'); ?></span>
                </div>
                <h3 class="font-heading" style="font-size:1.8rem;font-weight:800;color:#ffffff;text-transform:uppercase;margin-bottom:16px;"><?php echo nl2br(esc_html($sale_heading)); ?></h3>
                <?php endif; ?>
                <?php if ($sale_desc) : ?>
                <p style="color:rgba(226,232,240,0.6);font-size:0.9rem;line-height:1.7;margin-bottom:28px;"><?php echo esc_html($sale_desc); ?></p>
                <?php endif; ?>
                <?php if ($sale_items) : ?>
                <p style="color:#ffffff;font-size:0.8rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;margin-bottom:12px;"><?php _e('K prodeji nabízíme', 'potapetska'); ?></p>
                <ul style="list-style:none;padding:0;margin:0 0 32px;">
                    <?php foreach ($sale_items as $item) : ?>
                    <li class="flex items-center justify-between" style="padding:10px 0;border-bottom:1px solid rgba(255,255,255,0.08);color:rgba(226,232,240,0.85);font-size:0.9rem;">
                        <span class="flex items-center gap-2.5">
                            <span style="width:6px;height:6px;background:#fcdb00;border-radius:50%;flex-shrink:0;"></span>
                            <?php echo esc_html($item['name']); ?>
                        </span>
                        <span style="color:#fcdb00;font-weight:700;font-size:0.82rem;white-space:nowrap;margin-left:12px;"><?php echo esc_html($item['price']); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <?php if ($sale_cta) :
                    $s_url = $sale_cta_link ? $sale_cta_link['url'] : '#kontakt';
                ?>
                <a href="<?php echo esc_url($s_url); ?>" class="btn-primary" style="padding:13px 28px;font-size:0.85rem;">
                    <?php echo esc_html($sale_cta); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <div style="height:80px;"></div>
    </div>
</section>
