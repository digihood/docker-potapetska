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
<section class="relative w-full flex items-center overflow-hidden min-h-screen font-sans">
    <?php if ($bg) : ?>
    <div class="absolute inset-0 bg-cover bg-[center_40%]" style="background-image:url(<?php echo esc_url(is_array($bg) ? $bg['url'] : $bg); ?>);"></div>
    <?php endif; ?>
    <div class="absolute inset-0 bg-[linear-gradient(105deg,rgba(3,56,105,0.88)_0%,rgba(3,56,105,0.65)_50%,rgba(3,56,105,0.4)_100%)]"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_top,rgba(3,56,105,0.95)_0%,transparent_60%)]"></div>
    <div class="absolute left-0 top-0 bottom-0 w-[5px] bg-yellow"></div>

    <div class="relative container-main w-full pt-[160px] pb-[120px]">
        <div class="max-w-[800px]">
            <?php if ($badge) : ?>
            <div class="inline-flex items-center gap-2.5 mb-7 bg-yellow/[0.12] border border-[rgba(252,219,0,0.4)] rounded-sm px-4 py-1.5">
                <div class="w-2 h-2 bg-yellow rounded-full"></div>
                <span class="text-yellow text-[0.78rem] font-bold tracking-[0.14em] uppercase"><?php echo esc_html($badge); ?></span>
            </div>
            <?php endif; ?>

            <?php if ($h1) : ?>
            <h1 class="font-heading text-[clamp(2.6rem,5.5vw,4.4rem)] font-black text-white leading-[1.05] tracking-[-0.01em] mb-3 uppercase">
                <?php echo esc_html($h1); ?>
                <?php if ($h2) : ?><br><span class="text-yellow italic"><?php echo esc_html($h2); ?></span><?php endif; ?>
            </h1>
            <?php endif; ?>

            <?php if ($sub) : ?>
            <p class="text-[rgba(226,232,240,0.9)] text-[clamp(1rem,1.6vw,1.2rem)] leading-[1.7] mb-11 max-w-[680px] font-normal">
                <?php echo esc_html($sub); ?>
            </p>
            <?php endif; ?>

            <div class="flex gap-4 flex-wrap">
                <?php if ($cta1_text) :
                    $url1 = $cta1_link ? (is_array($cta1_link) ? $cta1_link['url'] : $cta1_link) : '#kontakt';
                ?>
                <a href="<?php echo esc_url($url1); ?>" class="btn-primary px-9 py-4 text-[0.9rem] shadow-[0_4px_24px_rgba(252,219,0,0.3)]">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.12 1.18 2 2 0 012.11 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                    <?php echo esc_html($cta1_text); ?>
                </a>
                <?php endif; ?>
                <?php if ($cta2_text) :
                    $url2 = $cta2_link ? (is_array($cta2_link) ? $cta2_link['url'] : $cta2_link) : '#technika';
                ?>
                <a href="<?php echo esc_url($url2); ?>" class="btn-outline px-9 py-4 text-[0.9rem]">
                    <?php echo esc_html($cta2_text); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <?php endif; ?>
            </div>

            <?php if ($stats) : ?>
            <div class="flex flex-wrap mt-[72px]">
                <?php foreach ($stats as $i => $stat) : ?>
                <div class="py-5 px-9 <?php echo $i > 0 ? 'border-l border-[rgba(255,255,255,0.15)]' : 'pl-0'; ?>">
                    <div class="font-heading text-[2.2rem] font-extrabold text-yellow leading-none"><?php echo esc_html($stat['value']); ?></div>
                    <div class="text-[rgba(226,232,240,0.7)] text-[0.78rem] font-medium uppercase tracking-[0.1em] mt-1"><?php echo esc_html($stat['label']); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="absolute left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 cursor-pointer bottom-9">
        <span class="text-[rgba(255,255,255,0.5)] text-[0.7rem] tracking-[0.12em] uppercase"><?php _e('Přejít dolů', 'potapetska'); ?></span>
        <div class="w-6 h-[38px] border-2 border-[rgba(255,255,255,0.3)] rounded-xl flex justify-center pt-1.5">
            <div class="w-1 h-2 bg-yellow rounded-sm animate-[scrollBounce_1.6s_ease-in-out_infinite]"></div>
        </div>
    </div>
</section>
