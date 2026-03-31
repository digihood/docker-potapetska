<?php
$label = get_field('page_header_label');
$description = get_field('page_header_description');
$bg_image = get_field('page_header_bg_image');
$stats = get_field('page_header_stats');
$bg_style = $bg_image ? 'background-image:url(' . esc_url($bg_image['url']) . ');background-size:cover;background-position:center;' : '';
?>
<section class="relative overflow-hidden" style="padding:160px 0 100px;min-height:<?php echo $stats ? '600px' : '400px'; ?>;">
    <?php if ($bg_image) : ?>
    <div class="absolute inset-0" style="<?php echo $bg_style; ?>z-index:0;"></div>
    <?php endif; ?>
    <div class="absolute inset-0" style="background:linear-gradient(135deg, rgba(3,56,105,0.92) 0%, rgba(2,45,94,0.88) 100%);z-index:1;"></div>

    <div class="container-main relative" style="z-index:2;">
        <div style="max-width:700px;">
            <?php if ($label) : ?>
            <div class="section-label" style="margin-bottom:20px;">
                <div class="section-label-line"></div>
                <span class="section-label-text" style="color:#fcdb00;"><?php echo esc_html($label); ?></span>
            </div>
            <?php endif; ?>

            <h1 style="color:#ffffff;margin-bottom:24px;">
                <?php the_title(); ?>
            </h1>

            <?php if ($description) : ?>
            <p style="color:rgba(226,232,240,0.9);font-size:1.15rem;line-height:1.7;">
                <?php echo esc_html($description); ?>
            </p>
            <?php endif; ?>

            <?php if ($stats) : ?>
            <div class="grid grid-cols-3 gap-6" style="margin-top:40px;">
                <?php foreach ($stats as $stat) : ?>
                <div>
                    <div class="font-heading text-[2.5rem] font-black leading-none mb-2" style="color:#fcdb00;">
                        <?php echo esc_html($stat['value']); ?>
                    </div>
                    <div style="color:rgba(226,232,240,0.8);font-size:0.85rem;font-weight:600;letter-spacing:0.04em;text-transform:uppercase;">
                        <?php echo esc_html($stat['label']); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
