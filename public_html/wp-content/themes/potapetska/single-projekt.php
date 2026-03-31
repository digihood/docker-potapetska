<?php
get_header();
the_post();

$subtitle = get_field('projekt_subtitle');
$gallery = get_field('projekt_gallery');
$cat_label = get_field('projekt_category_label');
$date = get_field('projekt_date');
$location = get_field('projekt_location_text');
$cost = get_field('projekt_cost');
$client = get_field('projekt_client');
$team = get_field('projekt_team_size');
$dives = get_field('projekt_dives_count');
$depth = get_field('projekt_max_depth');
$about = get_field('projekt_about');
$stats = get_field('projekt_stats');
$services = get_field('projekt_services_used');
$map = get_field('projekt_map_location');
$similar = get_field('projekt_similar');
?>

<!-- Hero -->
<section style="background:linear-gradient(135deg,#033869 0%,#022d5e 100%);padding:140px 0 80px;position:relative;">
    <div class="container-main relative" style="z-index:1;">
        <div style="max-width:800px;">
            <div class="section-label" style="margin-bottom:20px;">
                <div class="section-label-line"></div>
                <span class="section-label-text" style="color:#fcdb00;"><?php _e('Referenční projekt', 'potapetska'); ?></span>
            </div>
            <h1 style="color:#ffffff;margin-bottom:20px;"><?php the_title(); ?></h1>
            <?php if ($subtitle) : ?>
            <p style="color:rgba(226,232,240,0.85);font-size:1.15rem;line-height:1.7;"><?php echo esc_html($subtitle); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Gallery + Info -->
<?php if ($gallery || $date || $location) : ?>
<section style="background:#ffffff;padding:80px 0;">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-[1.2fr_0.8fr] gap-16 items-start">
            <?php if ($gallery) : ?>
            <div>
                <div class="rounded overflow-hidden mb-5" style="height:500px;border:1px solid rgba(3,56,105,0.1);">
                    <img src="<?php echo esc_url($gallery[0]['url']); ?>" alt="<?php echo esc_attr($gallery[0]['alt']); ?>" class="gallery-main-image" style="width:100%;height:100%;object-fit:cover;display:block;">
                </div>
                <?php if (count($gallery) > 1) : ?>
                <div class="grid gap-3 mb-8" style="grid-template-columns:repeat(<?php echo min(count($gallery), 6); ?>,1fr);">
                    <?php foreach ($gallery as $i => $img) : ?>
                    <button class="gallery-thumb<?php echo $i === 0 ? ' active' : ''; ?> rounded-[3px] overflow-hidden p-0 bg-transparent" style="height:80px;border:<?php echo $i === 0 ? '2px solid #fcdb00' : '1px solid rgba(3,56,105,0.1)'; ?>;">
                        <img src="<?php echo esc_url($img['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" style="width:100%;height:100%;object-fit:cover;display:block;">
                    </button>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="flex gap-4 flex-wrap">
                    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="btn-primary">
                        <?php _e('Poptejte podobný projekt', 'potapetska'); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <div>
                <h2 class="font-heading" style="font-size:1.6rem;color:#033869;margin-bottom:32px;"><?php _e('Informace o projektu', 'potapetska'); ?></h2>
                <div class="flex flex-col gap-7">
                    <?php
                    $info_items = array(
                        array('label' => __('Datum realizace', 'potapetska'), 'value' => $date),
                        array('label' => __('Lokace', 'potapetska'), 'value' => $location),
                        array('label' => __('Náklady', 'potapetska'), 'value' => $cost),
                        array('label' => __('Poptavatel', 'potapetska'), 'value' => $client),
                        array('label' => __('Tým', 'potapetska'), 'value' => $team),
                        array('label' => __('Počet ponorů', 'potapetska'), 'value' => $dives),
                        array('label' => __('Maximální hloubka ponorů', 'potapetska'), 'value' => $depth),
                    );
                    foreach ($info_items as $item) :
                        if (empty($item['value'])) continue;
                    ?>
                    <div>
                        <div style="color:#9ca3af;font-size:0.7rem;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;margin-bottom:8px;">
                            <?php echo esc_html($item['label']); ?>
                        </div>
                        <div class="font-heading" style="font-size:1.35rem;font-weight:700;color:#033869;letter-spacing:0.02em;line-height:1.3;">
                            <?php echo esc_html($item['value']); ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Services Used -->
<?php if ($services) : ?>
<section style="background:#f0f2f5;padding:80px 0;">
    <div class="container-main">
        <div class="section-label" style="margin-bottom:16px;">
            <div class="section-label-line"></div>
            <span class="section-label-text" style="color:#033869;"><?php _e('Realizované služby', 'potapetska'); ?></span>
        </div>
        <h2 style="color:#033869;margin-bottom:48px;"><?php _e('Použité technologie a služby', 'potapetska'); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php foreach ($services as $svc) :
                $link_data = !empty($svc['service_link']) ? $svc['service_link'] : null;
                $url = $link_data ? $link_data['url'] : '#';
            ?>
            <a href="<?php echo esc_url($url); ?>" class="block no-underline rounded p-7 transition-all duration-300 card-hover" style="background:#ffffff;border:1px solid rgba(3,56,105,0.1);">
                <h3 class="font-heading" style="font-size:1.25rem;font-weight:800;color:#033869;text-transform:uppercase;letter-spacing:0.02em;line-height:1.2;margin-bottom:10px;">
                    <?php echo esc_html($svc['service_name']); ?>
                </h3>
                <?php if (!empty($svc['service_description'])) : ?>
                <p style="color:#6b7280;font-size:0.9rem;line-height:1.6;margin:0 0 12px;"><?php echo esc_html($svc['service_description']); ?></p>
                <?php endif; ?>
                <div class="inline-flex items-center gap-2 rounded-[3px]" style="background:#033869;color:#ffffff;padding:10px 16px;font-size:0.78rem;font-weight:700;letter-spacing:0.04em;">
                    <?php _e('Více o službě', 'potapetska'); ?>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Map + About -->
<?php if ($map || $about) : ?>
<section style="background:#ffffff;padding:80px 0;">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <?php if ($map) : ?>
            <div>
                <div class="section-label" style="margin-bottom:16px;">
                    <div class="section-label-line"></div>
                    <span class="section-label-text" style="color:#033869;"><?php _e('Místo realizace', 'potapetska'); ?></span>
                </div>
                <h2 style="color:#033869;margin-bottom:24px;"><?php echo esc_html($map['address']); ?></h2>
                <div class="rounded overflow-hidden" style="height:450px;border:1px solid rgba(3,56,105,0.1);">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=<?php echo defined('MAP_API_KEY') ? MAP_API_KEY : ''; ?>&q=<?php echo urlencode($map['address']); ?>&zoom=14" width="100%" height="450" style="border:0;display:block;" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($about) : ?>
            <div>
                <div class="section-label" style="margin-bottom:16px;">
                    <div class="section-label-line"></div>
                    <span class="section-label-text" style="color:#033869;"><?php _e('O projektu', 'potapetska'); ?></span>
                </div>
                <div style="color:#42454e;font-size:1rem;line-height:1.7;"><?php echo $about; ?></div>
                <?php if ($stats) : ?>
                <div class="grid grid-cols-3 gap-5 mt-4 p-6 rounded" style="background:#f8f9fb;border:1px solid rgba(3,56,105,0.08);">
                    <?php foreach ($stats as $stat) : ?>
                    <div class="text-center">
                        <div class="font-heading" style="font-size:2.2rem;font-weight:900;color:#fcdb00;line-height:1;margin-bottom:6px;"><?php echo esc_html($stat['value']); ?></div>
                        <div style="color:#6b7280;font-size:0.78rem;font-weight:600;letter-spacing:0.06em;text-transform:uppercase;"><?php echo esc_html($stat['label']); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Similar Projects -->
<?php if ($similar) : ?>
<section style="background:#f8f9fb;padding:100px 0;">
    <div class="container-main">
        <div class="section-label" style="margin-bottom:16px;">
            <div class="section-label-line"></div>
            <span class="section-label-text" style="color:#033869;"><?php _e('Další reference', 'potapetska'); ?></span>
        </div>
        <h2 style="color:#033869;margin-bottom:64px;"><?php _e('Podobné projekty', 'potapetska'); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($similar as $sp) :
                $sp_thumb = get_the_post_thumbnail_url($sp->ID, 'large');
                $sp_cat = get_field('projekt_category_label', $sp->ID);
                $sp_date = get_field('projekt_date', $sp->ID);
            ?>
            <a href="<?php echo get_permalink($sp->ID); ?>" class="block no-underline rounded overflow-hidden transition-all duration-300 card-hover" style="background:#ffffff;border:1px solid rgba(3,56,105,0.08);">
                <div style="height:280px;overflow:hidden;position:relative;">
                    <?php if ($sp_thumb) : ?>
                    <img src="<?php echo esc_url($sp_thumb); ?>" alt="<?php echo esc_attr($sp->post_title); ?>" style="width:100%;height:100%;object-fit:cover;display:block;">
                    <?php endif; ?>
                    <?php if ($sp_date) : ?>
                    <div class="absolute" style="top:16px;right:16px;background:#fcdb00;color:#033869;font-size:0.7rem;font-weight:800;letter-spacing:0.08em;text-transform:uppercase;padding:6px 12px;border-radius:2px;">
                        <?php echo esc_html($sp_date); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div style="padding:28px 24px;">
                    <?php if ($sp_cat) : ?>
                    <div style="color:#9ca3af;font-size:0.72rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;margin-bottom:8px;"><?php echo esc_html($sp_cat); ?></div>
                    <?php endif; ?>
                    <h3 class="font-heading" style="font-size:1.5rem;font-weight:800;color:#033869;text-transform:uppercase;line-height:1.2;margin-bottom:16px;"><?php echo esc_html($sp->post_title); ?></h3>
                    <div class="flex items-center gap-2" style="color:#033869;font-size:0.82rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">
                        <?php _e('Zobrazit projekt', 'potapetska'); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
