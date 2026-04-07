<?php
$footer_desc = get_field('footer_description', 'option');
$footer_mascot = get_field('footer_mascot_image', 'option');
$footer_certs = get_field('footer_certifications', 'option');
$footer_members = get_field('footer_memberships', 'option');
?>
<footer class="site-footer" role="contentinfo">
    <div class="container-main pt-14 px-6 pb-0">
        <div class="grid grid-cols-1 lg:grid-cols-[220px_1fr_200px] gap-12 pb-10 border-b border-[rgba(255,255,255,0.07)]">
            <!-- Brand -->
            <div>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="h-[60px] w-auto mb-4 block">
                <?php if ($footer_desc) : ?>
                <p class="text-[rgba(226,232,240,0.4)] text-[0.8rem] leading-[1.75] mb-4">
                    <?php echo esc_html($footer_desc); ?>
                </p>
                <?php endif; ?>
                <?php if ($footer_mascot) : ?>
                <img src="<?php echo esc_url($footer_mascot['url']); ?>" alt="<?php echo esc_attr($footer_mascot['alt']); ?>" class="w-[140px] h-[140px] object-cover rounded-lg">
                <?php endif; ?>
            </div>

            <!-- Services menu -->
            <div>
                <h4 class="font-heading text-[0.75rem] font-extrabold text-white uppercase tracking-[0.14em] mb-3 pb-2.5 border-b border-[rgba(255,255,255,0.07)]">
                    <?php _e('Nase sluzby', 'potapetska'); ?>
                </h4>
                <div class="columns-2 gap-x-6">
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
                <h4 class="font-heading text-[0.75rem] font-extrabold text-white uppercase tracking-[0.14em] mb-3 pb-2.5 border-b border-[rgba(255,255,255,0.07)]">
                    <?php _e('Kontakt', 'potapetska'); ?>
                </h4>
                <?php
                $contact_details = get_field('contact_details', 'option');
                if ($contact_details) :
                    foreach ($contact_details as $detail) : ?>
                    <div class="mb-3">
                        <div class="text-[rgba(226,232,240,0.4)] text-[0.67rem] font-bold tracking-[0.1em] uppercase mb-[3px]">
                            <?php echo esc_html($detail['label']); ?>
                        </div>
                        <?php if (!empty($detail['link_url'])) : ?>
                        <a href="<?php echo esc_url($detail['link_url']); ?>" class="text-yellow text-[0.9rem] font-bold no-underline">
                            <?php echo esc_html($detail['value']); ?>
                        </a>
                        <?php else : ?>
                        <span class="text-[rgba(226,232,240,0.6)] text-[0.8rem]">
                            <?php echo esc_html($detail['value']); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php endforeach;
                endif; ?>

                <?php
                $footer_links = get_field('footer_links', 'option');
                if ($footer_links) : ?>
                <div class="mt-[18px]">
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
        <div class="flex items-center gap-8 flex-wrap py-6 border-b border-[rgba(255,255,255,0.06)]">
            <?php if ($footer_certs) : ?>
            <div class="flex items-center gap-2">
                <span class="text-[rgba(226,232,240,0.35)] text-[0.67rem] font-bold tracking-[0.12em] uppercase whitespace-nowrap mr-1">
                    <?php _e('Certifikace:', 'potapetska'); ?>
                </span>
                <?php foreach ($footer_certs as $cert) :
                    if (!empty($cert['image'])) : ?>
                <div class="flex flex-col items-center gap-1">
                    <img src="<?php echo esc_url($cert['image']['url']); ?>" alt="<?php echo esc_attr($cert['label']); ?>" class="h-[60px] w-[60px] object-contain opacity-[0.85]">
                </div>
                <?php endif; endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if ($footer_certs && $footer_members) : ?>
            <div class="w-px h-[44px] bg-[rgba(255,255,255,0.1)] shrink-0"></div>
            <?php endif; ?>

            <?php if ($footer_members) : ?>
            <div class="flex items-center gap-2 flex-wrap">
                <span class="text-[rgba(226,232,240,0.35)] text-[0.67rem] font-bold tracking-[0.12em] uppercase whitespace-nowrap mr-1">
                    <?php _e('Clenstvi:', 'potapetska'); ?>
                </span>
                <?php foreach ($footer_members as $member) : ?>
                <div class="flex items-center gap-1.5 py-[5px] px-3 bg-[rgba(255,255,255,0.04)] border border-[rgba(255,255,255,0.08)] border-l-2 border-l-yellow rounded-sm" title="<?php echo esc_attr($member['full_name']); ?>">
                    <span class="font-heading text-[0.8rem] font-extrabold uppercase tracking-wide whitespace-nowrap text-yellow">
                        <?php echo esc_html($member['abbreviation']); ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
