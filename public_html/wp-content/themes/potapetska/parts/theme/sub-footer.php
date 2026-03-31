<?php
$footer_desc = get_field('footer_description', 'option');
$footer_mascot = get_field('footer_mascot_image', 'option');
$footer_certs = get_field('footer_certifications', 'option');
$footer_members = get_field('footer_memberships', 'option');
?>
<footer class="site-footer" role="contentinfo">
    <div class="container-main" style="padding:56px 24px 0;">
        <div class="grid grid-cols-1 lg:grid-cols-[220px_1fr_200px] gap-12 pb-10" style="border-bottom:1px solid rgba(255,255,255,0.07);">
            <!-- Brand -->
            <div>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" style="height:60px;width:auto;margin-bottom:16px;display:block;">
                <?php if ($footer_desc) : ?>
                <p style="color:rgba(226,232,240,0.4);font-size:0.8rem;line-height:1.75;margin-bottom:16px;">
                    <?php echo esc_html($footer_desc); ?>
                </p>
                <?php endif; ?>
                <?php if ($footer_mascot) : ?>
                <img src="<?php echo esc_url($footer_mascot['url']); ?>" alt="<?php echo esc_attr($footer_mascot['alt']); ?>" style="width:140px;height:140px;object-fit:cover;border-radius:8px;">
                <?php endif; ?>
            </div>

            <!-- Services menu -->
            <div>
                <h4 class="font-heading text-[0.75rem] font-extrabold text-white uppercase tracking-[0.14em] mb-3 pb-2.5" style="border-bottom:1px solid rgba(255,255,255,0.07);">
                    <?php _e('Nase sluzby', 'potapetska'); ?>
                </h4>
                <div style="columns:2;column-gap:24px;">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'link_before' => '',
                        'link_after' => '',
                        'fallback_cb' => false,
                        'depth' => 1,
                    ));
                    ?>
                </div>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-heading text-[0.75rem] font-extrabold text-white uppercase tracking-[0.14em] mb-3 pb-2.5" style="border-bottom:1px solid rgba(255,255,255,0.07);">
                    <?php _e('Kontakt', 'potapetska'); ?>
                </h4>
                <?php
                $contact_details = get_field('contact_details', 'option');
                if ($contact_details) :
                    foreach ($contact_details as $detail) : ?>
                    <div style="margin-bottom:12px;">
                        <div style="color:rgba(226,232,240,0.4);font-size:0.67rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:3px;">
                            <?php echo esc_html($detail['label']); ?>
                        </div>
                        <?php if (!empty($detail['link_url'])) : ?>
                        <a href="<?php echo esc_url($detail['link_url']); ?>" style="color:#fcdb00;font-size:0.9rem;font-weight:700;text-decoration:none;">
                            <?php echo esc_html($detail['value']); ?>
                        </a>
                        <?php else : ?>
                        <span style="color:rgba(226,232,240,0.6);font-size:0.8rem;">
                            <?php echo esc_html($detail['value']); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php endforeach;
                endif; ?>

                <?php
                $footer_links = get_field('footer_links', 'option');
                if ($footer_links) : ?>
                <div style="margin-top:18px;">
                    <?php foreach ($footer_links as $flink) :
                        $link_data = $flink['url'] ?? '';
                        $link_url = is_array($link_data) ? ($link_data['url'] ?? '') : $link_data;
                        $link_title = is_array($link_data) ? ($link_data['title'] ?? '') : '';
                        if ($link_url || !empty($flink['label'])) :
                    ?>
                    <a href="<?php echo esc_url($link_url ?: '#'); ?>" class="footer-link">
                        <?php echo esc_html($link_title ?: ($flink['label'] ?? '')); ?>
                    </a>
                    <?php endif; endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Certifications & Memberships -->
        <?php if ($footer_certs || $footer_members) : ?>
        <div class="flex items-center gap-8 flex-wrap py-6" style="border-bottom:1px solid rgba(255,255,255,0.06);">
            <?php if ($footer_certs) : ?>
            <div class="flex items-center gap-2">
                <span style="color:rgba(226,232,240,0.35);font-size:0.67rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;white-space:nowrap;margin-right:4px;">
                    <?php _e('Certifikace:', 'potapetska'); ?>
                </span>
                <?php foreach ($footer_certs as $cert) :
                    if (!empty($cert['image'])) : ?>
                <div class="flex flex-col items-center gap-1">
                    <img src="<?php echo esc_url($cert['image']['url']); ?>" alt="<?php echo esc_attr($cert['label']); ?>" style="height:60px;width:60px;object-fit:contain;opacity:0.85;">
                </div>
                <?php endif; endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if ($footer_certs && $footer_members) : ?>
            <div style="width:1px;height:44px;background:rgba(255,255,255,0.1);flex-shrink:0;"></div>
            <?php endif; ?>

            <?php if ($footer_members) : ?>
            <div class="flex items-center gap-2 flex-wrap">
                <span style="color:rgba(226,232,240,0.35);font-size:0.67rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;white-space:nowrap;margin-right:4px;">
                    <?php _e('Clenstvi:', 'potapetska'); ?>
                </span>
                <?php foreach ($footer_members as $member) : ?>
                <div class="flex items-center gap-1.5" style="padding:5px 12px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-left:2px solid #fcdb00;border-radius:2px;" title="<?php echo esc_attr($member['full_name']); ?>">
                    <span class="font-heading text-[0.8rem] font-extrabold uppercase tracking-wide whitespace-nowrap" style="color:#fcdb00;">
                        <?php echo esc_html($member['abbreviation']); ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
