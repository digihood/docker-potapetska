<?php
$label = get_field('our_team_label');
$heading = get_field('our_team_heading');
$members = get_field('our_team_members');
if (!$members) return;
?>
<section class="bg-gray-bg py-[100px]">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'align' => 'center',
        )); ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($members as $member) :
                $role = get_field('team_role', $member->ID);
                $phone = get_field('team_phone', $member->ID);
                $email = get_field('team_email', $member->ID);
                $thumb = get_the_post_thumbnail_url($member->ID, 'medium_large');
            ?>
            <div class="team-card">
                <div class="w-full h-[280px] bg-gray-200 relative overflow-hidden">
                    <?php if ($thumb) : ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($member->post_title); ?>" class="w-full h-full object-cover block">
                    <?php endif; ?>
                    <div class="absolute bottom-0 left-0 right-0 h-[60%] bg-[linear-gradient(to_top,rgba(3,56,105,0.7)_0%,transparent_100%)]"></div>
                </div>
                <div class="px-5 py-6">
                    <h3 class="font-heading text-[1.15rem] font-extrabold text-primary uppercase tracking-[0.02em] mb-1 leading-[1.2]">
                        <?php echo esc_html($member->post_title); ?>
                    </h3>
                    <?php if ($role) : ?>
                    <p class="text-gray-muted text-[0.8rem] font-semibold tracking-[0.05em] uppercase mb-4">
                        <?php echo esc_html($role); ?>
                    </p>
                    <?php endif; ?>
                    <div class="flex flex-col gap-2.5">
                        <?php if ($phone) : ?>
                        <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>" class="flex items-center gap-2 no-underline text-gray-body text-[0.85rem]">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                            <?php echo esc_html($phone); ?>
                        </a>
                        <?php endif; ?>
                        <?php if ($email) : ?>
                        <a href="mailto:<?php echo esc_attr($email); ?>" class="flex items-center gap-2 no-underline text-gray-body text-[0.85rem]">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <?php echo esc_html($email); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="absolute top-0 right-0 w-[3px] h-12 bg-yellow"></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
