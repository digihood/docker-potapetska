<?php
$scheme = $args['scheme'] ?? 'dark';
$is_dark = $scheme === 'dark';

$section_label = get_field('contact_section_label', 'option');
$section_heading = get_field('contact_section_heading', 'option');
$emergency_label = get_field('contact_emergency_label', 'option');
$emergency_phone = get_field('contact_emergency_phone', 'option');
$emergency_desc = get_field('contact_emergency_desc', 'option');
$details = get_field('contact_details', 'option');
$form_heading = get_field('contact_form_heading', 'option');
$form_desc = get_field('contact_form_description', 'option');
$form_shortcode = get_field('contact_form_shortcode', 'option');
$form_note = get_field('contact_form_note', 'option');

$bg = $is_dark ? '#022d5e' : '#f0f2f5';
$theme_class = $is_dark ? 'contact-dark' : 'contact-light';
?>
<section id="kontakt" class="<?php echo $theme_class; ?>" style="background:<?php echo $bg; ?>;padding:80px 0;position:relative;overflow:hidden;">
    <?php if ($is_dark) : ?>
    <div class="absolute top-0 left-0 right-0" style="height:4px;background:linear-gradient(to right,#fcdb00 0%,rgba(252,219,0,0.2) 100%);"></div>
    <?php endif; ?>

    <div class="container-main">
        <?php if ($section_label || $section_heading) : ?>
        <div style="margin-bottom:48px;">
            <?php if ($section_label) : ?>
            <div class="section-label" style="margin-bottom:12px;">
                <div class="section-label-line"></div>
                <span class="section-label-text" style="color:<?php echo $is_dark ? '#fcdb00' : '#033869'; ?>;"><?php echo esc_html($section_label); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($section_heading) : ?>
            <h2 style="color:<?php echo $is_dark ? '#ffffff' : '#033869'; ?>;"><?php echo esc_html($section_heading); ?></h2>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-[360px_1fr] gap-12 items-start">
            <div class="flex flex-col">
                <?php if ($emergency_phone) : ?>
                <div class="rounded mb-5" style="background:#fcdb00;padding:24px 28px;">
                    <?php if ($emergency_label) : ?>
                    <div class="font-heading" style="font-size:0.72rem;font-weight:800;letter-spacing:0.14em;text-transform:uppercase;color:#033869;margin-bottom:10px;">
                        ⚡ <?php echo esc_html($emergency_label); ?>
                    </div>
                    <?php endif; ?>
                    <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $emergency_phone)); ?>" class="block font-heading no-underline" style="font-size:1.8rem;font-weight:900;color:#033869;line-height:1;margin-bottom:4px;">
                        <?php echo esc_html($emergency_phone); ?>
                    </a>
                    <?php if ($emergency_desc) : ?>
                    <p style="color:rgba(3,56,105,0.65);font-size:0.8rem;margin:0;"><?php echo esc_html($emergency_desc); ?></p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if ($details) : ?>
                <div class="rounded flex flex-col gap-4" style="background:<?php echo $is_dark ? 'rgba(255,255,255,0.05)' : '#ffffff'; ?>;border:1px solid <?php echo $is_dark ? 'rgba(255,255,255,0.1)' : 'rgba(3,56,105,0.1)'; ?>;padding:24px 28px;">
                    <?php foreach ($details as $detail) : ?>
                    <div>
                        <div style="color:<?php echo $is_dark ? 'rgba(226,232,240,0.45)' : '#9ca3af'; ?>;font-size:0.68rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;margin-bottom:3px;">
                            <?php echo esc_html($detail['label']); ?>
                        </div>
                        <?php if (!empty($detail['link_url'])) : ?>
                        <a href="<?php echo esc_url($detail['link_url']); ?>" style="color:#fcdb00;font-size:0.92rem;font-weight:600;text-decoration:none;">
                            <?php echo esc_html($detail['value']); ?>
                        </a>
                        <?php else : ?>
                        <span style="color:<?php echo $is_dark ? 'rgba(226,232,240,0.85)' : '#42454e'; ?>;font-size:0.92rem;">
                            <?php echo esc_html($detail['value']); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="rounded" style="background:<?php echo $is_dark ? 'rgba(255,255,255,0.04)' : '#ffffff'; ?>;border:1px solid <?php echo $is_dark ? 'rgba(255,255,255,0.1)' : 'rgba(3,56,105,0.1)'; ?>;padding:36px 40px;">
                <?php if ($form_heading) : ?>
                <h3 class="font-heading" style="font-size:1.4rem;font-weight:800;color:<?php echo $is_dark ? '#ffffff' : '#033869'; ?>;text-transform:uppercase;letter-spacing:0.04em;margin-bottom:6px;">
                    <?php echo esc_html($form_heading); ?>
                </h3>
                <?php endif; ?>
                <?php if ($form_desc) : ?>
                <p style="color:<?php echo $is_dark ? 'rgba(226,232,240,0.55)' : '#6b7280'; ?>;font-size:0.85rem;margin-bottom:28px;line-height:1.6;">
                    <?php echo esc_html($form_desc); ?>
                </p>
                <?php endif; ?>
                <?php if ($form_shortcode) : ?>
                    <?php echo do_shortcode($form_shortcode); ?>
                <?php endif; ?>
                <?php if ($form_note) : ?>
                <p style="color:<?php echo $is_dark ? 'rgba(226,232,240,0.35)' : '#9ca3af'; ?>;font-size:0.7rem;text-align:center;margin-top:10px;">
                    <?php echo esc_html($form_note); ?>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
