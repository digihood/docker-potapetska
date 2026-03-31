<?php
$label = get_field('partners_section_label', 'option');
$partners = get_field('partners_list', 'option');
if (!$partners) return;
?>
<div class="rounded" style="background:#033869;padding:48px 52px;">
    <?php if ($label) : ?>
    <p style="color:rgba(226,232,240,0.6);font-size:0.75rem;font-weight:700;letter-spacing:0.16em;text-transform:uppercase;text-align:center;margin-bottom:32px;">
        <?php echo esc_html($label); ?>
    </p>
    <?php endif; ?>
    <div class="flex flex-wrap justify-center gap-3">
        <?php foreach ($partners as $partner) : ?>
        <div class="rounded-[3px] transition-all duration-200 cursor-default" style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);padding:12px 22px;">
            <span class="font-heading" style="font-size:0.95rem;font-weight:700;color:#ffffff;letter-spacing:0.04em;text-transform:uppercase;white-space:nowrap;">
                <?php echo esc_html($partner['partner_name']); ?>
            </span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
