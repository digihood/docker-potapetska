<?php
$label = get_field('centers_label');
$heading = get_field('centers_heading');
$items = get_field('centers_items');
if (!$items) return;
?>
<section class="bg-gray-bg py-[100px]">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'align' => 'center',
        )); ?>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <?php foreach ($items as $center) :
                $highlight = !empty($center['highlight']);
                $icon_style = $center['icon_style'] ?? 'primary';
                $icon_bg_class = $icon_style === 'yellow' ? 'bg-yellow/[0.15]' : 'bg-primary/[0.08]';
                $icon_color = $icon_style === 'yellow' ? '#fcdb00' : '#033869';
                $border_class = $highlight ? 'border-2 border-yellow shadow-[0_8px_32px_rgba(3,56,105,0.08)]' : 'border border-primary/[0.1] shadow-[0_4px_16px_rgba(3,56,105,0.06)]';
            ?>
            <div class="rounded bg-white px-8 py-10 <?php echo $border_class; ?>">
                <div class="inline-flex items-center justify-center rounded-full mb-5 w-14 h-14 <?php echo $icon_bg_class; ?>">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="<?php echo $icon_color; ?>" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="font-heading text-[1.6rem] font-extrabold text-primary uppercase tracking-[0.02em] mb-5">
                    <?php echo esc_html($center['name']); ?>
                </h3>
                <?php if (!empty($center['info_items'])) : ?>
                <div class="flex flex-col gap-4">
                    <?php foreach ($center['info_items'] as $info) : ?>
                    <div>
                        <div class="text-gray-muted text-[0.7rem] font-bold tracking-[0.1em] uppercase mb-1.5">
                            <?php echo esc_html($info['label']); ?>
                        </div>
                        <?php if (!empty($info['link'])) : ?>
                        <a href="<?php echo esc_url($info['link']); ?>" class="flex items-center gap-1.5 no-underline text-primary text-[0.95rem] font-bold">
                            <?php echo nl2br(esc_html($info['value'])); ?>
                        </a>
                        <?php else : ?>
                        <div class="text-gray-dark text-[0.95rem] leading-[1.5]">
                            <?php echo nl2br(esc_html($info['value'])); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
