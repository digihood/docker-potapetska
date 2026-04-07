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
?>
<section id="kontakt" class="<?php echo $is_dark ? 'contact-dark' : 'contact-light'; ?> <?php echo $is_dark ? 'bg-primary-dark' : 'bg-gray-bg'; ?> py-[80px] relative overflow-hidden">
    <?php if ($is_dark) : ?>
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-yellow to-yellow/20"></div>
    <?php endif; ?>

    <div class="container-main">
        <?php if ($section_label || $section_heading) : ?>
        <div class="mb-12">
            <?php if ($section_label) : ?>
            <div class="section-label mb-3">
                <div class="section-label-line"></div>
                <span class="section-label-text <?php echo $is_dark ? 'text-yellow' : 'text-primary'; ?>"><?php echo esc_html($section_label); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($section_heading) : ?>
            <h2 class="<?php echo $is_dark ? 'text-white' : 'text-primary'; ?>"><?php echo esc_html($section_heading); ?></h2>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-[360px_1fr] gap-12 items-start">
            <div class="flex flex-col">
                <?php if ($emergency_phone) : ?>
                <div class="rounded mb-5 bg-yellow px-7 py-6">
                    <?php if ($emergency_label) : ?>
                    <div class="font-heading text-[0.72rem] font-extrabold tracking-[0.14em] uppercase text-primary mb-[10px]">
                        ⚡ <?php echo esc_html($emergency_label); ?>
                    </div>
                    <?php endif; ?>
                    <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $emergency_phone)); ?>" class="block font-heading no-underline text-[1.8rem] font-black text-primary leading-none mb-1">
                        <?php echo esc_html($emergency_phone); ?>
                    </a>
                    <?php if ($emergency_desc) : ?>
                    <p class="text-[rgba(3,56,105,0.65)] text-[0.8rem] m-0"><?php echo esc_html($emergency_desc); ?></p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if ($details) : ?>
                <div class="rounded flex flex-col gap-4 <?php echo $is_dark ? 'bg-[rgba(255,255,255,0.05)] border border-[rgba(255,255,255,0.1)]' : 'bg-white border border-primary/10'; ?> px-7 py-6">
                    <?php foreach ($details as $detail) : ?>
                    <div>
                        <div class="<?php echo $is_dark ? 'text-[rgba(226,232,240,0.45)]' : 'text-gray-muted'; ?> text-[0.68rem] font-bold tracking-[0.12em] uppercase mb-[3px]">
                            <?php echo esc_html($detail['label']); ?>
                        </div>
                        <?php if (!empty($detail['link_url'])) : ?>
                        <a href="<?php echo esc_url($detail['link_url']); ?>" class="text-yellow text-[0.92rem] font-semibold no-underline">
                            <?php echo esc_html($detail['value']); ?>
                        </a>
                        <?php else : ?>
                        <span class="<?php echo $is_dark ? 'text-[rgba(226,232,240,0.85)]' : 'text-gray-dark'; ?> text-[0.92rem]">
                            <?php echo esc_html($detail['value']); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="rounded <?php echo $is_dark ? 'bg-[rgba(255,255,255,0.04)] border border-[rgba(255,255,255,0.1)]' : 'bg-white border border-primary/10'; ?> px-10 py-9">
                <?php if ($form_heading) : ?>
                <h3 class="font-heading text-[1.4rem] font-extrabold <?php echo $is_dark ? 'text-white' : 'text-primary'; ?> uppercase tracking-[0.04em] mb-[6px]">
                    <?php echo esc_html($form_heading); ?>
                </h3>
                <?php endif; ?>
                <?php if ($form_desc) : ?>
                <p class="<?php echo $is_dark ? 'text-[rgba(226,232,240,0.55)]' : 'text-gray-body'; ?> text-[0.85rem] mb-7 leading-[1.6]">
                    <?php echo esc_html($form_desc); ?>
                </p>
                <?php endif; ?>
                <?php if ($form_shortcode) : ?>
                    <?php echo do_shortcode($form_shortcode); ?>
                <?php endif; ?>
                <?php if ($form_note) : ?>
                <p class="<?php echo $is_dark ? 'text-[rgba(226,232,240,0.35)]' : 'text-gray-muted'; ?> text-[0.7rem] text-center mt-[10px]">
                    <?php echo esc_html($form_note); ?>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
