<?php
$label = get_field('projects_select_label');
$heading = get_field('projects_select_heading');
$heading2 = get_field('projects_select_heading2');
$projects = get_field('projects_select_items');
if (!$projects) return;
?>
<section style="background:#f0f2f5;padding:100px 0;">
    <div class="container-main">
        <?php get_template_part('parts/section-header', null, array(
            'label' => $label,
            'heading' => $heading,
            'heading2' => $heading2,
        )); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php foreach ($projects as $project) :
                $cat_label = get_field('projekt_category_label', $project->ID);
                $location = get_field('projekt_location_text', $project->ID);
                $date = get_field('projekt_date', $project->ID);
                $thumb = get_the_post_thumbnail_url($project->ID, 'medium_large');
            ?>
            <a href="<?php echo get_permalink($project->ID); ?>" class="project-card">
                <div style="height:200px;overflow:hidden;position:relative;">
                    <?php if ($thumb) : ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($project->post_title); ?>" style="width:100%;height:100%;object-fit:cover;display:block;">
                    <?php else : ?>
                    <div style="width:100%;height:100%;background:#e5e7eb;"></div>
                    <?php endif; ?>
                    <div class="absolute inset-0" style="background:linear-gradient(to top,rgba(3,56,105,0.55) 0%,transparent 70%);"></div>
                    <?php if ($cat_label) : ?>
                    <div class="absolute" style="top:16px;left:16px;background:#fcdb00;color:#033869;font-size:0.65rem;font-weight:800;letter-spacing:0.1em;text-transform:uppercase;padding:6px 12px;border-radius:2px;">
                        <?php echo esc_html($cat_label); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div style="padding:28px 24px;">
                    <h3 class="font-heading" style="font-size:1.2rem;font-weight:800;color:#033869;text-transform:uppercase;letter-spacing:0.02em;margin-bottom:12px;line-height:1.2;">
                        <?php echo esc_html($project->post_title); ?>
                    </h3>
                    <div class="flex items-center gap-4 mb-3.5">
                        <?php if ($location) : ?>
                        <span class="flex items-center gap-1" style="color:#9ca3af;font-size:0.82rem;">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php echo esc_html($location); ?>
                        </span>
                        <?php endif; ?>
                        <?php if ($date) : ?>
                        <span class="flex items-center gap-1" style="color:#9ca3af;font-size:0.82rem;">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            <?php echo esc_html($date); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php if ($project->post_excerpt) : ?>
                    <p style="color:#6b7280;font-size:0.88rem;line-height:1.6;margin-bottom:18px;"><?php echo esc_html($project->post_excerpt); ?></p>
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
    </div>
</section>
