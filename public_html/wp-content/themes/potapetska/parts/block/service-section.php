<?php
$label = get_field('service_section_label');
$heading = get_field('service_section_heading');
$heading2 = get_field('service_section_heading2');
$text = get_field('service_section_text');
$bullets = get_field('service_section_bullets');
$image = get_field('service_section_image');
if (!$heading && !$text) return;
?>
<section style="background:#ffffff;padding:100px 0;">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <?php if ($label) : ?>
                <div class="section-label" style="margin-bottom:16px;">
                    <div class="section-label-line"></div>
                    <span class="section-label-text" style="color:#033869;"><?php echo esc_html($label); ?></span>
                </div>
                <?php endif; ?>
                <?php if ($heading) : ?>
                <h2 style="color:#033869;margin-bottom:24px;">
                    <?php echo esc_html($heading); ?>
                    <?php if ($heading2) : ?><br><span style="color:#42454e;"><?php echo esc_html($heading2); ?></span><?php endif; ?>
                </h2>
                <?php endif; ?>
                <?php if ($text) : ?>
                <div style="color:#6b7280;font-size:1rem;line-height:1.8;margin-bottom:28px;">
                    <?php echo $text; ?>
                </div>
                <?php endif; ?>
                <?php if ($bullets) : ?>
                <div class="flex flex-col gap-3.5">
                    <?php foreach ($bullets as $bullet) : ?>
                    <div class="flex items-center gap-3">
                        <div style="width:8px;height:8px;background:#fcdb00;border-radius:50%;flex-shrink:0;"></div>
                        <span style="color:#033869;font-size:0.95rem;font-weight:600;"><?php echo esc_html($bullet['text']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php if ($image) : ?>
            <div class="rounded overflow-hidden" style="box-shadow:0 20px 60px rgba(3,56,105,0.15);">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width:100%;height:500px;object-fit:cover;display:block;">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
