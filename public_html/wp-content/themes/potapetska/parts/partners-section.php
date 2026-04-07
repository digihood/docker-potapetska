<?php
$label = get_field('partners_section_label', 'option');
$partners = get_field('partners_list', 'option');
if (!$partners) return;
?>
<div class="rounded bg-primary px-[52px] py-12">
    <?php if ($label) : ?>
    <p class="text-[rgba(226,232,240,0.6)] text-[0.75rem] font-bold tracking-[0.16em] uppercase text-center mb-8">
        <?php echo esc_html($label); ?>
    </p>
    <?php endif; ?>
    <div class="flex flex-wrap justify-center items-center gap-6">
        <?php foreach ($partners as $partner) :
            $logo = !empty($partner['partner_logo']) ? $partner['partner_logo'] : null;
        ?>
            <?php if ($logo) : ?>
            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($partner['partner_name']); ?>" class="h-24 w-auto object-contain opacity-80 hover:opacity-100 transition-opacity duration-200">
            <?php else : ?>
            <div class="rounded-[3px] transition-all duration-200 cursor-default bg-[rgba(255,255,255,0.07)] border border-[rgba(255,255,255,0.12)] px-[22px] py-3">
                <span class="font-heading text-[0.95rem] font-bold text-white tracking-[0.04em] uppercase whitespace-nowrap">
                    <?php echo esc_html($partner['partner_name']); ?>
                </span>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
