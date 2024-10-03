<?php
$args = array(
    'post_type' => 'post', // 投稿タイプを指定（例: 'post', 'page', カスタム投稿タイプなど）
    'posts_per_page' => 5  // 表示する投稿数を設定
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="newsPosts__item">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>" alt="<?php the_title_attribute(); ?>" class="newsPosts__img">
            <div class="newsPosts__texts">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                <h3 class="newsPosts__title"><?php the_title(); ?></h3>
                <p class="newsPosts__desc"><?php echo get_the_excerpt(); ?></p>
            </div>
        </a>
    <?php endwhile;
else : ?>
    <p class="newsPosts__no-posts">お知らせはありません。</p>
<?php endif;

wp_reset_postdata(); ?>
