<?php
$label = get_field('page_header_label');
$description = get_field('page_header_description');
$bg_image = get_field('page_header_bg_image');
$stats = get_field('page_header_stats');
?>
<section class="relative overflow-hidden pt-[160px] pb-[100px] <?php echo $stats ? 'min-h-[600px]' : 'min-h-[400px]'; ?>">
    <?php if ($bg_image) : ?>
    <div class="absolute inset-0 z-0 bg-cover bg-center" style="background-image:url(<?php echo esc_url($bg_image['url']); ?>);"></div>
    <?php endif; ?>
    <div class="absolute inset-0 z-[1] bg-[linear-gradient(135deg,rgba(3,56,105,0.92)_0%,rgba(2,45,94,0.88)_100%)]"></div>

    <div class="container-main relative z-[2]">
        <div class="max-w-[700px]">
            <?php if ($label) : ?>
            <div class="section-label mb-5">
                <div class="section-label-line"></div>
                <span class="section-label-text text-yellow"><?php echo esc_html($label); ?></span>
            </div>
            <?php endif; ?>

            <h1 class="text-white mb-6">
                <?php the_title(); ?>
            </h1>

            <?php if ($description) : ?>
            <p class="text-[rgba(226,232,240,0.9)] text-[1.15rem] leading-[1.7]">
                <?php echo esc_html($description); ?>
            </p>
            <?php endif; ?>

            <?php if ($stats) : ?>
            <div class="grid grid-cols-3 gap-6 mt-10">
                <?php foreach ($stats as $stat) : ?>
                <div>
                    <div class="font-heading text-[2.5rem] font-black leading-none mb-2 text-yellow">
                        <?php echo esc_html($stat['value']); ?>
                    </div>
                    <div class="text-[rgba(226,232,240,0.8)] text-[0.85rem] font-semibold tracking-[0.04em] uppercase">
                        <?php echo esc_html($stat['label']); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
