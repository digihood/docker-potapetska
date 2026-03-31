<?php
$badge = get_field('hero_badge_text');
$h1 = get_field('hero_headline_1');
$h2 = get_field('hero_headline_2');
$sub = get_field('hero_subheadline');
$cta1_text = get_field('hero_cta1_text');
$cta1_link = get_field('hero_cta1_link');
$cta2_text = get_field('hero_cta2_text');
$cta2_link = get_field('hero_cta2_link');
$stats = get_field('hero_stats');
$bg = get_field('hero_bg_image');
?>
<section class="relative w-full flex items-center overflow-hidden" style="min-height:100vh;font-family:'Barlow',sans-serif;">
    <?php if ($bg) : ?>
    <div class="absolute inset-0" style="background-image:url(<?php echo esc_url($bg['url']); ?>);background-size:cover;background-position:center 40%;"></div>
    <?php endif; ?>
    <div class="absolute inset-0" style="background:linear-gradient(105deg,rgba(3,56,105,0.88) 0%,rgba(3,56,105,0.65) 50%,rgba(3,56,105,0.4) 100%);"></div>
    <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(3,56,105,0.95) 0%,transparent 60%);"></div>
    <div class="absolute left-0 top-0 bottom-0" style="width:5px;background:#fcdb00;"></div>

    <div class="relative container-main w-full" style="padding-top:160px;padding-bottom:120px;">
        <div style="max-width:800px;">
            <?php if ($badge) : ?>
            <div class="inline-flex items-center gap-2.5 mb-7" style="background:rgba(252,219,0,0.12);border:1px solid rgba(252,219,0,0.4);border-radius:2px;padding:6px 16px;">
                <div style="width:8px;height:8px;background:#fcdb00;border-radius:50%;"></div>
                <span style="color:#fcdb00;font-size:0.78rem;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;"><?php echo esc_html($badge); ?></span>
            </div>
            <?php endif; ?>

            <?php if ($h1) : ?>
            <h1 class="font-heading" style="font-size:clamp(2.6rem,5.5vw,4.4rem);font-weight:900;color:#ffffff;line-height:1.05;letter-spacing:-0.01em;margin-bottom:12px;text-transform:uppercase;">
                <?php echo esc_html($h1); ?>
                <?php if ($h2) : ?><br><span style="color:#fcdb00;font-style:italic;"><?php echo esc_html($h2); ?></span><?php endif; ?>
            </h1>
            <?php endif; ?>

            <?php if ($sub) : ?>
            <p style="color:rgba(226,232,240,0.9);font-size:clamp(1rem,1.6vw,1.2rem);line-height:1.7;margin-bottom:44px;max-width:680px;font-weight:400;">
                <?php echo esc_html($sub); ?>
            </p>
            <?php endif; ?>

            <div class="flex gap-4 flex-wrap">
                <?php if ($cta1_text) :
                    $url1 = $cta1_link ? $cta1_link['url'] : '#kontakt';
                ?>
                <a href="<?php echo esc_url($url1); ?>" class="btn-primary" style="padding:16px 36px;font-size:0.9rem;box-shadow:0 4px 24px rgba(252,219,0,0.3);">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.12 1.18 2 2 0 012.11 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                    <?php echo esc_html($cta1_text); ?>
                </a>
                <?php endif; ?>
                <?php if ($cta2_text) :
                    $url2 = $cta2_link ? $cta2_link['url'] : '#technika';
                ?>
                <a href="<?php echo esc_url($url2); ?>" class="btn-outline" style="padding:16px 36px;font-size:0.9rem;">
                    <?php echo esc_html($cta2_text); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <?php endif; ?>
            </div>

            <?php if ($stats) : ?>
            <div class="flex flex-wrap" style="margin-top:72px;">
                <?php foreach ($stats as $i => $stat) : ?>
                <div style="padding:20px 36px;<?php echo $i > 0 ? 'border-left:1px solid rgba(255,255,255,0.15);' : 'padding-left:0;'; ?>">
                    <div class="font-heading" style="font-size:2.2rem;font-weight:800;color:#fcdb00;line-height:1;"><?php echo esc_html($stat['value']); ?></div>
                    <div style="color:rgba(226,232,240,0.7);font-size:0.78rem;font-weight:500;text-transform:uppercase;letter-spacing:0.1em;margin-top:4px;"><?php echo esc_html($stat['label']); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="absolute left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 cursor-pointer" style="bottom:36px;">
        <span style="color:rgba(255,255,255,0.5);font-size:0.7rem;letter-spacing:0.12em;text-transform:uppercase;"><?php _e('Přejít dolů', 'potapetska'); ?></span>
        <div style="width:24px;height:38px;border:2px solid rgba(255,255,255,0.3);border-radius:12px;display:flex;justify-content:center;padding-top:6px;">
            <div style="width:4px;height:8px;background:#fcdb00;border-radius:2px;animation:scrollBounce 1.6s ease-in-out infinite;"></div>
        </div>
    </div>
</section>
