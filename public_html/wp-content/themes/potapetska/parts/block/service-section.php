<?php
$label = get_field('service_section_label');
$heading = get_field('service_section_heading');
$heading2 = get_field('service_section_heading2');
$text = get_field('service_section_text');
$bullets = get_field('service_section_bullets');
$image = get_field('service_section_image');
if (!$heading && !$text) return;
?>
<section class="bg-white py-[100px]">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <?php if ($label) : ?>
                <div class="section-label mb-4">
                    <div class="section-label-line"></div>
                    <span class="section-label-text text-primary"><?php echo esc_html($label); ?></span>
                </div>
                <?php endif; ?>
                <?php if ($heading) : ?>
                <h2 class="text-primary mb-6">
                    <?php echo esc_html($heading); ?>
                    <?php if ($heading2) : ?><br><span class="text-gray-dark"><?php echo esc_html($heading2); ?></span><?php endif; ?>
                </h2>
                <?php endif; ?>
                <?php if ($text) : ?>
                <div class="text-gray-body text-base leading-[1.8] mb-7">
                    <?php echo $text; ?>
                </div>
                <?php endif; ?>
                <?php if ($bullets) : ?>
                <div class="flex flex-col gap-3.5">
                    <?php foreach ($bullets as $bullet) : ?>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-yellow rounded-full shrink-0"></div>
                        <span class="text-primary text-[0.95rem] font-semibold"><?php echo esc_html($bullet['text']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php if ($image) : ?>
            <div class="rounded overflow-hidden shadow-[0_20px_60px_rgba(3,56,105,0.15)]">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-[500px] object-cover block">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
