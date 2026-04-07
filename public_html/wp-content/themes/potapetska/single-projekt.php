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
<section class="bg-gradient-to-br from-primary to-primary-dark pt-[140px] pb-[80px] relative">
    <div class="container-main relative z-[1]">
        <div class="max-w-[800px]">
            <div class="section-label mb-5">
                <div class="section-label-line"></div>
                <span class="section-label-text text-yellow"><?php _e('Referenční projekt', 'potapetska'); ?></span>
            </div>
            <h1 class="text-white mb-5"><?php the_title(); ?></h1>
            <?php if ($subtitle) : ?>
            <p class="text-[rgba(226,232,240,0.85)] text-[1.15rem] leading-[1.7]"><?php echo esc_html($subtitle); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Gallery + Info -->
<?php if ($gallery || $date || $location) : ?>
<section class="bg-white py-[80px]">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-[1.2fr_0.8fr] gap-16 items-start">
            <?php if ($gallery) : ?>
            <div>
                <div class="rounded overflow-hidden mb-5 h-[500px] border border-primary/10">
                    <img src="<?php echo esc_url($gallery[0]['url']); ?>" alt="<?php echo esc_attr($gallery[0]['alt']); ?>" class="gallery-main-image w-full h-full object-cover block">
                </div>
                <?php if (count($gallery) > 1) : ?>
                <div class="grid gap-3 mb-8" style="grid-template-columns:repeat(<?php echo min(count($gallery), 6); ?>,1fr);">
                    <?php foreach ($gallery as $i => $img) : ?>
                    <button class="gallery-thumb<?php echo $i === 0 ? ' active' : ''; ?> rounded-[3px] overflow-hidden p-0 bg-transparent h-[80px] <?php echo $i === 0 ? 'border-2 border-yellow' : 'border border-primary/10'; ?>">
                        <img src="<?php echo esc_url($img['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" class="w-full h-full object-cover block">
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
                <h2 class="font-heading text-[1.6rem] text-primary mb-8"><?php _e('Informace o projektu', 'potapetska'); ?></h2>
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
                        <div class="text-gray-muted text-[0.7rem] font-bold tracking-[0.14em] uppercase mb-2">
                            <?php echo esc_html($item['label']); ?>
                        </div>
                        <div class="font-heading text-[1.35rem] font-bold text-primary tracking-[0.02em] leading-[1.3]">
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
<section class="bg-gray-bg py-[80px]">
    <div class="container-main">
        <div class="section-label mb-4">
            <div class="section-label-line"></div>
            <span class="section-label-text text-primary"><?php _e('Realizované služby', 'potapetska'); ?></span>
        </div>
        <h2 class="text-primary mb-12"><?php _e('Použité technologie a služby', 'potapetska'); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php foreach ($services as $svc) :
                $link_data = !empty($svc['service_link']) ? $svc['service_link'] : null;
                $url = $link_data ? $link_data['url'] : '#';
            ?>
            <a href="<?php echo esc_url($url); ?>" class="block no-underline rounded p-7 transition-all duration-300 card-hover bg-white border border-primary/10">
                <h3 class="font-heading text-[1.25rem] font-extrabold text-primary uppercase tracking-[0.02em] leading-[1.2] mb-[10px]">
                    <?php echo esc_html($svc['service_name']); ?>
                </h3>
                <?php if (!empty($svc['service_description'])) : ?>
                <p class="text-gray-body text-[0.9rem] leading-[1.6] m-0 mb-3"><?php echo esc_html($svc['service_description']); ?></p>
                <?php endif; ?>
                <div class="inline-flex items-center gap-2 rounded-[3px] bg-primary text-white px-4 py-[10px] text-[0.78rem] font-bold tracking-[0.04em]">
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
<section class="bg-white py-[80px]">
    <div class="container-main">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <?php
            $map_lat = !empty($map['lat']) ? floatval($map['lat']) : null;
            $map_lng = !empty($map['lng']) ? floatval($map['lng']) : null;
            $map_address = !empty($map['address']) ? $map['address'] : '';
            if ($map_lat && $map_lng) : ?>
            <div>
                <div class="section-label mb-4">
                    <div class="section-label-line"></div>
                    <span class="section-label-text text-primary"><?php _e('Místo realizace', 'potapetska'); ?></span>
                </div>
                <?php if ($map_address) : ?>
                <h2 class="text-primary mb-6"><?php echo esc_html($map_address); ?></h2>
                <?php endif; ?>
                <div class="rounded overflow-hidden h-[450px] border border-primary/10">
                    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
                    <div id="projekt-map" class="w-full h-full bg-gray-bg"></div>
                    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
                    <script>
                    (function() {
                        var lat = <?php echo $map_lat; ?>;
                        var lng = <?php echo $map_lng; ?>;
                        var map = L.map('projekt-map', { scrollWheelZoom: false }).setView([lat, lng], 15);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; OpenStreetMap',
                            maxZoom: 18
                        }).addTo(map);
                        var icon = L.divIcon({
                            className: 'custom-marker',
                            html: '<div style="width:32px;height:32px;background:#fcdb00;border:3px solid #033869;border-radius:50%;box-shadow:0 2px 8px rgba(0,0,0,0.3);"></div>',
                            iconSize: [32, 32],
                            iconAnchor: [16, 16],
                            popupAnchor: [0, -18]
                        });
                        var marker = L.marker([lat, lng], { icon: icon }).addTo(map);
                        <?php if ($map_address) : ?>
                        marker.bindPopup('<div style="font-family:Barlow,sans-serif;"><strong style="font-family:Barlow Condensed,sans-serif;font-size:1rem;color:#033869;text-transform:uppercase;display:block;margin-bottom:4px;"><?php echo esc_js($map_address); ?></strong></div>').openPopup();
                        <?php endif; ?>
                    })();
                    </script>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($about) : ?>
            <div>
                <div class="section-label mb-4">
                    <div class="section-label-line"></div>
                    <span class="section-label-text text-primary"><?php _e('O projektu', 'potapetska'); ?></span>
                </div>
                <div class="text-gray-dark text-base leading-[1.7]"><?php echo $about; ?></div>
                <?php if ($stats) : ?>
                <div class="grid grid-cols-3 gap-5 mt-4 p-6 rounded bg-gray-light border border-primary/[0.08]">
                    <?php foreach ($stats as $stat) : ?>
                    <div class="text-center">
                        <div class="font-heading text-[2.2rem] font-black text-yellow leading-none mb-[6px]"><?php echo esc_html($stat['value']); ?></div>
                        <div class="text-gray-body text-[0.78rem] font-semibold tracking-[0.06em] uppercase"><?php echo esc_html($stat['label']); ?></div>
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
<section class="bg-gray-light py-[100px]">
    <div class="container-main">
        <div class="section-label mb-4">
            <div class="section-label-line"></div>
            <span class="section-label-text text-primary"><?php _e('Další reference', 'potapetska'); ?></span>
        </div>
        <h2 class="text-primary mb-16"><?php _e('Podobné projekty', 'potapetska'); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($similar as $sp) :
                $sp_thumb = get_the_post_thumbnail_url($sp->ID, 'large');
                $sp_cat = get_field('projekt_category_label', $sp->ID);
                $sp_date = get_field('projekt_date', $sp->ID);
            ?>
            <a href="<?php echo get_permalink($sp->ID); ?>" class="block no-underline rounded overflow-hidden transition-all duration-300 card-hover bg-white border border-primary/[0.08]">
                <div class="h-[280px] overflow-hidden relative">
                    <?php if ($sp_thumb) : ?>
                    <img src="<?php echo esc_url($sp_thumb); ?>" alt="<?php echo esc_attr($sp->post_title); ?>" class="w-full h-full object-cover block">
                    <?php endif; ?>
                    <?php if ($sp_date) : ?>
                    <div class="absolute top-4 right-4 bg-yellow text-primary text-[0.7rem] font-extrabold tracking-[0.08em] uppercase px-3 py-[6px] rounded-[2px]">
                        <?php echo esc_html($sp_date); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="px-6 py-7">
                    <?php if ($sp_cat) : ?>
                    <div class="text-gray-muted text-[0.72rem] font-bold tracking-[0.12em] uppercase mb-2"><?php echo esc_html($sp_cat); ?></div>
                    <?php endif; ?>
                    <h3 class="font-heading text-[1.5rem] font-extrabold text-primary uppercase leading-[1.2] mb-4"><?php echo esc_html($sp->post_title); ?></h3>
                    <div class="flex items-center gap-2 text-primary text-[0.82rem] font-bold tracking-[0.08em] uppercase">
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
