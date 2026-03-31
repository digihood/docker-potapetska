<?php
$label = get_field('centers_label');
$heading = get_field('centers_heading');
$items = get_field('centers_items');
if (!$items) return;
?>
<section style="background:#f0f2f5;padding:100px 0;">
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
                $icon_bg = $icon_style === 'yellow' ? 'rgba(252,219,0,0.15)' : 'rgba(3,56,105,0.08)';
                $icon_color = $icon_style === 'yellow' ? '#fcdb00' : '#033869';
            ?>
            <div class="rounded" style="background:#ffffff;padding:40px 32px;border:<?php echo $highlight ? '2px solid #fcdb00' : '1px solid rgba(3,56,105,0.1)'; ?>;box-shadow:<?php echo $highlight ? '0 8px 32px rgba(3,56,105,0.08)' : '0 4px 16px rgba(3,56,105,0.06)'; ?>;">
                <div class="inline-flex items-center justify-center rounded-full mb-5" style="width:56px;height:56px;background:<?php echo $icon_bg; ?>;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="<?php echo $icon_color; ?>" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="font-heading" style="font-size:1.6rem;font-weight:800;color:#033869;text-transform:uppercase;letter-spacing:0.02em;margin-bottom:20px;">
                    <?php echo esc_html($center['name']); ?>
                </h3>
                <?php if (!empty($center['info_items'])) : ?>
                <div class="flex flex-col gap-4">
                    <?php foreach ($center['info_items'] as $info) : ?>
                    <div>
                        <div style="color:#9ca3af;font-size:0.7rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:6px;">
                            <?php echo esc_html($info['label']); ?>
                        </div>
                        <?php if (!empty($info['link'])) : ?>
                        <a href="<?php echo esc_url($info['link']); ?>" class="flex items-center gap-1.5 no-underline" style="color:#033869;font-size:0.95rem;font-weight:700;">
                            <?php echo nl2br(esc_html($info['value'])); ?>
                        </a>
                        <?php else : ?>
                        <div style="color:#42454e;font-size:0.95rem;line-height:1.5;">
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
