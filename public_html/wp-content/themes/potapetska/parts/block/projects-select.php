<?php
$label = get_field('projects_select_label');
$heading = get_field('projects_select_heading');
$heading2 = get_field('projects_select_heading2');
$projects = get_field('projects_select_items');
if (!$projects) return;
?>
<section class="bg-gray-bg py-[100px]">
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
                <div class="h-[200px] overflow-hidden relative">
                    <?php if ($thumb) : ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($project->post_title); ?>" class="w-full h-full object-cover block">
                    <?php else : ?>
                    <div class="w-full h-full bg-[#e5e7eb]"></div>
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-[linear-gradient(to_top,rgba(3,56,105,0.55)_0%,transparent_70%)]"></div>
                    <?php if ($cat_label) : ?>
                    <div class="absolute top-4 left-4 bg-yellow text-primary text-[0.65rem] font-extrabold tracking-[0.1em] uppercase py-1.5 px-3 rounded-sm">
                        <?php echo esc_html($cat_label); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="py-7 px-6">
                    <h3 class="font-heading text-[1.2rem] font-extrabold text-primary uppercase tracking-[0.02em] mb-3 leading-[1.2]">
                        <?php echo esc_html($project->post_title); ?>
                    </h3>
                    <div class="flex items-center gap-4 mb-3.5">
                        <?php if ($location) : ?>
                        <span class="flex items-center gap-1 text-gray-muted text-[0.82rem]">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php echo esc_html($location); ?>
                        </span>
                        <?php endif; ?>
                        <?php if ($date) : ?>
                        <span class="flex items-center gap-1 text-gray-muted text-[0.82rem]">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            <?php echo esc_html($date); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php if ($project->post_excerpt) : ?>
                    <p class="text-gray-body text-[0.88rem] leading-[1.6] mb-[18px]"><?php echo esc_html($project->post_excerpt); ?></p>
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
    </div>
</section>
