<?php
$label = get_field('reasons_label');
$heading = get_field('reasons_heading');
$heading2 = get_field('reasons_heading2');
$items = get_field('reasons_items');
if (!$items) return;
?>
<section style="background:#f0f2f5;padding:100px 0;">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'heading2' => $heading2,
            'align' => 'center',
        )); ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($items as $i => $reason) : ?>
            <div class="reason-card">
                <div class="flex items-center justify-center rounded-full mb-5" style="width:48px;height:48px;background:#fcdb00;">
                    <span class="font-heading" style="font-size:1.4rem;font-weight:800;color:#033869;"><?php echo $i + 1; ?></span>
                </div>
                <h3 class="font-heading" style="font-size:1.1rem;font-weight:800;color:#033869;text-transform:uppercase;letter-spacing:0.02em;margin-bottom:12px;line-height:1.2;">
                    <?php echo esc_html($reason['title']); ?>
                </h3>
                <p style="color:#6b7280;font-size:0.88rem;line-height:1.6;">
                    <?php echo esc_html($reason['description']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
