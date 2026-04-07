<?php
$label = get_field('reasons_label');
$heading = get_field('reasons_heading');
$heading2 = get_field('reasons_heading2');
$items = get_field('reasons_items');
if (!$items) return;
?>
<section class="bg-gray-bg py-[100px]">
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
                <div class="flex items-center justify-center rounded-full mb-5 w-12 h-12 bg-yellow">
                    <span class="font-heading text-[1.4rem] font-extrabold text-primary"><?php echo $i + 1; ?></span>
                </div>
                <h3 class="font-heading text-[1.1rem] font-extrabold text-primary uppercase tracking-[0.02em] mb-3 leading-[1.2]">
                    <?php echo esc_html($reason['title']); ?>
                </h3>
                <p class="text-gray-body text-[0.88rem] leading-[1.6]">
                    <?php echo esc_html($reason['description']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
