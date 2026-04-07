<?php
$label = get_field('references_label');
$heading = get_field('references_heading');
$heading2 = get_field('references_heading2');
$count = get_field('references_count') ?: 6;
$show_map = get_field('references_show_map');
$show_clients = get_field('references_show_clients');

$projects = get_posts(array(
    'post_type' => 'projekt',
    'posts_per_page' => $count,
    'orderby' => 'date',
    'order' => 'DESC',
));
if (!$projects) return;
?>
<section id="reference" class="bg-gray-bg py-[100px] relative">
    <div class="container-main relative z-[2]">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'heading2' => $heading2,
        )); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-8">
            <?php foreach ($projects as $project) :
                $cat_label = get_field('projekt_category_label', $project->ID);
                $location = get_field('projekt_location_text', $project->ID);
                $date = get_field('projekt_date', $project->ID);
                $thumb = get_the_post_thumbnail_url($project->ID, 'medium_large');
            ?>
            <a href="<?php echo get_permalink($project->ID); ?>" class="project-card">
                <div class="h-[140px] overflow-hidden relative">
                    <?php if ($thumb) : ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($project->post_title); ?>" class="w-full h-full object-cover block">
                    <?php else : ?>
                    <div class="w-full h-full bg-gray-200"></div>
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-[linear-gradient(to_top,rgba(3,56,105,0.55)_0%,transparent_70%)]"></div>
                    <?php if ($cat_label) : ?>
                    <div class="absolute top-3 left-3 bg-yellow text-primary text-[0.65rem] font-extrabold tracking-[0.1em] uppercase py-1 px-2.5 rounded-sm">
                        <?php echo esc_html($cat_label); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="pt-[22px] px-6 pb-5">
                    <h3 class="font-heading text-[1.15rem] font-extrabold text-primary uppercase tracking-[0.02em] mb-2.5 leading-[1.2]">
                        <?php echo esc_html($project->post_title); ?>
                    </h3>
                    <div class="flex items-center gap-3.5 mb-3">
                        <?php if ($location) : ?>
                        <span class="flex items-center gap-1 text-gray-muted text-[0.8rem]">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php echo esc_html($location); ?>
                        </span>
                        <?php endif; ?>
                        <?php if ($date) : ?>
                        <span class="flex items-center gap-1 text-gray-muted text-[0.8rem]">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            <?php echo esc_html($date); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php if ($project->post_excerpt) : ?>
                    <p class="text-gray-body text-[0.86rem] leading-[1.6] mb-4"><?php echo esc_html($project->post_excerpt); ?></p>
                    <?php endif; ?>
                    <div class="flex items-center gap-1.5 text-primary text-[0.75rem] font-bold tracking-[0.06em] uppercase">
                        <?php _e('Zjistit více o projektu', 'potapetska'); ?>
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 h-[3px] w-12 bg-yellow"></div>
            </a>
            <?php endforeach; ?>
        </div>

        <?php if ($show_map) :
            // Get ALL projects for map (not just displayed count)
            $all_projects = get_posts(array(
                'post_type' => 'projekt',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
            ));
            $map_markers = array();
            $categories = array();
            foreach ($all_projects as $mp) {
                $loc = get_field('projekt_map_location', $mp->ID);
                $cat = get_field('projekt_category_label', $mp->ID);
                if ($loc && !empty($loc['lat']) && !empty($loc['lng'])) {
                    $map_markers[] = array(
                        'lat' => floatval($loc['lat']),
                        'lng' => floatval($loc['lng']),
                        'title' => $mp->post_title,
                        'category' => $cat ?: __('Ostatní', 'potapetska'),
                        'address' => $loc['address'] ?? '',
                        'url' => get_permalink($mp->ID),
                        'date' => get_field('projekt_date', $mp->ID),
                    );
                    if ($cat && !in_array($cat, $categories)) {
                        $categories[] = $cat;
                    }
                }
            }
        ?>
        <div class="rounded overflow-hidden mb-16 bg-white border border-primary/[0.1] shadow-[0_2px_8px_rgba(3,56,105,0.06)]">
            <!-- Category filter tags -->
            <div class="py-5 px-6 bg-white border-b border-primary/[0.08] flex flex-wrap gap-2 items-center">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#033869" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span class="text-primary text-[0.72rem] font-bold tracking-[0.08em] uppercase">
                    <?php _e('Projekty v ČR:', 'potapetska'); ?>
                </span>
                <button class="map-filter active bg-primary text-white text-[0.7rem] font-semibold tracking-[0.04em] py-1 px-2.5 rounded-[3px] border border-primary cursor-pointer transition-all duration-200">
                    <?php _e('Všechny', 'potapetska'); ?>
                </button>
                <?php foreach ($categories as $cat) : ?>
                <button class="map-filter bg-gray-bg text-gray-dark text-[0.7rem] font-semibold tracking-[0.04em] py-1 px-2.5 rounded-[3px] border border-primary/[0.08] cursor-pointer transition-all duration-200" data-category="<?php echo esc_attr($cat); ?>">
                    <?php echo esc_html($cat); ?>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Leaflet Map -->
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <div id="references-map" class="w-full h-[600px] bg-gray-bg"></div>
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
            <script>
            (function() {
                var markers = <?php echo json_encode($map_markers); ?>;
                var map = L.map('references-map', {
                    scrollWheelZoom: false
                }).setView([49.8175, 15.473], 7);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap',
                    maxZoom: 18
                }).addTo(map);

                var yellowIcon = L.divIcon({
                    className: 'custom-marker',
                    html: '<div style="width:32px;height:32px;background:#fcdb00;border:3px solid #033869;border-radius:50%;box-shadow:0 2px 8px rgba(0,0,0,0.3);cursor:pointer;"></div>',
                    iconSize: [32, 32],
                    iconAnchor: [16, 16],
                    popupAnchor: [0, -18]
                });

                var allMarkers = [];

                markers.forEach(function(m) {
                    var marker = L.marker([m.lat, m.lng], { icon: yellowIcon }).addTo(map);
                    marker.bindPopup(
                        '<div style="font-family:Barlow,sans-serif;min-width:200px;">' +
                        '<strong style="font-family:Barlow Condensed,sans-serif;font-size:1rem;color:#033869;text-transform:uppercase;display:block;margin-bottom:4px;">' + m.title + '</strong>' +
                        '<span style="font-size:0.75rem;color:#6b7280;display:block;margin-bottom:2px;">' + m.category + (m.date ? ' · ' + m.date : '') + '</span>' +
                        (m.address ? '<span style="font-size:0.75rem;color:#9ca3af;display:block;margin-bottom:8px;">' + m.address + '</span>' : '') +
                        '<a href="' + m.url + '" style="display:inline-block;background:#033869;color:#fff;padding:5px 12px;border-radius:3px;font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;text-decoration:none;">Detail projektu</a>' +
                        '</div>'
                    );
                    marker._category = m.category;
                    allMarkers.push(marker);
                });

                // Filter buttons
                document.querySelectorAll('.map-filter').forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        var cat = this.getAttribute('data-category');

                        document.querySelectorAll('.map-filter').forEach(function(b) {
                            b.style.background = '#f0f2f5';
                            b.style.color = '#42454e';
                            b.style.borderColor = 'rgba(3,56,105,0.08)';
                            b.classList.remove('active');
                        });
                        this.style.background = '#033869';
                        this.style.color = '#ffffff';
                        this.style.borderColor = '#033869';
                        this.classList.add('active');

                        var visibleBounds = [];
                        allMarkers.forEach(function(marker) {
                            if (cat === 'all' || marker._category === cat) {
                                marker.addTo(map);
                                visibleBounds.push(marker.getLatLng());
                            } else {
                                map.removeLayer(marker);
                            }
                        });

                        if (visibleBounds.length > 0) {
                            if (visibleBounds.length === 1) {
                                map.setView(visibleBounds[0], 10);
                            } else {
                                map.fitBounds(visibleBounds, { padding: [50, 50] });
                            }
                        }
                    });
                });
            })();
            </script>
        </div>
        <?php endif; ?>

        <?php if ($show_clients) :
            get_template_part('parts/partners-section');
        endif; ?>
    </div>
</section>
