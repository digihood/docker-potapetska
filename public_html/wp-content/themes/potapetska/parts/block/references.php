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
<section id="reference" style="background:#f0f2f5;padding:100px 0;position:relative;">
    <div class="container-main relative" style="z-index:2;">
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
                <div style="height:140px;overflow:hidden;position:relative;">
                    <?php if ($thumb) : ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($project->post_title); ?>" style="width:100%;height:100%;object-fit:cover;display:block;">
                    <?php else : ?>
                    <div style="width:100%;height:100%;background:#e5e7eb;"></div>
                    <?php endif; ?>
                    <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(3,56,105,0.55) 0%,transparent 70%);"></div>
                    <?php if ($cat_label) : ?>
                    <div class="absolute" style="top:12px;left:12px;background:#fcdb00;color:#033869;font-size:0.65rem;font-weight:800;letter-spacing:0.1em;text-transform:uppercase;padding:4px 10px;border-radius:2px;">
                        <?php echo esc_html($cat_label); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div style="padding:22px 24px 20px;">
                    <h3 class="font-heading" style="font-size:1.15rem;font-weight:800;color:#033869;text-transform:uppercase;letter-spacing:0.02em;margin-bottom:10px;line-height:1.2;">
                        <?php echo esc_html($project->post_title); ?>
                    </h3>
                    <div class="flex items-center gap-3.5 mb-3">
                        <?php if ($location) : ?>
                        <span class="flex items-center gap-1" style="color:#9ca3af;font-size:0.8rem;">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php echo esc_html($location); ?>
                        </span>
                        <?php endif; ?>
                        <?php if ($date) : ?>
                        <span class="flex items-center gap-1" style="color:#9ca3af;font-size:0.8rem;">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            <?php echo esc_html($date); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php if ($project->post_excerpt) : ?>
                    <p style="color:#6b7280;font-size:0.86rem;line-height:1.6;margin-bottom:16px;"><?php echo esc_html($project->post_excerpt); ?></p>
                    <?php endif; ?>
                    <div class="flex items-center gap-1.5" style="color:#033869;font-size:0.75rem;font-weight:700;letter-spacing:0.06em;text-transform:uppercase;">
                        <?php _e('Zjistit více o projektu', 'potapetska'); ?>
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0" style="height:3px;width:48px;background:#fcdb00;"></div>
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
        <div class="rounded overflow-hidden mb-16" style="background:#ffffff;border:1px solid rgba(3,56,105,0.1);box-shadow:0 2px 8px rgba(3,56,105,0.06);">
            <!-- Category filter tags -->
            <div style="padding:20px 24px;background:#ffffff;border-bottom:1px solid rgba(3,56,105,0.08);display:flex;flex-wrap:wrap;gap:8px;align-items:center;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#033869" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span style="color:#033869;font-size:0.72rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;">
                    <?php _e('Projekty v ČR:', 'potapetska'); ?>
                </span>
                <button class="map-filter active" data-category="all" style="background:#033869;color:#ffffff;font-size:0.7rem;font-weight:600;letter-spacing:0.04em;padding:4px 10px;border-radius:3px;border:1px solid #033869;cursor:pointer;transition:all 0.2s;">
                    <?php _e('Všechny', 'potapetska'); ?>
                </button>
                <?php foreach ($categories as $cat) : ?>
                <button class="map-filter" data-category="<?php echo esc_attr($cat); ?>" style="background:#f0f2f5;color:#42454e;font-size:0.7rem;font-weight:600;letter-spacing:0.04em;padding:4px 10px;border-radius:3px;border:1px solid rgba(3,56,105,0.08);cursor:pointer;transition:all 0.2s;">
                    <?php echo esc_html($cat); ?>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Leaflet Map -->
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <div id="references-map" style="width:100%;height:600px;background:#f0f2f5;"></div>
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
