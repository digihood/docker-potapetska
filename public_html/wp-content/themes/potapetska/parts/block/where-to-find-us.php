<?php
$label = get_field('wtfu_label');
$heading = get_field('wtfu_heading');
$map = get_field('wtfu_map_location');
$address = get_field('wtfu_address');

$lat = !empty($map['lat']) ? floatval($map['lat']) : null;
$lng = !empty($map['lng']) ? floatval($map['lng']) : null;
$mapAddress = !empty($map['address']) ? $map['address'] : $address;
?>
<section class="bg-white py-[100px]">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'align' => 'center',
        )); ?>

        <div class="rounded overflow-hidden border border-primary/10">
            <?php if ($lat && $lng) : ?>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <div id="wtfu-map" class="w-full h-[500px] bg-gray-bg"></div>
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
            <script>
            (function() {
                var lat = <?php echo $lat; ?>;
                var lng = <?php echo $lng; ?>;
                var map = L.map('wtfu-map', { scrollWheelZoom: false }).setView([lat, lng], 15);

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
                <?php if ($mapAddress) : ?>
                marker.bindPopup('<div style="font-family:Barlow,sans-serif;"><strong style="font-family:Barlow Condensed,sans-serif;font-size:1rem;color:#033869;text-transform:uppercase;display:block;margin-bottom:4px;"><?php echo esc_js($mapAddress); ?></strong></div>').openPopup();
                <?php endif; ?>

                setTimeout(function() { map.invalidateSize(); }, 100);
                window.addEventListener('load', function() { map.invalidateSize(); });
            })();
            </script>
            <?php else : ?>
            <div class="flex items-center justify-center w-full h-[500px] bg-gray-bg">
                <div class="text-center">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#033869" stroke-width="1.5" class="mx-auto mb-4"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <?php if ($address) : ?>
                    <p class="font-heading text-[1.2rem] font-bold text-primary uppercase mb-2">
                        <?php echo nl2br(esc_html($address)); ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
